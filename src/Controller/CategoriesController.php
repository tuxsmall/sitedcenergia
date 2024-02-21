<?php
namespace App\Controller;

use App\Controller\AppController;


class CategoriesController extends AppController
{


    public function index()
    {
        $categories = $this->paginate($this->Categories);

        $this->set(compact('categories'));
    }

    public function show()
    {
        $this->viewBuilder()->setLayout('view');
        $categories = $this->paginate($this->Categories);
        $this->set(compact('categories'));
    }

    public function details($slug = null)
    {
        $this->viewBuilder()->setLayout('view');
        $category = $this->Categories->findBySlug($slug)->contain(['Kits'=> [
            'sort' => ['Kits.nome' => 'ASC']
        ]
        ])
        ->firstOrFail();;
        $this->set('category', $category);
    }



    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['Kits']
        ]);

        $this->set('category', $category);
    }


    public function add()
    {
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('Nova categoria salva com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível salvar uma nova categoria. Tente de novo.'));
        }
        $this->set(compact('category'));
    }


    public function edit($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('Categoria salva com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível editar essa categoria. Tente de novo.'));
        }
        $this->set(compact('category'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('Categoria deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível deletar essa categoria.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
