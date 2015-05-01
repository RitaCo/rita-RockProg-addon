<?php
namespace RockProg\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use RockProg\Model\Table\RockprogProgramsTable;

/**
 * RockProg\Model\Table\RockprogProgramsTable Test Case
 */
class RockprogProgramsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.rock_prog.rockprog_programs',
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
        $config = TableRegistry::exists('RockprogPrograms') ? [] : ['className' => 'RockProg\Model\Table\RockprogProgramsTable'];
        $this->RockprogPrograms = TableRegistry::get('RockprogPrograms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RockprogPrograms);

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
