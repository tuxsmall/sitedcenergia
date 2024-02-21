<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class BiographiesTable extends Table
{


    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('biographies');
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
            ->scalar('chamada1')
            ->maxLength('chamada1', 144)
            ->requirePresence('chamada1', 'create')
            ->notEmpty('chamada1');
    
    
        $validator
            ->scalar('slug')
            ->allowEmpty('slug');

        $validator
            ->scalar('chamada2')
            ->maxLength('chamada2', 255)
            ->requirePresence('chamada2', 'create')
            ->notEmpty('chamada2');

        $validator
            ->scalar('bullet1')
            ->maxLength('bullet1', 100)
            ->allowEmpty('bullet1');

        $validator
            ->scalar('bullet2')
            ->maxLength('bullet2', 100)
            ->allowEmpty('bullet2');

        $validator
            ->scalar('bullet3')
            ->maxLength('bullet3', 100)
            ->allowEmpty('bullet3');

        $validator
            ->scalar('uploadfile')
            ->maxLength('uploadfile', 100)
            ->allowEmpty('uploadfile');

        $validator
            ->scalar('texto')
            ->allowEmpty('texto');


        $validator
            ->scalar('missao')
            ->allowEmpty('missao');


        $validator
            ->scalar('visao')
            ->allowEmpty('visao');


        $validator
            ->scalar('valores')
            ->allowEmpty('valores');

        $validator
            ->scalar('status')
            ->maxLength('status', 40)
            ->allowEmpty('status');

        return $validator;
    }
}
