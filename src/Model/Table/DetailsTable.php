<?php
namespace RockProg\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Rita\Core\ORM\Table;
use Cake\Validation\Validator;
use RockProg\Model\Entity\RockprogDetail;

/**
 * RockprogDetails Model
 */
class DetailsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('rockprog_details');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Programs', [
            'foreignKey' => 'program_id',
            'className' => 'RockProg.Programs'
        ]);
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->allowEmpty('location')
            ->allowEmpty('accessories')
            ->allowEmpty('note')
            ->allowEmpty('about')
            ->allowEmpty('condition');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['program_id'], 'Programs'));
        return $rules;
    }
}
