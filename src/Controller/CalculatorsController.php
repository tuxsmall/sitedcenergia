<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class CalculatorsController extends AppController
{

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->Allow('calcular');
    }


    




    public function calcular() {
        $this->viewBuilder()->setLayout('calc');
        
        $calculator = $this->Calculators->newEntity();
    
        if ($this->request->is('post')) {

            $valorEnergia = floatval($this->request->getData()['consumo']);
            
            $calculator = $this->Calculators->patchEntity($calculator, $this->request->getData());
        
            $calculator->investimento = $calculator->investimento = ($valorEnergia / 0.87) / 117 * 420;
    
            $paybackAnos = $calculator->investimento / $valorEnergia / 12;
            $paybackMeses = round($paybackAnos * 12, 1);
            $calculator->payback = $paybackMeses;


           // $this->render('calcular');
    
            if ($this->Calculators->save($calculator)) {

                $this->Flash->success(__('Sucesso ao executar seu cálculo solar!'));
                //return $this->redirect(['action' => 'calcular']);
                
            } else {
                $this->Flash->error(__('Erro. Tente de novo.'));
            }
        }
    
        $this->set(compact('calculator'));
    }
    

    public function index()
    {
        $this->paginate = [
            'limit' => 60,
            'order' => ['created' => 'desc']
        ];
    
        $calculators = $this->paginate($this->Calculators);
    
        $this->set(compact('calculators'));
    }
    


    public function view($id = null)
    {
        $calculator = $this->Calculators->get($id, [
            'contain' => []
        ]);

        $this->set('calculator', $calculator);
    }




    public function edit($id = null)
    {
        $calculator = $this->Calculators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $calculator = $this->Calculators->patchEntity($calculator, $this->request->getData());
            if ($this->Calculators->save($calculator)) {
                $this->Flash->success(__('Dados atualizados com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro, tente de novo!'));
        }
        $this->set(compact('calculator'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $calculator = $this->Calculators->get($id);
        if ($this->Calculators->delete($calculator)) {
            $this->Flash->success(__('Lead deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao deletar lead. Tente de novo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
