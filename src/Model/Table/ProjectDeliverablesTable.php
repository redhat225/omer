<?php
namespace App\Model\Table;

use Cake\Cache\Cache;
use Cake\ORM\TableRegistry;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use ArrayObject;
use Cake\Utility\Text;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Filesystem\File;
use Cake\Network\Exception;
use \Exception as MainException;

/**
 * ProjectDeliverables Model
 *
 * @property \App\Model\Table\ProjectsTable|\Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\ProjectDeliverable get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProjectDeliverable newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProjectDeliverable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProjectDeliverable|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectDeliverable|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectDeliverable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectDeliverable[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectDeliverable findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectDeliverablesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('project_deliverables');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
            'joinType' => 'INNER'
        ]);

         $this->belongsTo('UserAccounts')
            ->setForeignKey('created_by')
            ->setJoinType('INNER');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $register = Cache::read('content','register_cache_engine');

        $validator
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('deliverable_content')
            ->requirePresence('deliverable_content', 'create')
            ->notEmpty('deliverable_content');

        $validator
            ->requirePresence('deliverable_meta', 'create')
            ->allowEmpty('deliverable_meta');

        $validator
            ->uuid('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->requirePresence('deliverable_type','create')
            ->notEmpty('deliverable_type')
            ->add('deliverable_type',[
                            'verify_type' => [
                                'rule' => function($value) use ($register){
                                        if(in_array($value,$register->project_deliverables->types))
                                          return true;
                                        else
                                          return false;
                                }
                             ]
                         ]);

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        $validator
        ->requirePresence('asset','create')
        ->notEmpty('asset')
        ->add('asset',[
            'mimeType' => [
                'rule' => ['mimeType',['image/jpeg','image/jpg','image/png','image/bitmap','image/gif','application/vnd.ms-excel','application/vnd.ms-powerpoint','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/pdf','application/msword','application/vnd.openxmlformats-officedocument.presentationml.presentation']]
            ],
            'fileSize'=>[
                'rule' => ['fileSize', '<', '3MB']
            ],
            'uploadError' => [
                'rule'=>['uploadError']
            ]
        ]);
        return $validator;
    }

    public function beforeSave($event,$entity,$options){
        if($entity->isNew())
        {
            if(isset($entity->asset))
            {
                if(!move_uploaded_file($entity->asset['tmp_name'], WWW_ROOT.'img/deliverables/'.$entity->deliverable_content))
                  return false;
            }
        }
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['project_id'], 'Projects'));
        $rules->add($rules->existsIn(['created_by'], 'UserAccounts'));
        return $rules;
    }
}
