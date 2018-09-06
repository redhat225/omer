<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoleContentDynamicsFixture
 *
 */
class RoleContentDynamicsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'role_content_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'role_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created_by' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'role_id' => ['type' => 'index', 'columns' => ['role_id'], 'length' => []],
            'role_content_id' => ['type' => 'index', 'columns' => ['role_content_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'role_content_dynamics_ibfk_1' => ['type' => 'foreign', 'columns' => ['role_id'], 'references' => ['roles', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'role_content_dynamics_ibfk_2' => ['type' => 'foreign', 'columns' => ['role_content_id'], 'references' => ['role_contents', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 'e1e07dba-b238-45c5-ba24-aa3f6b53baa5',
                'role_content_id' => '8a65ee0d-16af-4b2f-9e7f-4f259096c426',
                'role_id' => '87454134-0730-4d9e-890f-7cd86a50f8cf',
                'created' => '2018-09-05 18:38:47',
                'modified' => '2018-09-05 18:38:47',
                'created_by' => 'a090854c-cb28-46ff-80a9-4cd548d05146'
            ],
        ];
        parent::init();
    }
}
