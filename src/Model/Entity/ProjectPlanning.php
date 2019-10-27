<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProjectPlanning Entity
 *
 * @property string $id
 * @property string $planning_content
 * @property string $planning_meta
 * @property string $project_id
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\Project $project
 */
class ProjectPlanning extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'planning_content' => true,
        'planning_meta' => true,
        'project_id' => true,
        'modified' => true,
        'created' => true,
        'deleted' => true,
        'project' => true,
        'created_by' => true
        
    ];
}
