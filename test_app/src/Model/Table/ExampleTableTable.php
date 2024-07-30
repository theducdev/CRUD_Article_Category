<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExampleTable Model
 *
 * @method \App\Model\Entity\ExampleTable newEmptyEntity()
 * @method \App\Model\Entity\ExampleTable newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ExampleTable> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExampleTable get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ExampleTable findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ExampleTable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ExampleTable> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExampleTable|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ExampleTable saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ExampleTable>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExampleTable>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ExampleTable>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExampleTable> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ExampleTable>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExampleTable>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ExampleTable>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ExampleTable> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ExampleTableTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('example_table');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->allowEmptyString('tiny_int_column');

        $validator
            ->allowEmptyString('small_int_column');

        $validator
            ->integer('medium_int_column')
            ->allowEmptyString('medium_int_column');

        $validator
            ->integer('int_column')
            ->allowEmptyString('int_column');

        $validator
            ->allowEmptyString('big_int_column');

        $validator
            ->nonNegativeInteger('unsigned_int_column')
            ->allowEmptyString('unsigned_int_column');

        $validator
            ->decimal('decimal_column')
            ->allowEmptyString('decimal_column');

        $validator
            ->numeric('float_column')
            ->allowEmptyString('float_column');

        $validator
            ->numeric('double_column')
            ->allowEmptyString('double_column');

        $validator
            ->scalar('char_column')
            ->maxLength('char_column', 10)
            ->allowEmptyString('char_column');

        $validator
            ->scalar('varchar_column')
            ->maxLength('varchar_column', 255)
            ->allowEmptyString('varchar_column');

        $validator
            ->scalar('text_column')
            ->allowEmptyString('text_column');

        $validator
            ->scalar('mediumtext_column')
            ->maxLength('mediumtext_column', 16777215)
            ->allowEmptyString('mediumtext_column');

        $validator
            ->scalar('longtext_column')
            ->maxLength('longtext_column', 4294967295)
            ->allowEmptyString('longtext_column');

        $validator
            ->allowEmptyString('binary_column');

        $validator
            ->allowEmptyString('varbinary_column');

        $validator
            ->allowEmptyString('blob_column');

        $validator
            ->allowEmptyString('mediumblob_column');

        $validator
            ->allowEmptyString('longblob_column');

        $validator
            ->date('date_column')
            ->allowEmptyDate('date_column');

        $validator
            ->time('time_column')
            ->allowEmptyTime('time_column');

        $validator
            ->dateTime('datetime_column')
            ->allowEmptyDateTime('datetime_column');

        $validator
            ->dateTime('timestamp_column')
            ->notEmptyDateTime('timestamp_column');

        $validator
            ->scalar('year_column')
            ->allowEmptyString('year_column');

        $validator
            ->scalar('enum_column')
            ->allowEmptyString('enum_column');

        $validator
            ->scalar('set_column')
            ->allowEmptyString('set_column');

        $validator
            ->boolean('boolean_column')
            ->allowEmptyString('boolean_column');

        $validator
            ->scalar('json_column')
            ->maxLength('json_column', 4294967295)
            ->allowEmptyString('json_column');

        $validator
            ->scalar('point_column')
            ->allowEmptyString('point_column');

        $validator
            ->scalar('geometry_column')
            ->allowEmptyString('geometry_column');

        $validator
            ->scalar('polygon_column')
            ->allowEmptyString('polygon_column');

        $validator
            ->scalar('geometrycollection_column')
            ->allowEmptyString('geometrycollection_column');

        $validator
            ->scalar('linestring_column')
            ->allowEmptyString('linestring_column');

        $validator
            ->scalar('multipoint_column')
            ->allowEmptyString('multipoint_column');

        $validator
            ->scalar('multilinestring_column')
            ->allowEmptyString('multilinestring_column');

        $validator
            ->scalar('multipolygon_column')
            ->allowEmptyString('multipolygon_column');

        return $validator;
    }
}
