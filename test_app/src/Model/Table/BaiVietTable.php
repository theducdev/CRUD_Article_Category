<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Entity;
use Cake\Event\EventInterface;
use Cake\ORM\EntityInterface;
use Cake\ORM\TableRegistry;
use Cake\Log\Log;


/**
 * BaiViet Model
 *
 * @property \App\Model\Table\DanhMucBaiVietTable&\Cake\ORM\Association\BelongsTo $DanhMucBaiViet
 *
 * @method \App\Model\Entity\BaiViet newEmptyEntity()
 * @method \App\Model\Entity\BaiViet newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\BaiViet> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BaiViet get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\BaiViet findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\BaiViet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\BaiViet> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BaiViet|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\BaiViet saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\BaiViet>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BaiViet>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BaiViet>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BaiViet> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BaiViet>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BaiViet>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BaiViet>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BaiViet> deleteManyOrFail(iterable $entities, array $options = [])
 */
class BaiVietTable extends Table
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

        $this->setTable('bai_viet');
        $this->setDisplayField('tieu_de');
        $this->setPrimaryKey('id');

        $this->belongsTo('DanhMucBaiViet', [
            'foreignKey' => 'danh_muc_id',
            'targetForeignKey' => 'id',
            'joinTable' => 'danh_muc_bai_viet_bai_viet',
            'joinType' => 'INNER'
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
            ->scalar('tieu_de')
            ->maxLength('tieu_de', 255)
            ->requirePresence('tieu_de', 'create')
            ->notEmptyString('tieu_de');

        $validator
            ->integer('danh_muc_id')
            ->allowEmptyString('danh_muc_id');

        $validator
            ->integer('luot_xem')
            ->allowEmptyString('luot_xem');

        $validator
            ->boolean('bai_viet_noi_bat')
            ->allowEmptyString('bai_viet_noi_bat');

        $validator
            ->scalar('anh_chinh')
            ->maxLength('anh_chinh', 255)
            ->allowEmptyString('anh_chinh');

        $validator
            ->boolean('hien_thi_muc_luc')
            ->allowEmptyString('hien_thi_muc_luc');

        $validator
            ->scalar('mo_ta_ngan')
            ->allowEmptyString('mo_ta_ngan');

        $validator
            ->scalar('noi_dung')
            ->allowEmptyString('noi_dung');

        $validator
            ->scalar('the_bai_viet')
            ->allowEmptyString('the_bai_viet');

        $validator
            ->scalar('tep_dinh_kem')
            ->allowEmptyString('tep_dinh_kem');

        $validator
            ->scalar('duong_dan_video_youtube')
            ->maxLength('duong_dan_video_youtube', 255)
            ->allowEmptyString('duong_dan_video_youtube');

        $validator
            ->scalar('duong_dan')
            ->maxLength('duong_dan', 255)
            ->allowEmptyString('duong_dan');

        $validator
            ->scalar('tieu_de_seo')
            ->maxLength('tieu_de_seo', 255)
            ->allowEmptyString('tieu_de_seo');

        $validator
            ->scalar('tu_khoa_seo')
            ->allowEmptyString('tu_khoa_seo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['danh_muc_id'], 'DanhMucBaiViet'), ['errorField' => 'danh_muc_id']);

        return $rules;
    }



}
