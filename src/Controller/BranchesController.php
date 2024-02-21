<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;



class BranchesController extends AppController
{


    public function initialize(){
        parent::initialize();
        $this->loadComponent('Upload');
    }
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->Allow(['show']);
    }




    public function index()
    {
        $branches = $this->paginate($this->Branches);

        $this->set(compact('branches'));
    }

    public function view($id = null)
    {
        $branch = $this->Branches->get($id, [
            'contain' => []
        ]);

        $this->set('branch', $branch);
    }

    

    public function show()
    {
        $this->viewBuilder()->setLayout('view');
        $branches = $this->paginate($this->Branches);
        $this->set(compact('branches'));
    }





    public function add()
    {
        $branch = $this->Branches->newEntity();
        if ($this->request->is('post')) {
            $nomeImg = $this->request->getData()['uploadfile']['name'] ;
            $imagem   = $this->request->getData()['uploadfile'];
            $branch = $this->Branches->patchEntity($branch, $this->request->getData());
            $branch->uploadfile  = $nomeImg;

            if ($this->Branches->save($branch)) {
                $this->Upload->send($imagem);
                $this->Flash->success(__('Filial salva com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao tentar salvar filial. Tente de novo'));
        }
        $this->set(compact('branch'));

    }

    public function edit($id = null)
    {
        $branch = $this->Branches->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagemanterior = $branch->uploadfile;
            if($this->request->getData()['uploadfile']['name'] == true){
                //Tem foto vindo do form
                $nomeImg = $this->request->getData()['uploadfile']['name'] ;
                $imagem   = $this->request->getData()['uploadfile'];
                    
                $branch = $this->Branches->patchEntity($branch, $this->request->getData());
                $branch->uploadfile  = $nomeImg;
                
                unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
                //debug($pasta);exit;
                $this->Upload->send($imagem);//Upload Imagem
                    
            }else{
                // Não tem foto vindo do form
                $nomeImg  = $branch->uploadfile;
                $branch = $this->Branches->patchEntity($branch, $this->request->getData());
                $branch->uploadfile  = $nomeImg;
                //debug($Branches);exit;

            }
            if ($this->Branches->save($branch)) {
                $this->Flash->success(__('Filial editada com sucesso!'));
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Não foi possível editar este registro. Tente de novo.'));
            }
        }
        $this->set(compact('branch'));
    }





    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $branch = $this->Branches->get($id);
        $imagemanterior = $branch->uploadfile;

        if ($this->Branches->delete($branch)) {
            unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
            $this->Flash->success(__('Filial deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível deletar filial. Tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
