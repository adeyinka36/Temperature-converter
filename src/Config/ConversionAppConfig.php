<?php

namespace App\config;

use Webmozart\Console\Config\DefaultApplicationConfig;

class ConversionAppConfig extends DefaultApplicationConfig
{
    protected function configure()
    {
        parent::configure();

        $this
            ->setName('convert')
            ->setVersion('1.0.0')// ...
        ;
    }
}