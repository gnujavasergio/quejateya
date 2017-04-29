<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Priorities Model
 *
 * @property \Cake\ORM\Association\HasMany $Posts
 *
 * @method \App\Model\Entity\Priority get($primaryKey, $options = [])
 * @method \App\Model\Entity\Priority newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Priority[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Priority|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Priority patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Priority[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Priority findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PrioritiesTable extends Table
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

        $this->setTable('priorities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Posts', [
            'foreignKey' => 'priority_id'
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
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('level')
            ->requirePresence('level', 'create')
            ->notEmpty('level');

        $validator
            ->requirePresence('color', 'create')
            ->notEmpty('color');

        $validator
            ->boolean('published')
            ->allowEmpty('published');

        $validator
            ->integer('user_created')
            ->requirePresence('user_created', 'create')
            ->notEmpty('user_created');

        $validator
            ->integer('user_modified')
            ->allowEmpty('user_modified');

        return $validator;
    }
}
