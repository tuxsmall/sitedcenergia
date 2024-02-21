<?php
namespace App\Controller;

use App\Controller\AppController;


class PartnersController extends AppController
{


    public function initialize(){
        parent::initialize();
        $this->loadComponent('Upload');
        
    }

    public function index()
    {
        $partners = $this->paginate($this->Partners);

        $this->set(compact('partners'));
    }


    public function view($id = null)
    {
        $partner = $this->Partners->get($id, [
            'contain' => []
        ]);

        $this->set('partner', $partner);
    }


    public function add()
    {
        $partner = $this->Partners->newEntity();
        if ($this->request->is('post')) {


            $nomeImg = $this->request->getData()['uploadfile']['name'] ;
            $imagem   = $this->request->getData()['uploadfile'];


            $partner = $this->Partners->patchEntity($partner, $this->request->getData());
            $partner->uploadfile  = $nomeImg;

            if ($this->Partners->save($partner)) {
                $this->Upload->send($imagem);//Upload Imagem
                $this->Flash->success(__('Parceiro salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao tentar salvar parceiro. Tente de novo'));
        }
        $this->set(compact('partner'));
    }




    
        
    public function edit($id = null)
    {
        $partner = $this->Partners->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagemanterior = $partner->uploadfile;
            if($this->request->getData()['uploadfile']['name'] == true){
                //Tem foto vindo do form
                $nomeImg = $this->request->getData()['uploadfile']['name'] ;
                $imagem   = $this->request->getData()['uploadfile'];
                    
                $partner = $this->Partners->patchEntity($partner, $this->request->getData());
                $partner->uploadfile  = $nomeImg;
                
                unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
                //debug($pasta);exit;
                $this->Upload->send($imagem);//Upload Imagem
                    
            }else{
                // Não tem foto vindo do form
                $nomeImg  = $partner->uploadfile;
                $partner = $this->Partners->patchEntity($partner, $this->request->getData());
                $partner->uploadfile  = $nomeImg;
                //debug($Partners);exit;

            }
            if ($this->Partners->save($partner)) {
                $this->Flash->success(__('Parceiro editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Não foi possível editar este registro. Tente de novo.'));

            }
        }
        $this->set(compact('partner'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partner = $this->Partners->get($id);
        $imagemanterior = $partner->uploadfile;

        if ($this->Partners->delete($partner)) {
            unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);

            $this->Flash->success(__('Parceiro deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível deletar parceiro. Tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
