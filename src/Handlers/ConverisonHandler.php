<?php

namespace App\Handlers;

use App\Convert\Convert;
use Webmozart\Console\Api\Args\Args;
use Webmozart\Console\Api\Command\Command;
use Webmozart\Console\Api\IO\IO;


class ConverisonHandler
{
    const CELCIUS = 'to-celcius';

    private $convert;

    public function __construct()
    {
        $this->convert = new Convert();
    }

    public function handle(Args $args, IO $io, Command $command)
    {
        if (!is_numeric($args->getArgument('value'))) {
            $io->writeLine("Please enter a numeric value");
        } else {
            $result = $command->getName() === self::CELCIUS ?
                $this->convert->farenheightToCelcius($args->getArgument('value')) :
                $this->convert->celciusToFarenheight($args->getArgument('value'));

            $output = "The answer is $result";
            $io->writeLine($output);
        }
        return 0;
    }
}