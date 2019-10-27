<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectDeliverablesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectDeliverablesTable Test Case
 */
class ProjectDeliverablesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectDeliverablesTable
     */
    public $ProjectDeliverables;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_deliverables',
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
        $config = TableRegistry::getTableLocator()->exists('ProjectDeliverables') ? [] : ['className' => ProjectDeliverablesTable::class];
        $this->ProjectDeliverables = TableRegistry::getTableLocator()->get('ProjectDeliverables', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectDeliverables);

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
