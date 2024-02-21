<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class PartnersTable extends Table
{


    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('partners');
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
            ->scalar('nome')
            ->maxLength('nome', 144)
            ->allowEmpty('nome');

        $validator
            ->scalar('status')
            ->maxLength('status', 40)
            ->allowEmpty('status');

        return $validator;
    }
}
