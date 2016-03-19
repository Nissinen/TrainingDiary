<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExercisesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExercisesTable Test Case
 */
class ExercisesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExercisesTable
     */
    public $Exercises;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.exercises',
        'app.exerciseinformations',
        'app.exercises_exerciseinformations',
        'app.trainings',
        'app.users',
        'app.results',
        'app.trainings_exercises'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Exercises') ? [] : ['className' => 'App\Model\Table\ExercisesTable'];
        $this->Exercises = TableRegistry::get('Exercises', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Exercises);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
