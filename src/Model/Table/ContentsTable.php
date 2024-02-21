<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ContentsTable extends Table
{


    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('contents');
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
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->allowEmpty('titulo');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 255)
            ->allowEmpty('slug');

        $validator
            ->scalar('texto')
            ->allowEmpty('texto');

        $validator
            ->scalar('uploadfile')
            ->allowEmpty('uploadfile');

        $validator
            ->scalar('status')
            ->maxLength('status', 40)
            ->allowEmpty('status');

        return $validator;
    }
}
