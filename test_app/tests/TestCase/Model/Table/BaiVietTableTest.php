<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BaiVietTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BaiVietTable Test Case
 */
class BaiVietTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BaiVietTable
     */
    protected $BaiViet;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.BaiViet',
        'app.DanhMucBaiViet',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BaiViet') ? [] : ['className' => BaiVietTable::class];
        $this->BaiViet = $this->getTableLocator()->get('BaiViet', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BaiViet);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BaiVietTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BaiVietTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
