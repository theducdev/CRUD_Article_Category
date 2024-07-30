<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExampleTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExampleTable Test Case
 */
class ExampleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExampleTable
     */
    protected $ExampleTable;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Example') ? [] : ['className' => ExampleTable::class];
        $this->ExampleTable = $this->getTableLocator()->get('Example', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ExampleTable);

        parent::tearDown();
    }
}
