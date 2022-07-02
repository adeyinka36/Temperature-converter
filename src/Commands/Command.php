<?php

namespace App\config;

use Webmozart\Console\Config\DefaultApplicationConfig;

class Command extends DefaultApplicationConfig
{
    protected function configure()
    {
        $this
            // ...

            ->beginCommand('log')
            ->setDescription('Show the latest commits')
            ->setHandler(new LogCommandHandler())
            ->end()
        ;
    }
}