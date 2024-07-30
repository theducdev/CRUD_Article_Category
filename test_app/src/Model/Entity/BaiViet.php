<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BaiViet Entity
 *
 * @property int $id
 * @property string $tieu_de
 * @property int|null $danh_muc_id
 * @property int|null $luot_xem
 * @property bool|null $bai_viet_noi_bat
 * @property string|null $anh_chinh
 * @property bool|null $hien_thi_muc_luc
 * @property string|null $mo_ta_ngan
 * @property string|null $noi_dung
 * @property string|null $the_bai_viet
 * @property string|null $tep_dinh_kem
 * @property string|null $duong_dan_video_youtube
 * @property string|null $duong_dan
 * @property string|null $tieu_de_seo
 * @property string|null $tu_khoa_seo
 *
 * @property \App\Model\Entity\DanhMucBaiViet $danh_muc_bai_viet
 */
class BaiViet extends Entity
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
        'tieu_de' => true,
        'danh_muc_id' => true,
        'luot_xem' => true,
        'bai_viet_noi_bat' => true,
        'anh_chinh' => true,
        'hien_thi_muc_luc' => true,
        'mo_ta_ngan' => true,
        'noi_dung' => true,
        'the_bai_viet' => true,
        'tep_dinh_kem' => true,
        'duong_dan_video_youtube' => true,
        'duong_dan' => true,
        'tieu_de_seo' => true,
        'tu_khoa_seo' => true,
        'danh_muc_bai_viet' => true,
    ];
}
