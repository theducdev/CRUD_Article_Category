<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DanhMucBaiVietFixture
 */
class DanhMucBaiVietFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'danh_muc_bai_viet';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'ten_danh_muc' => 'Lorem ipsum dolor sit amet',
                'ten_danh_muc_cha' => 1,
                'anh_chinh' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
