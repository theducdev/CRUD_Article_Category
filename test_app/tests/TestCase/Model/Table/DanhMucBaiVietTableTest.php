<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DanhMucBaiVietTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DanhMucBaiVietTable Test Case
 */
class DanhMucBaiVietTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DanhMucBaiVietTable
     */
    protected $DanhMucBaiViet;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.DanhMucBaiViet',
        'app.BaiViet',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DanhMucBaiViet') ? [] : ['className' => DanhMucBaiVietTable::class];
        $this->DanhMucBaiViet = $this->getTableLocator()->get('DanhMucBaiViet', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DanhMucBaiViet);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DanhMucBaiVietTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
