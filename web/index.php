<?php

use Symfony\Component\Debug\Debug;

require_once __DIR__.'/../vendor/autoload.php';

Debug::enable();

$app = new BrewBlogger\Application();
$app->run();
