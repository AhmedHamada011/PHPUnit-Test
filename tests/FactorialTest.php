<?php

namespace tests;

use PHPUnit\Framework\TestCase;

use App\Factorial;

class FactorialTest extends TestCase
{

    public function test_integer_will_work()
    {
        $fact = new Factorial();
        $result = $fact->fact(5);

        $this->assertEquals(120,$result);
    }

    public function test_float_will_return_null()
    {
        $fact = new Factorial();
        $result = $fact->fact(3.5);

        $this->assertEquals(null,$result);
    }


    public function test_string_will_return_null()
    {
        $fact = new Factorial();
        $result = $fact->fact('abc');

        $this->assertEquals(null,$result);
    }

    public function test_negative_numbers_will_return_null()
    {
        $fact = new Factorial();
        $result = $fact->fact(-1);

        $this->assertEquals(null,$result);
    }

    public function test_zero_will_return_one()
    {
        $fact = new Factorial();
        $result = $fact->fact(0);

        $this->assertEquals(1,$result);
    }

    public function test_one_will_return_one()
    {
        $fact = new Factorial();
        $result = $fact->fact(1);

        $this->assertEquals(1,$result);
    }


    public function test_boolean_will_return_one()
    {
        $fact = new Factorial();
        $result = $fact->fact(true);

        $this->assertEquals(null,$result);
    }

}