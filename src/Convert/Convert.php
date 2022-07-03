<?php

namespace App\Convert;

class Convert
{
    public function celciusToFarenheight(float $value): float
    {
        return round(($value / .5556) + 32, 2);
    }

    public function farenheightToCelcius(float $value): float
    {
        $result = round(($value - 32) * .5556, 2);

        if($result < -273){
            throw new \UnexpectedValueException('Below absolute zero');
        }
        return $result;
    }

}