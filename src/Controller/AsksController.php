<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;



class AsksController extends AppController
{

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->Allow(['show']);
    }




    public function show()
    {
        $this->viewBuilder()->setLayout('view');
        $asks = $this->Asks->find('all', [
            'conditions' => ['status' => 'ativo'],
            'limit' => 30,
        ]);
        $this->set(compact('asks'));
    }
    


    public function index()
    {
        $asks = $this->paginate($this->Asks);

        $this->set(compact('asks'));
    }



    public function view($id = null)
    {
        $ask = $this->Asks->get($id, [
            'contain' => []
        ]);

        $this->set('ask', $ask);
    }


    public function add()
    {
        $ask = $this->Asks->newEntity();
        if ($this->request->is('post')) {
            $ask = $this->Asks->patchEntity($ask, $this->request->getData());
            if ($this->Asks->save($ask)) {
                $this->Flash->success(__('Pergunta salva com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível salvar a pergunta. Tente de novo.'));
        }
        $this->set(compact('ask'));
    }

    public function edit($id = null)
    {
        $ask = $this->Asks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ask = $this->Asks->patchEntity($ask, $this->request->getData());
            if ($this->Asks->save($ask)) {
                $this->Flash->success(__('Pergunta salva com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível salvar a pergunta. Tente de novo.'));
        }
        $this->set(compact('ask'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ask = $this->Asks->get($id);
        if ($this->Asks->delete($ask)) {
            $this->Flash->success(__('Pergunta deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível deletar a pergunta. Tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
