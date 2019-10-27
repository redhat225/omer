<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProjectPlannings Model
 *
 * @property \App\Model\Table\ProjectsTable|\Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\ProjectPlanning get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProjectPlanning newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProjectPlanning[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProjectPlanning|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectPlanning|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProjectPlanning patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectPlanning[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProjectPlanning findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProjectPlanningsTable extends Table
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

        $this->setTable('project_plannings');
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
        $validator
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('planning_content')
            ->requirePresence('planning_content', 'create')
            ->notEmpty('planning_content');

        $validator
            ->requirePresence('planning_meta', 'create')
            ->notEmpty('planning_meta');

        $validator
            ->uuid('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->dateTime('deleted')
            ->allowEmpty('deleted');

        $nested_planning_meta_validator = new Validator();
        $nested_planning_meta_validator->allowEmpty('t_1_date')->add('t_1_date',[
                                            'regexpdate' => [
                                                'rule' => ['custom',"/^[0-9]{4}-[0-9]{2}-[0-9]{2}T00:00:00\.000Z+$/i"]
                                            ]
                                       ]);
        $nested_planning_meta_validator->allowEmpty('t1_date')->add('t1_date',[
                                            'regexpdate' => [
                                                'rule' => ['custom',"/^[0-9]{4}-[0-9]{2}-[0-9]{2}T00:00:00\.000Z+$/i"]
                                            ]
                                       ]);
        $nested_planning_meta_validator->allowEmpty('t3_date')->add('t3_date',[
                                            'regexpdate' => [
                                                'rule' => ['custom',"/^[0-9]{4}-[0-9]{2}-[0-9]{2}T00:00:00\.000Z+$/i"]
                                            ]
                                       ]);
        $nested_planning_meta_validator->allowEmpty('t3c_date')->add('t3c_date',[
                                            'regexpdate' => [
                                                'rule' => ['custom',"/^[0-9]{4}-[0-9]{2}-[0-9]{2}T00:00:00\.000Z+$/i"]
                                            ]
                                       ]);
        $validator->addNested('planning_meta',$nested_planning_meta_validator);
        return $validator;
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
