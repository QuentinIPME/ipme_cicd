<?php

namespace Tests;

use App\Multiply;
use PHPUnit\Framework\TestCase;


class MultiplyTest extends TestCase
{
    private $multiply;

    public function setUp()
    {
        parent::setUp();
        $this->multiply = new Multiply();
    }

    public function testA()
    {
        $this->assertSame(25, $this->multiply->multiplyBy5(5));
    }

    public function testB()
    {
        $this->assertSame(20, $this->multiply->multiplyBy5(4));
    }
}
