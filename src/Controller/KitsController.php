<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;



class KitsController extends AppController
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
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $kits = $this->paginate($this->Kits);
        //debug($kits);exit;

        $this->set(compact('kits'));
    }


    public function view($id = null)
    {
        $kit = $this->Kits->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('kit', $kit);
    }

    public function show($slug = null)
    {
        $this->viewBuilder()->setLayout('view');
        $kit = $this->Kits->findBySlug($slug)->contain(['Categories'])->firstOrFail();
        $this->set('kit', $kit);
    
        $connection = ConnectionManager::get('default');

        ///CONTAGEM DE ACESSOS
        $idkit              = $kit->id;
        $acessos            = $kit->acessos;
        $somaacesso         = $acessos + 1;
        $atualiza_acessos   = $connection->update('kits', ['acessos' => $somaacesso], ['id' => $idkit]);
        ////FIM CONTAGEM ACESSOS
        //debug($kit);exit;
        $outroskits = $connection->execute("SELECT 
        kits.id, 
        kits.uploadfile, 
        kits.nome, 
        kits.category_id,
        kits.slug as slugKit,
        kits.descricao_curta
         FROM kits 
         INNER JOIN categories ON kits.category_id = categories.id WHERE kits.status = 'ativo' AND kits.category_id = " . $kit->category_id . " AND kits.id <> '" . $kit->id . "'")->fetchAll("assoc");

        $this->set('outroskits', $outroskits);
        $this->set('title', $kit->nome);

        
        //debug($$kit->category_id);exit;
    }
    



    public function add()
    {
        $kit = $this->Kits->newEntity();
        if ($this->request->is('post')) {
            $nomeImg = $this->request->getData()['uploadfile']['name'] ;
            $imagem   = $this->request->getData()['uploadfile'];
            $kit = $this->Kits->patchEntity($kit, $this->request->getData());
            $kit->uploadfile  = $nomeImg;

            if ($this->Kits->save($kit)) {
                $this->Upload->send($imagem);
                $this->Flash->success(__('Kit salvo com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao tentar salvar kit. Tente de novo'));
        }
        $categories = $this->Kits->Categories->find('list', ['limit' => 200]);
        $this->set(compact('kit', 'categories'));

    }

    public function edit($id = null)
    {
        $kit = $this->Kits->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagemanterior = $kit->uploadfile;
            if($this->request->getData()['uploadfile']['name'] == true){
                //Tem foto vindo do form
                $nomeImg = $this->request->getData()['uploadfile']['name'] ;
                $imagem   = $this->request->getData()['uploadfile'];
                    
                $kit = $this->Kits->patchEntity($kit, $this->request->getData());
                $kit->uploadfile  = $nomeImg;
                
                unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);
                //debug($pasta);exit;
                $this->Upload->send($imagem);//Upload Imagem
                    
            }else{
                // Não tem foto vindo do form
                $nomeImg  = $kit->uploadfile;
                $kit = $this->Kits->patchEntity($kit, $this->request->getData());
                $kit->uploadfile  = $nomeImg;
                //debug($Kits);exit;

            }
            if ($this->Kits->save($kit)) {
                $this->Flash->success(__('Kit editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Não foi possível editar este registro. Tente de novo.'));
            }
        }
        $categories = $this->Kits->Categories->find('list', ['limit' => 200]);
        $this->set(compact('kit', 'categories'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kit = $this->Kits->get($id);
        $imagemanterior = $kit->uploadfile;

        if ($this->Kits->delete($kit)) {
            unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$imagemanterior);

            $this->Flash->success(__('Kit deletado com sucesso'));
        } else {
            $this->Flash->error(__('Não foi possível deletar. Tente de novo'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
