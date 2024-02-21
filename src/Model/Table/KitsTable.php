<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class KitsTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('kits');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
    }


    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('uploadfile')
            ->allowEmpty('uploadfile');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 144)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 255)
            ->allowEmpty('slug');

        $validator
            ->scalar('descricao_curta')
            ->allowEmpty('descricao_curta');

        $validator
            ->scalar('descricao_longa')
            ->allowEmpty('descricao_longa');

        $validator
            ->scalar('indicado')
            ->maxLength('indicado', 255)
            ->allowEmpty('indicado');

        $validator
            ->scalar('valor')
            ->maxLength('valor', 100)
            ->allowEmpty('valor');

        $validator
            ->scalar('formaPagamento')
            ->maxLength('formaPagamento', 144)
            ->allowEmpty('formaPagamento');

        $validator
            ->scalar('status')
            ->maxLength('status', 50)
            ->allowEmpty('status');


        $validator
            ->integer('acessos')
            ->allowEmpty('acessos');


        $validator
            ->scalar('garantia')
            ->maxLength('garantia', 144)
            ->allowEmpty('garantia');

        return $validator;
    }


    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }
}
