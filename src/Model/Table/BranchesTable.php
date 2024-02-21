<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class BranchesTable extends Table
{


    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('branches');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }


    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 100)
            ->allowEmpty('estado');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 100)
            ->allowEmpty('cidade');


        $validator
            ->scalar('endeco')
            ->maxLength('endeco', 255)
            ->allowEmpty('endeco');

        $validator
            ->scalar('whatsapp')
            ->maxLength('whatsapp', 100)
            ->allowEmpty('whatsapp');

        $validator
            ->scalar('instagram')
            ->maxLength('instagram', 200)
            ->allowEmpty('instagram');
        $validator
            ->scalar('label')
            ->maxLength('label', 100)
            ->allowEmpty('label');

        return $validator;
    }
}
