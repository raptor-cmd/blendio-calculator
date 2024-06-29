<?php

namespace Tests\Unit;

use App\Repositories\Implementations\BasicOperationImplementation;
use PHPUnit\Framework\TestCase;

class BasicOperationsTest extends TestCase
{
    private $basicOperation;
    private array $data;


    protected function setUp(): void
    {
        parent::setUp();
        $this->data = [
            "number1" => 5,
            "number2" => 5,
        ];

        $this->basicOperation = new BasicOperationImplementation();
    }

    /**
     * A basic feature test example.
     */
    public function test_add(): void
    {
        $expected = 10;
        $received = $this->basicOperation->add($this->data);

        $this->assertEquals($expected, $received);
    }

    public function test_substract(): void
    {
        $expected = 0;
        $received = $this->basicOperation->substraction($this->data);

        $this->assertEquals($expected, $received);
    }

    public function test_multiplication(): void
    {
        $expected = 25;
        $received = $this->basicOperation->multiplication($this->data);

        $this->assertEquals($expected, $received);
    }

    public function test_divide() : void {
        $expected = 1;
        $received = $this->basicOperation->divide($this->data);

        $this->assertEquals($expected, $received);
    }
}
