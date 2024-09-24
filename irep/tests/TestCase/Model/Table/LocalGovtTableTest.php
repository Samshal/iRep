<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocalGovtTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocalGovtTable Test Case
 */
class LocalGovtTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('LocalGovt') ? [] : ['className' => 'App\Model\Table\LocalGovtTable'];
        $this->LocalGovt = TableRegistry::get('LocalGovt', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LocalGovt);

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
