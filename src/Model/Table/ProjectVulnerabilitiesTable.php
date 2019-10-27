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
 * ProjectVulnerabilities Model
 *
 * @property \App\Model\Table\ProjectsTable|\Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\ProjectVulnerability get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProjectVulnerability newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProjectVulnerability[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProjectVulnerability|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectVulnerability|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectVulnerability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectVulnerability[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectVulnerability findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectVulnerabilitiesTable extends Table
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

        $this->setTable('project_vulnerabilities');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

                 $this->belongsTo('UserAccounts')
            ->setForeignKey('modified_by')
            ->setJoinType('INNER');

                     $this->belongsTo('UserAccounts')
            ->setForeignKey('created_by')
            ->setJoinType('INNER');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        //load cache register
        $register = Cache::read('content','register_cache_engine');

        $validator
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('vulnerability_content', 'create')
            ->allowEmpty('vulnerability_content');

        $validator
            ->scalar('vulnerability_report_type')
            ->requirePresence('vulnerability_report_type', 'create')
            ->notEmpty('vulnerability_report_type')
            ->add('vulnerability_report_type',[
                                            'inList' => [
                                                'rule' => function($value) use ($register){
                                                    if(in_array($value,$register->project_deliverables->reports->vulnerability_report_types))
                                                        return true;
                                                    else
                                                        return false;
                                                }

                                            ]
                                      ]);

        $validator
            ->uuid('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->uuid('modified_by')
            ->requirePresence('modified_by', 'create')
            ->notEmpty('modified_by');

        $validator
            ->scalar('vulnerability_report_denomination')
            ->requirePresence('vulnerability_report_denomination', 'create')
            ->notEmpty('vulnerability_report_denomination')
            ->add('vulnerability_report_denomination',[
                'maxLength' => [
                    'rule' => ['maxLength',200]
                ],
                'syntax' => [
                    'rule' => ['custom',"/^[0-9a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒÃ©_\s-.]+$/i"]
                ] 
            ]);

        $validator
            ->dateTime('begin_date')
            ->requirePresence('begin_date', 'create')
            ->notEmpty('begin_date');

        $validator
            ->dateTime('end_date')
            ->requirePresence('end_date', 'create')
            ->notEmpty('end_date');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        $nested_vulnerability_content = new Validator();
        $nested_vulnerability_content->requirePresence('description')
                                      ->add('description',[
                                            'inList' => [
                                                'rule' => function($value) use ($register){
                                                    $exist = false;
                                                    foreach ($register->project_deliverables->reports->vulnerabilities as $vuln) {
                                                        if($vuln->description === $value)
                                                            $exist = true;
                                                    }
                                                    if($exist)
                                                        return true;
                                                    else
                                                        return false;
                                                }

                                            ]
                                      ]);
        $nested_vulnerability_content->requirePresence('type')
                                      ->add('type',[
                                            'inList' => [
                                                'rule' => function($value) use ($register){
                                                    if(in_array($value,$register->project_deliverables->reports->types))
                                                        return true;
                                                    else
                                                        return false;
                                                }

                                            ]
                                      ]);
        $nested_vulnerability_content->requirePresence('riskrating')
                                      ->add('riskrating',[
                                            'inList' => [
                                                'rule' => function($value) use ($register){
                                                $exist = false;
                                                    foreach ($register->project_deliverables->reports->severities as $riskrating) {
                                                        if($riskrating->rating === $value)
                                                            $exist = true;
                                                    }
                                                    if($exist)
                                                        return true;
                                                    else
                                                        return false;
                                                }

                                            ]
                                      ]);
        $nested_vulnerability_content->requirePresence('recommandation');
        $nested_vulnerability_content->requirePresence('resume');
        // $nested_vulnerability_content->requirePresence('scope');

        $validator->addNestedMany('vulnerability_content',$nested_vulnerability_content);
        

        return $validator;
    }

    //before marshall
    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options){
        if(isset($data['action'])){

            switch ($data['action']) {
                case 'add':
                $data['begin_date'] = new \DateTime($data['begin_date']);
                $data['end_date'] = new \DateTime($data['end_date']);
                break;

                case 'update':
                $data['begin_date'] = new \DateTime($data['begin_date']);
                $data['end_date'] = new \DateTime($data['end_date']);
                break;
                
                default:
                    # code...
                break;
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
        $rules->add($rules->existsIn(['modified_by'], 'UserAccounts'));

        return $rules;
    }
}
