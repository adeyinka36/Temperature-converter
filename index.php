<?php

require_once __DIR__.'/vendor/autoload.php';

use App\config\ConversionAppConfig;
use Webmozart\Console\ConsoleApplication;

$cli = null;
try {
    $cli = new ConsoleApplication(new ConversionAppConfig());
} catch (\Exception $e) {
    $message = $e->getMessage();
    echo "An error occurred --> $message";
}

try {
    $cli->run();
} catch (Exception $e) {
    $message = $e->getMessage();
    echo "An error occurred --> $message";
}