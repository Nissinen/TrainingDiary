<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ExercisesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ExercisesController Test Case
 */
class ExercisesControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
