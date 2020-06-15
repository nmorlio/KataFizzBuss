<?php

use App\FizzBuss;
use PHPUnit\Framework\TestCase;

class FizzBussTest extends TestCase
{

    public function test_return_number_when_is_not_multiple_of_3_or_5()
    {

        $operation = new FizzBuss();

        $expected = 2;

        $response = $operation->convertNumber($expected);

        $this->assertEquals($expected, $response);
    }

    public function test_return_Fizz_when_number_is_multiple_of_3()
    {

        $operation = new FizzBuss();

        $expected = 'Fizz';
        $number = 12;

        $response = $operation->convertNumber($number);

        $this->assertEquals($expected, $response);
    }

    public function test_return_Buss_when_number_is_multiple_of_5()
    {
        $operation = new FizzBuss();

        $expected = 'Buss';

        $response = $operation->convertNumber(5);

        $this->assertEquals($expected, $response);
    }

    public function test_retur_FizzBuss_when_number_is_multiple_of_3_and_5()
    {
        $operation = new FizzBuss();

        $expected = 'FizzBuss';

        $response = $operation->convertNumber(15);

        $this->assertEquals($expected, $response);

    }
}
