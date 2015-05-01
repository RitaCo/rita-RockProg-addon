<?php
namespace RockProg\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Rita\Core\ORM\Table;
use Cake\Validation\Validator;
use RockProg\Model\Entity\Program;
use Cake\Database\Type;
Type::build('datetime')->useLocaleParser()->setLocaleFormat([\IntlDateFormatter::SHORT, -1]);
/**
 * Programs Model
 */
class ProgramsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('rockprog_programs');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->addBehavior('Rita/Tools.Slug');
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER',
            'className' => 'RockProg.Categories'
        ]);
        $this->belongsTo('Types', [
            'foreignKey' => 'type_id',
            'joinType' => 'INNER',
            'className' => 'RockProg.Types'
        ]);
        $this->belongsTo('Supervisors', [
            'foreignKey' => 'program_id',
            'joinType' => 'INNER',
            'className' => 'RockProg.Supervisors'
        ]);
        
//        $this->hasOne('Details', [
//            'foreignKey' => 'program_id',
//            'className' => 'RockProg.Detials'
//        ]);        
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
            ->allowEmpty('title')
            ->add('status', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('status')
            ->add('event', 'valid', ['rule' => 'date'])
            ->allowEmpty('event')
            ->add('deadline', 'valid', ['rule' => 'date'])
            ->allowEmpty('deadline')
            ->allowEmpty('price');

        return $validator;
    }
    
    public function validationNew(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->notEmpty('title')
            ->notEmpty('category_id')
            ->notEmpty('type_id');
            
     

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['type_id'], 'Types'));
        $rules->add($rules->existsIn(['supervior_id'], 'Superviors'));
        return $rules;
    }
}
