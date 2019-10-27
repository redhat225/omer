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
 * Projects Model
 *
 * @property \App\Model\Table\ProjectAccompanimentsTable|\Cake\ORM\Association\HasMany $ProjectAccompaniments
 * @property \App\Model\Table\ProjectDeliverablesTable|\Cake\ORM\Association\HasMany $ProjectDeliverables
 * @property \App\Model\Table\ProjectPlanningsTable|\Cake\ORM\Association\HasMany $ProjectPlannings
 * @property \App\Model\Table\ProjectVulnerabilitiesTable|\Cake\ORM\Association\HasMany $ProjectVulnerabilities
 *
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectsTable extends Table
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

        $this->setTable('projects');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ProjectAccompaniments', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('ProjectDeliverables', [
            'foreignKey' => 'project_id'
        ]);

         $this->belongsTo('UserAccounts')
            ->setForeignKey('created_by')
            ->setJoinType('INNER');

        $this->hasMany('ProjectPlannings', [
            'foreignKey' => 'project_id'
        ]);
        $this->hasMany('ProjectVulnerabilities', [
            'foreignKey' => 'project_id'
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
        // VALIDATORS
        
        $validator
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('project_name')
            ->maxLength('project_name', 200)
            ->requirePresence('project_name', 'create')
            ->notEmpty('project_name')
            ->add('project_name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table'])
            ->add('project_name',[
                'inList' => [
                    'rule' => ['custom',"/^[0-9a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒÃ©_\s-]+$/i"]
                ]
            ]);


        $validator
            ->requirePresence('project_meta', 'create')
            ->notEmpty('project_meta');

        $validator
            ->boolean('project_is_closed')
            ->requirePresence('project_is_closed', 'create')
            ->notEmpty('project_is_closed');

        $validator
            ->uuid('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');


        $validator
            ->requirePresence('project_accompaniments','create');


        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        // // depth 1 validator
        // $depth_1_validator = new Validator();
        // $depth_1_validator->requirePresence('contributors')
        // ->allowEmpty('contributors');
        // $depth_1_validator->requirePresence('indices');
        // $depth_1_validator->requirePresence('progam')
        //                               ->add('progam',[
        //                                     'inList' => [
        //                                         'rule' => function($value) use ($register){
        //                                             if(in_array($value,$register->projects->programs))
        //                                                 return true;
        //                                             else
        //                                                 return false;
        //                                         }

        //                                         ]
        //                               ]);
        // $depth_1_validator->requirePresence('project_description')
        //                               ->add('project_description',[
        //                                     'minLength' => [
        //                                         'rule'=>['minLength',10]
        //                                     ],
        //                                     'maxLength'=>[
        //                                         'rule'=>['maxLength',200]
        //                                     ]
        //                               ]);
        // $depth_1_validator->requirePresence('project_governance_type')
        //                               ->add('project_governance_type',[
        //                                     'inList' => [
        //                                         'rule' => function($value) use ($register){
        //                                             if(in_array($value,$register->projects->governances))
        //                                                 return true;
        //                                             else
        //                                                 return false;
        //                                         }

        //                                     ]
        //                               ]);
        // $depth_1_validator->requirePresence('project_issue')
        //                               ->add('project_issue',[
        //                                     'inList' => [
        //                                         'rule' => function($value) use ($register){
        //                                             if(in_array($value,$register->projects->issues))
        //                                                 return true;
        //                                             else
        //                                                 return false;
        //                                         }

        //                                     ]
        //                               ]);
        // $depth_1_validator->requirePresence('project_priority')
        //                               ->add('project_priority',[
        //                                     'inList' => [
        //                                         'rule' => function($value) use ($register){
        //                                             if(in_array($value,$register->projects->priorities))
        //                                                 return true;
        //                                             else
        //                                                 return false;
        //                                         }
        //                                     ]
        //                               ]);
        // $depth_1_validator->requirePresence('project_carrier')
        //                               ->add('project_carrier',[
        //                                     'inList' => [
        //                                         'rule' => function($value) use ($register){
        //                                             if(in_array($value,$register->projects->carriers))
        //                                                 return true;
        //                                             else
        //                                                 return false;
        //                                         }
        //                                     ]
        //                               ]);
        // $depth_1_validator->requirePresence('project_customer')
        //                               ->add('project_customer',[
        //                                     'inList' => [
        //                                         'rule' => function($value) use ($register){
        //                                             if(in_array($value,$register->projects->customers))
        //                                                 return true;
        //                                             else
        //                                                 return false;
        //                                         }
        //                                     ]
        //                               ]);
        // $depth_1_validator->requirePresence('project_semester')
        //                               ->add('project_semester',[
        //                                     'inList' => [
        //                                         'rule' => function($value) use ($register){
        //                                             if(in_array($value,$register->projects->semesters))
        //                                                 return true;
        //                                             else
        //                                                 return false;
        //                                         }
        //                                     ]
        //                               ]);
        // $depth_1_validator->requirePresence('project_year')
        //                               ->add('project_year',[
        //                                    'inList' => [
        //                                         'rule' => function($value) use ($register){
        //                                             if(in_array($value,$register->projects->years))
        //                                                 return true;
        //                                             else
        //                                                 return false;
        //                                         }
        //                                     ]
        //                               ]);
        // $validator->addNested('project_meta',$depth_1_validator);
        // // depth 2 validator
        // $depth_2_contributors_validator = new Validator();
        // $depth_2_contributors_validator->requirePresence('is_selected')
        //                               ->add('is_selected','boolean',['rule'=>['boolean']]);
        // $depth_2_contributors_validator->requirePresence('fullname')
        //                               ->add('fullname',[
        //                                     'inList'=>[
        //                                         'rule' =>function($value)use($register){
        //                                             if(in_array($value,$register->projects->team))
        //                                                 return true;
        //                                             else
        //                                                 return false;
        //                                         }
        //                                     ]
        //                               ]);
        // $depth_2_contributors_validator->requirePresence('role')
        //                               ->add('role',[
        //                                     'inList'=>[
        //                                         'rule' => function($value) use ($register){
        //                                             if(in_array($value,$register->projects->team_roles))
        //                                                 return true;
        //                                             else
        //                                                 return false;
        //                                         }
        //                                     ]
        //                               ]);
        // $depth_1_validator->addNestedMany('contributors',$depth_2_contributors_validator);
        // // depth 2 indices validator;
        // $depth_2_indices_validator = new Validator();
        // $depth_2_indices_validator->requirePresence('project_is_client_data_centralized')
        //                           ->add('project_is_client_data_centralized',[
        //                                 'boolean' => [
        //                                     'rule' => ['boolean']
        //                                 ]
        //                           ]);
        // $depth_2_indices_validator->requirePresence('project_is_for_oci_and_subs')
        //                           ->add('project_is_client_data_centralized','boolean',[
        //                                 'rule'=>'boolean'
        //                           ]);
        // $depth_2_indices_validator->requirePresence('project_is_franchise_exposed')
        //                           ->add('project_is_client_data_centralized','boolean',[
        //                                 'rule'=>'boolean'
        //                           ]);
        // $depth_2_indices_validator->requirePresence('project_is_internet_connected')
        //                           ->add('project_is_client_data_centralized','boolean',[
        //                                 'rule'=>'boolean'
        //                           ]);
        // $depth_2_indices_validator->requirePresence('project_is_used_harmful_data')
        //                           ->add('project_is_client_data_centralized','boolean',[
        //                                 'rule'=>'boolean'
        //                           ]);
        // $depth_2_indices_validator->requirePresence('project_is_used_third_connexions')
        //                           ->add('project_is_client_data_centralized','boolean',[
        //                                 'rule'=>'boolean'
        //                           ]);
        // $depth_1_validator->addNested('indices',$depth_2_indices_validator);


        return $validator;
    }

        //before marshall
    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options){

        if(isset($data->action)){

            switch ($data->action) {
                case 'create':
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
        $rules->add($rules->isUnique(['project_name']));
        $rules->add($rules->existsIn(['created_by'], 'UserAccounts'));
        
        return $rules;
    }
}
