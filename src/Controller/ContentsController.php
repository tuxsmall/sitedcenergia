<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;


class ContentsController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->loadComponent('Upload');
    }
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->Allow(['show','site','listanoticias']);
    }



    public function site(){
        $this->viewBuilder()->setLayout('public');
    }

    public function index()
    {
        $contents = $this->paginate($this->Contents);

        $this->set(compact('contents'));
    }

    public function listanoticias()
    {
        $this->viewBuilder()->setLayout('view');
    
        $contents = $this->paginate($this->Contents->find('all', [
            'conditions' => ['status' => 'ativo'],
            'limit' => 30,
        ]));
    
        $this->set(compact('contents'));
    }
    


    public function view($id = null)
    {
        $content = $this->Contents->get($id, [
            'contain' => []
        ]);

        $this->set('content', $content);
    }



    public function show($slug = null)
    {
        $this->viewBuilder()->setLayout('view');
        $content = $this->Contents->findBySlug($slug)->first();


        $connection = ConnectionManager::get('default');

        ///CONTAGEM DE ACESSOS
        $idcontent          = $content->id;
        $acessos            = $content->acessos;
        $somaacesso         = $acessos + 1;
        $atualiza_acessos   = $connection->update('contents', ['acessos' => $somaacesso], ['id' => $idcontent]);
        

        $outrosposts = $connection->execute("SELECT  * FROM contents  WHERE status = 'ativo'  AND id <> '" . $content->id . "' limit 3")->fetchAll("assoc");
        //debug($outrosposts);exit;

        $this->set('outrosposts', $outrosposts);
        $this->set('content', $content);
    }



    public function add()
    {
        $content = $this->Contents->newEntity();
        if ($this->request->is('post')) {
            $nomeImg = $this->request->getData()['uploadfile']['name'] ;
            $imagem   = $this->request->getData()['uploadfile'];
            $content = $this->Contents->patchEntity($content, $this->request->getData());
            $content->uploadfile  = $nomeImg;

            if ($this->Contents->save($content)) {
                $this->Upload->send($imagem);
                $this->Flash->success(__('Post salvo com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao tentar salvar post. Tente de novo'));
        }
        $this->set(compact('content'));

    }



    public function edit($id = null)
    {
        $content = $this->Contents->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagemanterior = $content->uploadfile;
            if($this->request->getData()['uploadfile']['name'] == true){
                //Tem foto vindo do form
                $nomeImg = $this->request->getData()['uploadfile']['name'] ;
                $imagem   = $this->request->getData()['uploadfile'];
                    
                $content = $this->Contents->patchEntity($content, $this->request->getData());
                $content->uploadfile  = $nomeImg;
                
                unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
                //debug($pasta);exit;
                $this->Upload->send($imagem);//Upload Imagem
                    
            }else{
                // Não tem foto vindo do form
                $nomeImg  = $content->uploadfile;
                $content = $this->Contents->patchEntity($content, $this->request->getData());
                $content->uploadfile  = $nomeImg;
                //debug($Contents);exit;

            }
            if ($this->Contents->save($content)) {
                $this->Flash->success(__('Conteúdo editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Não foi possível editar este registro. Tente de novo.'));
            }
        }
        $this->set(compact('content'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $content = $this->Contents->get($id);
        $imagemanterior = $content->uploadfile;
        if ($this->Contents->delete($content)) {
            unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
            $this->Flash->success(__('Conteúdo deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao tentar deletar esse post. Tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
