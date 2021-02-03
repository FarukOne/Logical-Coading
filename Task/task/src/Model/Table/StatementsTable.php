<?php
declare(strict_types=1);

namespace App\Model\Table;

use App\Model\Entity\Statement;
use Cake\Datasource\EntityInterface;
use Cake\Datasource\ResultSetInterface;
use Cake\ORM\Behavior\TimestampBehavior;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statements Model
 *
 * @method Statement newEmptyEntity()
 * @method Statement newEntity(array $data, array $options = [])
 * @method Statement[] newEntities(array $data, array $options = [])
 * @method Statement get($primaryKey, $options = [])
 * @method Statement findOrCreate($search, ?callable $callback = null, $options = [])
 * @method Statement patchEntity(EntityInterface $entity, array $data, array $options = [])
 * @method Statement[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method Statement|false save(EntityInterface $entity, $options = [])
 * @method Statement saveOrFail(EntityInterface $entity, $options = [])
 * @method Statement[]|ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method Statement[]|ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method Statement[]|ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method Statement[]|ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin TimestampBehavior
 */
class StatementsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('statements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param Validator $validator Validator instance.
     * @return Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('transaction_id')
            ->allowEmptyString('transaction_id', null, 'create');

        $validator
            ->scalar('narration')
            ->maxLength('narration', 255)
            ->requirePresence('narration', 'create')
            ->notEmptyString('narration');

        $validator
            ->scalar('purpose')
            ->maxLength('purpose', 255)
            ->requirePresence('purpose', 'create')
            ->notEmptyString('purpose');

        $validator
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmptyString('amount');

        $validator
            ->scalar('deliver_to')
            ->maxLength('deliver_to', 255)
            ->requirePresence('deliver_to', 'create')
            ->notEmptyString('deliver_to');

        return $validator;
    }
}
