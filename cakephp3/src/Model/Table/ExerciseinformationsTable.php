<?php
namespace App\Model\Table;

use App\Model\Entity\Exerciseinformation;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Exerciseinformations Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Exercises
 */
class ExerciseinformationsTable extends Table
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

        $this->table('exerciseinformations');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsToMany('Exercises', [
            'foreignKey' => 'exerciseinformation_id',
            'targetForeignKey' => 'exercise_id',
            'joinTable' => 'exercises_exerciseinformations'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('title');

        $validator
            ->integer('weight')
            ->requirePresence('weight', 'create')
            ->notEmpty('weight');

        $validator
            ->allowEmpty('breakduration');

        $validator
            ->integer('repetition')
            ->requirePresence('repetition', 'create')
            ->notEmpty('repetition');

        $validator
            ->integer('setAmount')
            ->requirePresence('setAmount', 'create')
            ->notEmpty('setAmount');

        return $validator;
    }
}
