<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class DocumentsTable extends Table
{


    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('documents');
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
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->integer('idade')
            ->requirePresence('idade', 'create')
            ->notEmpty('idade');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 100)
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->scalar('empresa')
            ->maxLength('empresa', 150)
            ->requirePresence('empresa', 'create')
            ->notEmpty('empresa');

        $validator
            ->scalar('genero')
            ->maxLength('genero', 100)
            ->requirePresence('genero', 'create')
            ->notEmpty('genero');

        $validator
            ->scalar('deficiencia')
            ->maxLength('deficiencia', 100)
            ->requirePresence('deficiencia', 'create')
            ->notEmpty('deficiencia');

        $validator
            ->scalar('setor')
            ->maxLength('setor', 150)
            ->requirePresence('setor', 'create')
            ->notEmpty('setor');

        $validator
            ->scalar('escolaridade')
            ->maxLength('escolaridade', 200)
            ->requirePresence('escolaridade', 'create')
            ->notEmpty('escolaridade');


        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
