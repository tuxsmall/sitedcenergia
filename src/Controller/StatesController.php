<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;



class StatesController extends AppController
{
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->Allow(['mostrarcidadesdoestado']);
    }


    /* Exibe as cidades do estado em ajax para o sistema de caixa de busca  */
    public function mostrarcidadesdoestado($id = null)
    {
        $this->viewBuilder()->setLayout('ajax');
        $this->loadModel('Cities');
        $gerarcidades = $this->Cities->find('list', [
            'keyField' => 'cidade',
            'valueField' => 'cidade'
        ])
        ->where(['state_id =' => $id])
        ->order(['cidade' => 'ASC'])
        ->toArray();
        $this->set('gerarcidades', $gerarcidades);
    }
    

    public function index()
    {
        $states = $this->paginate($this->States);

        $this->set(compact('states'));
    }


    public function view($id = null)
    {
        $state = $this->States->get($id, [
            'contain' => ['Cities']
        ]);

        $this->set('state', $state);
    }

    public function add()
    {
        $state = $this->States->newEntity();
        if ($this->request->is('post')) {
            $state = $this->States->patchEntity($state, $this->request->getData());
            if ($this->States->save($state)) {
                $this->Flash->success(__('The state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The state could not be saved. Please, try again.'));
        }
        $this->set(compact('state'));
    }


    public function edit($id = null)
    {
        $state = $this->States->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $state = $this->States->patchEntity($state, $this->request->getData());
            if ($this->States->save($state)) {
                $this->Flash->success(__('The state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The state could not be saved. Please, try again.'));
        }
        $this->set(compact('state'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $state = $this->States->get($id);
        if ($this->States->delete($state)) {
            $this->Flash->success(__('The state has been deleted.'));
        } else {
            $this->Flash->error(__('The state could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
