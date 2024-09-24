<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SenatorialDistrictsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SenatorialDistrictsTable Test Case
 */
class SenatorialDistrictsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.senatorial_districts',
        'app.states',
        'app.federal_constituencies',
        'app.local_govts',
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
        $config = TableRegistry::exists('SenatorialDistricts') ? [] : ['className' => 'App\Model\Table\SenatorialDistrictsTable'];
        $this->SenatorialDistricts = TableRegistry::get('SenatorialDistricts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SenatorialDistricts);

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
