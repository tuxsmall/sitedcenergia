<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calculators Model
 *
 * @method \App\Model\Entity\Calculator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calculator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Calculator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calculator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calculator|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calculator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calculator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calculator findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CalculatorsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('calculators');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('projeto')
            ->maxLength('projeto', 100)
            ->requirePresence('projeto', 'create')
            ->notEmpty('projeto');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 100)
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 100)
            ->requirePresence('cidade', 'create')
            ->notEmpty('cidade');

        $validator
            ->scalar('consumo')
            ->maxLength('consumo', 100)
            ->requirePresence('consumo', 'create')
            ->notEmpty('consumo');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 144)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('whats')
            ->maxLength('whats', 60)
            ->requirePresence('whats', 'create')
            ->notEmpty('whats');

        $validator
            ->scalar('status')
            ->maxLength('status', 60)
            ->allowEmpty('status');

        $validator
            ->scalar('investimento')
            ->maxLength('investimento', 100)
            ->allowEmpty('investimento');

        $validator
            ->scalar('payback')
            ->maxLength('payback', 100)
            ->allowEmpty('payback');

        return $validator;
    }
}
