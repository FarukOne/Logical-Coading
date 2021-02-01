<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatementsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatementsTable Test Case
 */
class StatementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StatementsTable
     */
    protected $Statements;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Statements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Statements') ? [] : ['className' => StatementsTable::class];
        $this->Statements = $this->getTableLocator()->get('Statements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Statements);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
