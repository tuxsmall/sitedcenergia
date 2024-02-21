<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class SlidesTable extends Table
{


    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('slides');
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
            ->scalar('active')
            ->maxLength('active', 43)
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->scalar('chamada1')
            ->maxLength('chamada1', 140)
            ->requirePresence('chamada1', 'create')
            ->notEmpty('chamada1');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 120)
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->scalar('uploadfile')
            ->allowEmpty('uploadfile');

        $validator
            ->scalar('texto')
            ->allowEmpty('texto');

        $validator
            ->scalar('slug')
            ->allowEmpty('slug');

        $validator
            ->scalar('link')
            ->allowEmpty('link');

        $validator
            ->scalar('status')
            ->maxLength('status', 25)
            ->allowEmpty('status');


        return $validator;
    }



}
