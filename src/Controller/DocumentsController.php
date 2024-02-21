<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;



class DocumentsController extends AppController
{
	

    public function initialize(){
        parent::initialize();
        $this->loadComponent('Upload');
    }
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->Allow(['add']);
    }
	


    public function index()
    {
        $documents = $this->paginate($this->Documents);

        $this->set(compact('documents'));
    }


    public function view($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => []
        ]);

        $this->set('document', $document);
    }


    public function add()
    {
		$this->viewBuilder()->setLayout('view');
        $document = $this->Documents->newEntity();
        if ($this->request->is('post')) {
			
			//debug($this->request->getData());exit;
			
            $nomeDoc = $this->request->getData()['uploadfile']['name'] ;
            $doc   = $this->request->getData()['uploadfile'];
            $document = $this->Documents->patchEntity($document, $this->request->getData());
            $document->uploadfile  = $nomeDoc;
			
			
            
            if ($this->Documents->save($document)) {
				$this->Upload->send($doc);
                $this->Flash->success(__('Currículo enviado com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Falha ao tentar enviar seu currículo. Tente de novo.'));
        }
		
    // Opções para o campo de escolaridade
    $opcoesEscolaridade = [
        'Selecione a escolaridade' => 'Selecione a escolaridade',
        'Ensino Fundamental' => 'Ensino Fundamental',
        'Ensino Médio' => 'Ensino Médio',
        'Graduação' => 'Graduação',
        'Pós-graduação' => 'Pós-graduação',
    ];
	
	    // Opções para o campo empresa
    $filiais = [
        'Selecione a empresa' => 'Selecione a empresa',
        'Matriz' => 'Matriz',
        'Ceará' => 'Ceará',
        'Brasília' => 'Brasília',
    ];

    // Passe as opções para a visão

		
		
		
		
		
		
		
        $this->set(compact('document','opcoesEscolaridade','filiais'));
    }


    public function edit($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $document = $this->Documents->patchEntity($document, $this->request->getData());
            if ($this->Documents->save($document)) {
                $this->Flash->success(__('Documento salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível salvar alteração. Tente de novo.'));
        }
        $this->set(compact('document'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $document = $this->Documents->get($id);
		$doc = $document->uploadfile;
        if ($this->Documents->delete($document)) {
			unlink(WWW_ROOT. DIRECTORY_SEPARATOR .'publico'.  DIRECTORY_SEPARATOR .'img'. DIRECTORY_SEPARATOR.$doc);
            $this->Flash->success(__('Documento deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Falha ao tentar deletar currículo. Tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
