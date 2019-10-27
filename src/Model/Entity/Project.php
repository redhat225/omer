<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
/**
 * Project Entity
 *
 * @property string $id
 * @property string $project_name
 * @property string $project_meta
 * @property \Cake\I18n\FrozenTime $created
 * @property bool $project_is_closed
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime|null $deleted
 *
 * @property \App\Model\Entity\ProjectDeliverable[] $project_deliverables
 * @property \App\Model\Entity\ProjectAccompaniment[] $project_accompaniments
 * @property \App\Model\Entity\ProjectVulnerability[] $project_vulnerabilities
 * @property \App\Model\Entity\UserAccount $user_account
 * @property \App\Model\Entity\ProjectPlanning[] $project_plannings
 */
class Project extends Entity
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
        'project_name' => true,
        'project_meta' => true,
        'created' => true,
        'project_is_closed' => true,
        'modified' => true,
        'created_by' => true,
        'deleted' => true,
        'project_deliverables' => true,
        'project_accompaniments' => true,
        'project_vulnerabilities' => true,
        'user_account' => true,
        'project_plannings' => true
    ];
}
