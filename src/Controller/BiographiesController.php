<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class BiographiesController extends AppController
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
        $biographies = $this->paginate($this->Biographies);

        $this->set(compact('biographies'));
    }


    public function view($id = null)
    {
        $biography = $this->Biographies->get($id, [
            'contain' => []
        ]);

        $this->set('biography', $biography);
    }

    public function show($slug = null)
    {
        $this->viewBuilder()->setLayout('view');
        $biography = $this->Biographies->findBySlug($slug)->first();
        $this->set('biography', $biography);
    }



    
    public function edit($id = null)
    {
        $biography = $this->Biographies->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagemanterior = $biography->uploadfile;
            
            
            
            if($this->request->getData()['uploadfile']['name'] == true){
                //Tem foto vindo do form
                $nomeImg = $this->request->getData()['uploadfile']['name'] ;
                $imagem   = $this->request->getData()['uploadfile'];
                    
                $biography = $this->Biographies->patchEntity($biography, $this->request->getData());
                
                $biography->uploadfile  = $nomeImg;
                
                unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
                //debug($pasta);exit;
                $this->Upload->send($imagem);//Upload Imagem
                    
            }else{
                // Não tem foto vindo do form
                $nomeImg  = $biography->uploadfile;
                $biography = $this->Biographies->patchEntity($biography, $this->request->getData());
                $biography->uploadfile  = $nomeImg;
                //debug($Biographies);exit;

            }


            if ($this->Biographies->save($biography)) {
                $this->Flash->success(__('História editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Não foi possível editar este registro. Tente de novo.'));

            }
        }
        $this->set(compact('biography'));



    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $biography = $this->Biographies->get($id);
        if ($this->Biographies->delete($biography)) {
            $this->Flash->success(__('The biography has been deleted.'));
        } else {
            $this->Flash->error(__('The biography could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
