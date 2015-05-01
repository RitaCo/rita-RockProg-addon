<?php
namespace RockProg\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use RockProg\Model\Table\RockprogDetailsTable;

/**
 * RockProg\Model\Table\RockprogDetailsTable Test Case
 */
class RockprogDetailsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.rock_prog.rockprog_details',
        'plugin.rock_prog.programs',
        'plugin.rock_prog.categories',
        'plugin.rock_prog.types',
        'plugin.rock_prog.superviors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RockprogDetails') ? [] : ['className' => 'RockProg\Model\Table\RockprogDetailsTable'];
        $this->RockprogDetails = TableRegistry::get('RockprogDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RockprogDetails);

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
