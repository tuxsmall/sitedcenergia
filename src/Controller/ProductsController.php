<?php
namespace App\Controller;

use App\Controller\AppController;


class ProductsController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->loadComponent('Upload');
        
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories'],
            'order' => ['created' => 'desc'], // Supondo que a coluna seja 'created' para ordenar por data
            'limit' => 1000 // Define o limite de registros a serem exibidos
        ];
    
        $products = $this->paginate($this->Products);

 
    
        $this->set(compact('products'));
    }
    

    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);

        $this->set('product', $product);
    }


    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {


            $nomeImg = $this->request->getData()['imagem']['name'] ;
            $imagem   = $this->request->getData()['imagem'];


            $product = $this->Products->patchEntity($product, $this->request->getData());
            $product->imagem  = $nomeImg;

            if ($this->Products->save($product)) {
                $this->Upload->send($imagem);//Upload Imagem
                $this->Flash->success(__('Produto salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao tentar salvar produto. Tente de novo'));
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories'));
    }






    public function editd($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories'));
    }



    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagemanterior = $product->imagem;
            
            
            
            if($this->request->getData()['imagem']['name'] == true){
                //Tem foto vindo do form
                $nomeImg = $this->request->getData()['imagem']['name'] ;
                $imagem   = $this->request->getData()['imagem'];
                    
                $product = $this->Products->patchEntity($product, $this->request->getData());
                
                $product->imagem  = $nomeImg;
                //debug($imagem['name']);exit;

                unlink(WWW_ROOT.'cliente' . DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR .'produtos'. DIRECTORY_SEPARATOR.$imagemanterior);
                $this->Upload->send($imagem);//Upload Imagem
                    
            }else{
                // Não tem foto vindo do form
                $nomeImg  = $product->imagem;
                $product = $this->Products->patchEntity($product, $this->request->getData());
                $product->imagem  = $nomeImg;
                //debug($product);exit;

            }


            if ($this->Products->save($product)) {
                $this->Flash->success(__('Produto editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Não foi possível editar este registro. Tente de novo.'));

            }
        }
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories'));


    }

















    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        $imagemanterior = $product->imagem;
        if ($this->Products->delete($product)) {
            unlink(WWW_ROOT.'cliente' . DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR .'produtos'. DIRECTORY_SEPARATOR.$imagemanterior);
            $this->Flash->success(__('Produto deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Não foi possível deletar o produto. Tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
