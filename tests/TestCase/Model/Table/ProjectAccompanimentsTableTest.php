<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectAccompanimentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjectAccompanimentsTable Test Case
 */
class ProjectAccompanimentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjectAccompanimentsTable
     */
    public $ProjectAccompaniments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.project_accompaniments',
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
        $config = TableRegistry::getTableLocator()->exists('ProjectAccompaniments') ? [] : ['className' => ProjectAccompanimentsTable::class];
        $this->ProjectAccompaniments = TableRegistry::getTableLocator()->get('ProjectAccompaniments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProjectAccompaniments);

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
