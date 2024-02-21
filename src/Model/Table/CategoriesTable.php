<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class CategoriesTable extends Table
{


    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('categories');
        $this->setDisplayField('categoria');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Kits', [
            'foreignKey' => 'category_id'
        ]);
    }


    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('categoria')
            ->maxLength('categoria', 200)
            ->requirePresence('categoria', 'create')
            ->notEmpty('categoria');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 200)
            ->allowEmpty('slug');
        
        $validator
            ->scalar('aplicacao')
            ->allowEmpty('aplicacao');

        $validator
            ->scalar('status')
            ->maxLength('status', 40)
            ->allowEmpty('status');

        return $validator;
    }
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['categoria']), ['errorField' => 'categoria', 'message' => 'Esta categoria já está em uso. Tente outro nome.']);

        return $rules;
    }
}
