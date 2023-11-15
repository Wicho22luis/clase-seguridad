<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\OperationsController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function testSum(): void{
        $addition = new OperationsController();
        $this->assertEquals(25, $addition->add(12,13));
        $this->assertIsInt($addition->add(12,13));
        $this->assertIsNumeric($addition->add(12,13));
        $this->assertGreaterThan(0,$addition->add(12,13));
    }
}
