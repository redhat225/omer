<?php


use Phinx\Migration\AbstractMigration;

class ProjectDeliverables extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('project_deliverables',['id'=>false,'primary_key'=>['id']]);
        $table->addColumn('id','uuid')
        ->addColumn('deliverable_content','text')
        ->addColumn('deliverable_meta','text')
        ->addColumn('deliverable_type','string',['limit'=>200])
        ->addColumn('project_id','uuid')
        ->addColumn('modified','datetime')
        ->addColumn('created_by','uuid')
        ->addColumn('created','datetime')
        ->addColumn('deleted','datetime',['null'=>true])
        ->addForeignKey('project_id','projects','id',['delete'=>'CASCADE','update'=>'CASCADE']);

        $table->create();
    }
}
