<?php

namespace App\config;

use App\Handlers\ConverisonHandler;
use Webmozart\Console\Api\Args\Format\Argument;
use Webmozart\Console\Config\DefaultApplicationConfig;

class ConversionAppConfig extends DefaultApplicationConfig
{
    protected function configure()
    {
        parent::configure();

        $this
            ->setName('converter')
            ->setVersion('1.0.0');
        $this
            ->beginCommand('to-celcius')
            ->setDescription('Convert from farenheight to celcius')
            ->addArgument('value', Argument::OPTIONAL, 'The value to convert to celcius')
            ->setHandler(new ConverisonHandler())
            ->end();
        $this
            ->beginCommand('to-farenheight')
            ->setDescription('Convert from celcius to farenheight')
            ->setHandler(new ConverisonHandler())
            ->end();
    }
}