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
 * ProjectAccompaniments Model
 *
 * @property \App\Model\Table\ProjectsTable|\Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\ProjectAccompaniment get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProjectAccompaniment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProjectAccompaniment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProjectAccompaniment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectAccompaniment|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectAccompaniment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectAccompaniment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectAccompaniment findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectAccompanimentsTable extends Table
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

        $this->setTable('project_accompaniments');
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
            ->requirePresence('accompaniments_meta', 'create')
            ->notEmpty('accompaniments_meta');

        $validator
            ->uuid('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        // accompaniements validator
        // $accompaniements_validator = new Validator();
        // $accompaniements_validator->requirePresence('status')
        //                           ->add('status',[
        //                               'inList' => [
        //                                   'rule' => function($value, $context) use ($register){
        //                                       if(in_array($value,$register->project_accompaniments->status)){
        //                                         return true;
        //                                       }
        //                                     else
        //                                         return false;
        //                                   }
        //                               ]
        //                           ]);

        // $accompaniements_validator->allowEmpty('type')
        //                           ->add('type',[
        //                               'inList' => [
        //                                   'rule'=> function($value,$context)use($register){
        //                                       if(in_array($value,$register->project_accompaniments->types)){
        //                                         return true;
        //                                       }
        //                                     else
        //                                         return false;
        //                                   }
        //                               ]
        //                           ]);

        // $accompaniements_validator->allowEmpty('message')
        //                           ->add('message',[
        //                               'maxlength' => [
        //                                   'rule' => ['maxLength',40]
        //                               ],
        //                               'minlength' => [
        //                                  'rule' => ['minlength',10]
        //                               ]
        //                           ]);

        // $validator->addNested('accompaniments_meta',$accompaniements_validator);

        return $validator;
    }

    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options){

        // if(isset($data->action)){

        //     switch ($data->action) {
        //         case 'create':

        //         break;
                
        //         default:
        //             # code...
        //         break;
        //     }
        // }
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
