<?php

namespace App\Handlers;

use Webmozart\Console\Api\Args\Args;
use Webmozart\Console\Api\Command\Command;
use Webmozart\Console\Api\IO\IO;


class ConverisonHandler
{
    public function handle(Args $args, IO $io, Command $command)
    {
        var_dump($args->getArgument('value'));
//        $io->writeLine($command);
        return 0;
    }
}