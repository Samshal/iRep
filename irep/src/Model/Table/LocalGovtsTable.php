<?php
namespace App\Model\Table;

use App\Model\Entity\LocalGovt;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LocalGovts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $States
 * @property \Cake\ORM\Association\BelongsTo $SenatorialDistricts
 * @property \Cake\ORM\Association\BelongsTo $FederalConstituencies
 * @property \Cake\ORM\Association\BelongsTo $StateConstituencies
 */
class LocalGovtsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('local_govts');
        $this->displayField('id_no');
        $this->primaryKey('id_no');
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SenatorialDistricts', [
            'foreignKey' => 'senatorial_district_id'
        ]);
        $this->belongsTo('FederalConstituencies', [
            'foreignKey' => 'federal_constituency_id'
        ]);
        $this->belongsTo('StateConstituencies', [
            'foreignKey' => 'state_constituency_id'
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
            ->add('id_no', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_no', 'create');
            
        $validator
            ->requirePresence('local_govt', 'create')
            ->notEmpty('local_govt');

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
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['senatorial_district_id'], 'SenatorialDistricts'));
        $rules->add($rules->existsIn(['federal_constituency_id'], 'FederalConstituencies'));
        $rules->add($rules->existsIn(['state_constituency_id'], 'StateConstituencies'));
        return $rules;
    }
}
