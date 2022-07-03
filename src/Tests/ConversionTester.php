<?php

namespace App\Tests;
use App\Convert\Convert;
use PHPUnit;

class ConversionTester extends PHPUnit\Framework\TestCase
{
    /** @test */
    function testConvertClassInstanceIsCreated()
    {
        $instance = new Convert();
        $this->assertInstanceOf(Convert::class, $instance, 'Instance of Convert class was not created');
    }

    /** @test */
    function testConversionToCelcius()
    {
        $value = 100.5;
        $expectedResult = round(($value - 32) * .5556, 2);

        $instance = new Convert();
        $result = $instance->farenheightToCelcius($value);

        $this->assertEquals($expectedResult, $result, 'Conversiont to Celcius was incorrect');
    }

    /** @test */
    function testConversionToFarenheight()
    {
        $value = 12.5;
        $expectedResult = round(($value / .5556) + 32, 2);

        $instance = new Convert();
        $result = $instance->celciusToFarenheight($value);

        $this->assertEquals($expectedResult, $result, 'Conversion to Farenheight was incorrect');
    }

    /** @test */
    function testUnexpexpectedValueInCelciusException()
    {
        $this->expectException(\UnexpectedValueException::class);
        $instance = new Convert();
        $instance->farenheightToCelcius(-10000);
    }
}