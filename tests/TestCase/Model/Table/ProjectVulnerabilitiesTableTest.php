<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectVulnerabilitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectVulnerabilitiesTable Test Case
 */
class ProjectVulnerabilitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectVulnerabilitiesTable
     */
    public $ProjectVulnerabilities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_vulnerabilities',
        'app.user_accounts',
        'app.projects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProjectVulnerabilities') ? [] : ['className' => ProjectVulnerabilitiesTable::class];
        $this->ProjectVulnerabilities = TableRegistry::getTableLocator()->get('ProjectVulnerabilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectVulnerabilities);

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
     * Test beforeMarshal method
     *
     * @return void
     */
    public function testBeforeMarshal()
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
