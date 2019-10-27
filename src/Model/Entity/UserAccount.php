<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * UserAccount Entity
 *
 * @property string $id
 * @property bool $user_is_active
 * @property string $password
 * @property string $user_id
 * @property string $role_id
 * @property string $username
 * @property string $user_avatar
 * @property string $created_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Role $role
 */
class UserAccount extends Entity
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

    public function _setPassword($value){
            if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
            }
    }


    protected $_accessible = [
        'user_is_active' => true,
        'password' => true,
        'user_id' => true,
        'role_id' => true,
        'username' => true,
        'user_avatar' => true,
        'created_by' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'role' => true,
        'user_account_avatar_candidate' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
