<?php

namespace App\Convert;

class ConvertCommandHandler
{
    public function celciusToFarenheight(float $value): float
    {
        return ($value / .5556) + 32;
    }

    public function farenheightToCelcius(float $value): float
    {
        $result = ($value - 32) * .5556;

        if($result < -273){
            throw new \UnexpectedValueException('Below absolute zero');
        }
        return $result;
    }
}