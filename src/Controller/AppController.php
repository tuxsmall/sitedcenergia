<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;


class AppController extends Controller
{


    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginAction' 	=> ['plugin' => false, 'controller' => 'Users', 'action' => 'login'],
            'logoutRedirect'  => ['plugin' => false,'controller' => 'Pages', 'action' => 'display'],
            'loginRedirect'   => ['plugin' => false, 'controller' => 'kits', 'action' => 'index'],
            //'unauthorizedRedirect' => ['controller' => 'Usuarios','action' => 'logout','prefix' => false, 'plugin' => false],
            'authError' => 'Você não está autorizado a acessar esta área.',
        ]);
        $this->loadComponent('Security', ['blackHoleCallback' => 'forceSSL']);
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function forceSSL()
    {
     return $this->redirect('https://' . env('SERVER_NAME') . $this->request->getAttribute("here"));
    }


    public function beforeFilter(Event $event)
    {   

        parent::beforeFilter($event);
        $this->Security->requireSecure();
        $this->viewBuilder()->setLayout('adm');
        $this->Auth->Allow(['recuperarSenha','login','confirmar','show','details','atualizarsenha','display','ver']);
        
        ///////////////////////slide inicial
        $this->loadModel('Slides');
        $slideinicial = $this->Slides->find()
        ->where(['active'=>'active','status'=>'ativo'])
        ->order(['created' => 'DESC'])
        ->limit(1)->all();

        //debug($slideinicial);exit;
        $this->set('slideinicial', $slideinicial);

            ////////demais slides
            $slides = $this->Slides->find()
            ->where(['status'=>'ativo', 'active !=' => 'active'])
            ->order(['ordem' => 'ASC'])
            ->limit(6);
            $exibeslides = $slides->all();            
            $this->set('exibeslides', $exibeslides);

        ////////////////////historia
        $this->loadModel('Biographies');
        $historia = $this->Biographies->find()
        ->where(['status'=>'ativo'])
        ->first();
        $this->set('historia', $historia);

            ////////logos
            $this->loadModel('Partners');
            $logos = $this->Partners->find()
            ->where(['status'=>'ativo', ])
            ->order(['created' => 'DESC'])
            ->limit(16);
            $exibeslogos = $logos->all();            
            $this->set('exibeslogos', $exibeslogos);
            //debug($exibeslogos);exit;

        ////////Kits
        $this->loadModel('Categories');
        $cats = $this->Categories->find()
        ->where(['status'=>'ativo', ])
        ->order(['ordem' => 'ASC'])
        ->limit(16);
        $exibecats = $cats->all();            
        $this->set('exibecats', $exibecats);
        //debug($exibecats);exit;
            ////////Depoimentos
            $this->loadModel('Clients');
            $clients = $this->Clients->find()
            ->where(['tipo'=>'depoimento', 'status'=>'ativo', ])
            ->order(['created' => 'DESC'])
            ->limit(16);
            $exibeclientes = $clients->all();            
            $this->set('exibeclientes', $exibeclientes);
            ///////////////////////////////
        ////////PROJETOS
        $this->loadModel('Clients');
        $projetos   = $this->Clients->find()
        ->where(['tipo'=>'projeto', 'status'=>'ativo', ])
        ->order(['created' => 'DESC'])
        ->limit(26);
        $exibeprojetos = $projetos->all();            
        $this->set('exibeprojetos', $exibeprojetos);
        ///////////////////////////////
            ////////NEWS
            $this->loadModel('Contents');
            $news   = $this->Contents->find()
            ->where(['status'=>'ativo', ])
            ->order(['created' => 'DESC'])
            ->limit(3);
            $exibenews = $news->all();            
            $this->set('exibenews', $exibenews);
            ///////////////////////////////
            if($this->Auth->user() != null ) {
                $usuariologado  = $this->Auth->user();
                $nomeCompleto   = $usuariologado['nome'];
                $nome           = explode(' ',$nomeCompleto);
                $this->set(compact('nome','usuariologado'));
            }


            
            ///ESTADOS
            $this->loadModel('States');
            $estados = $this->States->find('list', [
                'keyField' => 'id',
                'valueField' => 'estado'
            ]);
            $lista_estados = $estados->toArray();
            $this->set('lista_estados', $lista_estados);
            //debug($lista_estados);exit;






        
    } 
}
