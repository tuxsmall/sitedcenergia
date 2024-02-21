<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class SlidesController extends AppController
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
        $slides = $this->paginate($this->Slides);

        $this->set(compact('slides'));
    }


    public function view($id = null)
    {
        $slide = $this->Slides->get($id, [
            'contain' => []
        ]);

        $this->set('slide', $slide);
    }

    public function show($id = null)
    {
        $this->viewBuilder()->setLayout('view');
        $slide = $this->Slides->get($id);

        $this->set('slide', $slide);
    }






    
    public function add()
    {
        $slide = $this->Slides->newEntity();
        if ($this->request->is('post')) {


            $nomeImg = $this->request->getData()['uploadfile']['name'] ;
            $imagem   = $this->request->getData()['uploadfile'];


            $slide = $this->Slides->patchEntity($slide, $this->request->getData());
            $slide->uploadfile  = $nomeImg;

            if ($this->Slides->save($slide)) {
                $this->Upload->send($imagem);//Upload Imagem
                $this->Flash->success(__('Slide salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao tentar salvar slide. Tente de novo'));
        }
        $this->set(compact('slide'));
    }





    
    
    public function edit($id = null)
    {
        $slide = $this->Slides->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug($this->request->getData());exit;
            $imagemanterior = $slide->uploadfile;
            
            
            
            if($this->request->getData()['uploadfile']['name'] == true){
                //Tem foto vindo do form
                $nomeImg = $this->request->getData()['uploadfile']['name'] ;
                $imagem   = $this->request->getData()['uploadfile'];
                    
                $slide = $this->Slides->patchEntity($slide, $this->request->getData());
                
                $slide->uploadfile  = $nomeImg;
                
                unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
                //debug($pasta);exit;
                $this->Upload->send($imagem);//Upload Imagem
                    
            }else{
                // Não tem foto vindo do form
                $nomeImg  = $slide->uploadfile;
                $slide = $this->Slides->patchEntity($slide, $this->request->getData());
                $slide->uploadfile  = $nomeImg;
                //debug($Slides);exit;

            }


            if ($this->Slides->save($slide)) {
                $this->Flash->success(__('Slide editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Não foi possível editar este registro. Tente de novo.'));

            }
        }
        $this->set(compact('slide'));



    }





    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slide = $this->Slides->get($id);
        $imagemanterior = $slide->uploadfile;

        if ($this->Slides->delete($slide)) {
            unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
            $this->Flash->success(__('Slide deletado com sucesso'));
        } else {
            $this->Flash->error(__('The slide could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
