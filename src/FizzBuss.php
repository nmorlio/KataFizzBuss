<?php

namespace App;

class FizzBuss
{
    private $number;
    private $fizzCondition = 3;
    private $bussCondition= 5;
    
    public function convertNumber($number)
    {
        $this->number=$number;
        $response = '';

        if ($this->numberIsMultipleOfFizz()) 
        {
             $response = 'Fizz';
        }

        if ($this->numberIsMultipleOfBuzz())
        {
             $response .= 'Buss';
        }

        if ($response=='')
        {
            $response=$this->number;
        }

        return $response;
    }

    private function numberIsMultipleOfFizz()
    {
        return $this->numberIsMultipleOf($this->fizzCondition);
    }

    private function numberIsMultipleOfBuzz()
    {
        return $this->numberIsMultipleOf($this->bussCondition);
    }

    private function numberIsMultipleOf($condition)
    {
        return ($this->number % $condition) == 0;

    }
}
