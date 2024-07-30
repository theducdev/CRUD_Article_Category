<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Event\EventInterface;
use Cake\Log\Log;

/**
 * DanhMucBaiViet Entity
 *
 * @property int $id
 * @property string $ten_danh_muc
 * @property int|null $ten_danh_muc_cha
 * @property string|null $anh_chinh
 *
 * @property \App\Model\Entity\BaiViet[] $bai_viet
 */
class DanhMucBaiViet extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'ten_danh_muc' => true,
        'ten_danh_muc_cha' => true,
        'anh_chinh' => true,
        'bai_viet' => true,
    ];

}
