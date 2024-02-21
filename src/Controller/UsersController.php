<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Utility\Security;
use Cake\Mailer\Email;



class UsersController extends AppController
{


	public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->Allow(['recuperarSenha','login','confirmar','add','atualizarsenha','site']);
    }


    public function site (){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário salvo com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível criar o usuário. Tente de novo.'));
        }
        $this->set(compact('user'));

    }


    public function recuperarsenha($email = null){
        $this->viewBuilder()->setLayout('adm');

        if ($this->request->is('post')) {
            $user = $this->Users->newEntity();;
            //debug($user);exit;
            $verificausuario = $this->Users
                ->find()
                ->select(['id','nome', 'username','recuperarSenha'])
                ->where(['Users.username' => $this->request->getData()['username']])
                ->first();
            //debug($verificausuario->email);exit;
            if(!empty($verificausuario)){
                //if($verificausuario->recuperarSenha == "" ){
                    $user->id = $verificausuario->id;
                    $user->recuperarSenha = Security::hash($this->request->getData()['username'].$verificausuario->id,'sha256', false);
                    
                    //debug($verificausuario->recuperarSenha);exit;
                    $this->Users->save($user);

                    $verificausuario->recuperarSenha = $user->recuperarSenha;
                    $emailusuario                    = $verificausuario->username;
                    $nomeusuario                     = $verificausuario->nome;

                    ////////////////////////////////////////////////////////////
                    $msg   = "
                    Olá, $nomeusuario<br><br><br>
                    Em ". date("d/m/y H:i")." você solicitou uma alteração de senha.<br><br>
                    <a href=\"https://sitedc.clientetop.com.br/users/atualizarsenha/$verificausuario->recuperarSenha\"><strong>CLIQUE AQUI</strong></a> para iniciar o processo de recuperação da sua senha.<br><br><br>
                    Att.<br>
                    Departamento de tecnologia da informação e inovação DC Energia
                            ";
                    $enviaemail = new Email('senhas');
                    $enviaemail->setTo($emailusuario)
                        ->setProfile('senhas')
                        ->setEmailFormat('html')
                        ->setSubject('Recupere sua senha DC Energia')
                        ->send($msg); 
                    //debug($enviaemail);
                    ////////////////////////////////////////////////////////////
                //}
                $this->Flash->success(__('<p class="text-center"><b>Usuário encontrado com sucesso!<b></p> <p class="text-center">Verifique seu email e siga as instruções. O email pode demorar <strong>até 10 minutos</strong> para chegar em sua caixa de entrada.</p>'),['escape' => false]);
            }else{
                $this->Flash->error(__('<p class="font-weight-bold text-center">Usuário não encontrado em nosso banco de dados!</p>
                                        <p class="text-center">Verifique se o email informado está correto e tente de novo.</p>'),
                                        ['escape' => false]
                                    );
            }
        }
        //$this->set(compact('user'));
    }


    
    public function atualizarsenha($recuperarSenha = null)
    {
		$this->viewBuilder()->setLayout('adm');
        $user = $this->Users
        ->find()
        ->select(['id','nome', 'password','username','recuperarSenha'])
        ->where(['Users.recuperarSenha' => $recuperarSenha])
        ->first();
        if($user){
            if ($this->request->is(['patch', 'post', 'put'])) {
                $user->recuperarSenha = Security::hash($user->email.$user->id.date('d/m/y h:i:s'),'sha256', false);
                $user = $this->Users->patchEntity($user, $this->request->getData());
				//debug($this->request->getData());
                if ($this->Users->save($user)) {
					//debug($user);exit;
                    ////////////////////////////////////////////////////////////
                    $nomeusuario   = $user->nome;
                    $emailusuario  = $user->username;
                    $msg   = "
                                Olá, $nomeusuario<br><br><br>
                                Este é um email de confirmação de alteração de senha feito em ".date("d/m/y H:i").".<br><br>
                                Se não foi você quem executou esse procedimento, por favor <a href=\"https://sitedc.clientetop.com.br/users/recuperarsenha\"><strong>CLIQUE AQUI</strong></a> imediatamente para iniciar o processo de mudança de sua senha.
                                <br><br><br>
                                Att.<br>
                                Departamento de tecnologia da informação e inovação DC Energia
                            ";
                    $enviaemail = new Email('senhas');
                    $enviaemail->setTo($emailusuario)
                    ->setProfile('senhas')
                    ->setEmailFormat('html')
                    ->setSubject('Confirmação de alteração de senha DC Energia')
                    ->send($msg); 
                    $this->Flash->success(__('Senha alterada e salva com sucesso!'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Não foi possível alterar sua senha.Tente de novo.'));
            }
            $this->set(compact('user'));
        }else{
                $this->Flash->error(__('<p class="text-center"><strong>Link inválido ou expirado!</strong></p>
                <p class="text-center">Se você estiver tentando atualizar sua senha, por favor, simplesmente recomece o processo.</p>'),
                ['escape' => false]
                );
                return $this->redirect(['action' => 'index']);
        }
    }

    //////////////////////////////////////////////////////////////////




    public function login(){
        if($this->request->is('post')){
            //debug($this->request->getData());exit;
            $user = $this->Auth->Identify();
            //debug($user);exit;
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Usuário e/ou Senha incorretos. Tente de novo.');
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }



    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }


    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }


    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário salvo com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível criar o usuário. Tente de novo.'));
        }
        $this->set(compact('user'));
    }


    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível editar o usuário. Tente de novo.'));
        }
        $this->set(compact('user'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuário deletado com sucesso'));
        } else {
            $this->Flash->error(__('Não foi possível deletar o usuário. Tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
