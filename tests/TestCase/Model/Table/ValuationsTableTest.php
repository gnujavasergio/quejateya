<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ValuationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ValuationsTable Test Case
 */
class ValuationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ValuationsTable
     */
    public $Valuations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.valuations',
        'app.posts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Valuations') ? [] : ['className' => 'App\Model\Table\ValuationsTable'];
        $this->Valuations = TableRegistry::get('Valuations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Valuations);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
