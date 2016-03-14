<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HenkiloTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HenkiloTable Test Case
 */
class HenkiloTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HenkiloTable
     */
    public $Henkilo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.henkilo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Henkilo') ? [] : ['className' => 'App\Model\Table\HenkiloTable'];
        $this->Henkilo = TableRegistry::get('Henkilo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Henkilo);

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
