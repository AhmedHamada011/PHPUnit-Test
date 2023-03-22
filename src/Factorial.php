<?php

namespace App;
class Factorial
{

    public function fact($number)
    {

        if ($this->isValid($number)) {

            if ($number < 2) {
                return 1;
            }

            return ($number * $this->fact($number - 1));

        }
        return null;

    }

    private function isValid($number)
    {
        if (is_int($number) && $number >= 0) {

            return true;

        }

        return false;
    }
}