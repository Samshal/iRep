<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SenatorialDistrictTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SenatorialDistrictTable Test Case
 */
class SenatorialDistrictTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.senatorial_district',
        'app.states',
        'app.local_govt',
        'app.state',
        'app.federal_constituency',
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
        $config = TableRegistry::exists('SenatorialDistrict') ? [] : ['className' => 'App\Model\Table\SenatorialDistrictTable'];
        $this->SenatorialDistrict = TableRegistry::get('SenatorialDistrict', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SenatorialDistrict);

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
