<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ClientsTable extends Table
{


    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('clients');
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
            ->scalar('tipo')
            ->maxLength('tipo', 45)
            ->allowEmpty('tipo');


        $validator
            ->scalar('nome')
            ->maxLength('nome', 144)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');


        $validator
            ->scalar('uploadfile')
            ->allowEmpty('uploadfile');

        $validator
            ->scalar('local')
            ->maxLength('local', 175)
            ->allowEmpty('local');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->allowEmpty('url');

        $validator
            ->scalar('status')
            ->maxLength('status', 40)
            ->allowEmpty('status');

        return $validator;
    }
}
