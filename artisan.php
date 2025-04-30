#!/usr/bin/env php
<?php

declare(strict_types=1);

use Illuminate\Contracts\Console\Kernel;

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we don't have to worry about the path.
|
*/

require __DIR__.'/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Boot The Application
|--------------------------------------------------------------------------
|
| Next, we need to get an instance of the application that serves as
| the "glue" for all the components of Laravel, and is also the
| IoC container for the system binding all of the various parts.
|
*/

$app = require_once __DIR__.'/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Console Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming CLI commands
| through the console kernel, and then exit the application when it
| is done responding.
|
*/

$kernel = $app->make(Kernel::class);

$status = $kernel->handle(
    $input = new Symfony\Component\Console\Input\ArgvInput,
    new Symfony\Component\Console\Output\ConsoleOutput
);

$kernel->terminate($input, $status);

exit($status);
