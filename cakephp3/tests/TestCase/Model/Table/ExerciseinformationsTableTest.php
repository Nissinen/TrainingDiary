<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExerciseinformationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExerciseinformationsTable Test Case
 */
class ExerciseinformationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExerciseinformationsTable
     */
    public $Exerciseinformations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.exerciseinformations',
        'app.exercises',
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
        $config = TableRegistry::exists('Exerciseinformations') ? [] : ['className' => 'App\Model\Table\ExerciseinformationsTable'];
        $this->Exerciseinformations = TableRegistry::get('Exerciseinformations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Exerciseinformations);

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
}
