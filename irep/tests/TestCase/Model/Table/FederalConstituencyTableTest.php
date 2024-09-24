<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FederalConstituencyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FederalConstituencyTable Test Case
 */
class FederalConstituencyTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.federal_constituency',
        'app.states',
        'app.local_govt',
        'app.state',
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
        $config = TableRegistry::exists('FederalConstituency') ? [] : ['className' => 'App\Model\Table\FederalConstituencyTable'];
        $this->FederalConstituency = TableRegistry::get('FederalConstituency', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FederalConstituency);

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
