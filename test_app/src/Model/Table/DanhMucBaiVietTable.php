<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DanhMucBaiViet Model
 *
 * @property \App\Model\Table\BaiVietTable&\Cake\ORM\Association\BelongsToMany $BaiViet
 *
 * @method \App\Model\Entity\DanhMucBaiViet newEmptyEntity()
 * @method \App\Model\Entity\DanhMucBaiViet newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DanhMucBaiViet> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DanhMucBaiViet get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DanhMucBaiViet findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DanhMucBaiViet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DanhMucBaiViet> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DanhMucBaiViet|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DanhMucBaiViet saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DanhMucBaiViet>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DanhMucBaiViet>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DanhMucBaiViet>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DanhMucBaiViet> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DanhMucBaiViet>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DanhMucBaiViet>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DanhMucBaiViet>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DanhMucBaiViet> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DanhMucBaiVietTable extends Table
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

        $this->setTable('danh_muc_bai_viet');
        $this->setDisplayField('ten_danh_muc');
        $this->setPrimaryKey('id');

        $this->belongsToMany('BaiViet', [
            'foreignKey' => 'danh_muc_id',
            'targetForeignKey' => 'bai_viet_id',
            'joinTable' => 'danh_muc_bai_viet_bai_viet',
        ]);

        $this->hasMany('BaiViet', [
            'foreignKey' => 'danh_muc_id'
        ]);
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
            ->scalar('ten_danh_muc')
            ->maxLength('ten_danh_muc', 255)
            ->requirePresence('ten_danh_muc', 'create')
            ->notEmptyString('ten_danh_muc');

        $validator
            ->integer('ten_danh_muc_cha')
            ->allowEmptyString('ten_danh_muc_cha');

        $validator
            ->scalar('anh_chinh')
            ->maxLength('anh_chinh', 255)
            ->allowEmptyString('anh_chinh');

        return $validator;
    }
}
