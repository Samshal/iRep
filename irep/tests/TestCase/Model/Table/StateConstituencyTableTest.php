<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StateConstituencyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StateConstituencyTable Test Case
 */
class StateConstituencyTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.state_constituency',
        'app.states',
        'app.local_govt',
        'app.state',
        'app.federal_constituency',
        'app.senatorial_district',
        'app.senatorial_districts',
        'app.federal_constituencies',
        'app.state_constituencies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StateConstituency') ? [] : ['className' => 'App\Model\Table\StateConstituencyTable'];
        $this->StateConstituency = TableRegistry::get('StateConstituency', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StateConstituency);

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
