<?php
namespace App\Controller;

use App\Controller\AppController;


class ClientsController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Upload');
        
    }

    public function index()
    {
        $clients = $this->paginate($this->Clients);

        $this->set(compact('clients'));
    }


    public function view($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => []
        ]);

        $this->set('client', $client);
    }



    public function add()
    {
        $client = $this->Clients->newEntity();
        if ($this->request->is('post')) {


            $nomeImg = $this->request->getData()['uploadfile']['name'] ;
            $imagem   = $this->request->getData()['uploadfile'];


            $client = $this->Clients->patchEntity($client, $this->request->getData());
            $client->uploadfile  = $nomeImg;

            if ($this->Clients->save($client)) {
                $this->Upload->send($imagem);//Upload Imagem
                $this->Flash->success(__('Cliente salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao tentar salvar Cliente. Tente de novo'));
        }
        $this->set(compact('client'));
    }
        
    public function edit($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagemanterior = $client->uploadfile;
            if($this->request->getData()['uploadfile']['name'] == true){
                //Tem foto vindo do form
                $nomeImg = $this->request->getData()['uploadfile']['name'] ;
                $imagem   = $this->request->getData()['uploadfile'];
                    
                $client = $this->Clients->patchEntity($client, $this->request->getData());
                $client->uploadfile  = $nomeImg;
                
                unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
                //debug($pasta);exit;
                $this->Upload->send($imagem);//Upload Imagem
                    
            }else{
                // Não tem foto vindo do form
                $nomeImg  = $client->uploadfile;
                $client = $this->Clients->patchEntity($client, $this->request->getData());
                $client->uploadfile  = $nomeImg;
                //debug($Clients);exit;

            }
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('Cliente salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Não foi possível salvar Cliente. Tente de novo.'));

            }
        }
        $this->set(compact('client'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->get($id);
        $imagemanterior = $client->uploadfile;
        if ($this->Clients->delete($client)) {
            unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
            $this->Flash->success(__('Cliente deletado com sucesso'));
        } else {
            $this->Flash->error(__('Não foi possível deletar Cliente. Tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
