<?php
namespace App\Model\Table;

use App\Model\Entity\State;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * States Model
 *
 * @property \Cake\ORM\Association\HasMany $FederalConstituencies
 * @property \Cake\ORM\Association\HasMany $LocalGovts
 * @property \Cake\ORM\Association\HasMany $SenatorialDistricts
 * @property \Cake\ORM\Association\HasMany $StateConstituencies
 */
class StatesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('states');
        $this->displayField('id_no');
        $this->displayField('latitude');
        $this->displayField('longitude');
        $this->primaryKey('id_no');
        $this->hasMany('FederalConstituencies', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('LocalGovts', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('SenatorialDistricts', [
            'foreignKey' => 'state_id'
        ]);
        $this->hasMany('StateConstituencies', [
            'foreignKey' => 'state_id'
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
            ->requirePresence('state', 'create')
            ->notEmpty('state');
        
        $validator
        ->requirePresence('latitude', 'create')
        ->notEmpty('latitude');
        
        $validator
        ->requirePresence('longitude', 'create')
        ->notEmpty('longitude');

        return $validator;
    }
}
