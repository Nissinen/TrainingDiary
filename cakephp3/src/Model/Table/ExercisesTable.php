<?php
namespace App\Model\Table;

use App\Model\Entity\Exercise;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Exercises Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Exerciseinformations
 * @property \Cake\ORM\Association\BelongsToMany $Trainings
 */
class ExercisesTable extends Table
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

        $this->table('exercises');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsToMany('Exerciseinformations', [
            'foreignKey' => 'exercise_id',
            'targetForeignKey' => 'exerciseinformation_id',
            'joinTable' => 'exercises_exerciseinformations'
        ]);
        $this->belongsToMany('Trainings', [
            'foreignKey' => 'exercise_id',
            'targetForeignKey' => 'training_id',
            'joinTable' => 'trainings_exercises'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title')
            ->add('title', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('maxweight')
            ->allowEmpty('maxweight');

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
        $rules->add($rules->isUnique(['title']));
        return $rules;
    }
}
