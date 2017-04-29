<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Valuations Model
 *
 * @property \Cake\ORM\Association\HasMany $Posts
 *
 * @method \App\Model\Entity\Valuation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Valuation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Valuation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Valuation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Valuation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Valuation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Valuation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ValuationsTable extends Table
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

        $this->setTable('valuations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Posts', [
            'foreignKey' => 'valuation_id'
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
            ->requirePresence('NAME', 'create')
            ->notEmpty('NAME');

        $validator
            ->integer('POSITION')
            ->requirePresence('POSITION', 'create')
            ->notEmpty('POSITION');

        $validator
            ->boolean('published')
            ->allowEmpty('published');

        $validator
            ->integer('user_created')
            ->requirePresence('user_created', 'create')
            ->notEmpty('user_created');

        $validator
            ->integer('user_modified')
            ->requirePresence('user_modified', 'create')
            ->notEmpty('user_modified');

        return $validator;
    }
}
