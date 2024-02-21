<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table
{


    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
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
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');


        $validator
            ->email('username')
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');



        return $validator;
    }


    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username', 'message' => 'Alguém já está usando esse nome de usuário.']);

        return $rules;
    }
}
