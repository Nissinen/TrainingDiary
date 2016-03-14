<?php
namespace App\Model\Table;

use App\Model\Entity\Henkilo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Henkilo Model
 *
 */
class HenkiloTable extends Table
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

        $this->table('henkilo');
        $this->displayField('Avain');
        $this->primaryKey('Avain');
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
            ->integer('Avain')
            ->allowEmpty('Avain', 'create');

        $validator
            ->requirePresence('Tunniste', 'create')
            ->notEmpty('Tunniste')
            ->add('Tunniste', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('Etunimet', 'create')
            ->notEmpty('Etunimet');

        $validator
            ->requirePresence('Sukunimi', 'create')
            ->notEmpty('Sukunimi');

        $validator
            ->requirePresence('Sahkoposti', 'create')
            ->notEmpty('Sahkoposti')
            ->add('Sahkoposti', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('Ika')
            ->requirePresence('Ika', 'create')
            ->notEmpty('Ika');

        $validator
            ->requirePresence('Puhelinnumero', 'create')
            ->notEmpty('Puhelinnumero');

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
        $rules->add($rules->isUnique(['Tunniste']));
        $rules->add($rules->isUnique(['Sahkoposti']));
        return $rules;
    }
}
