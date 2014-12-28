<?php

// Composer autoload
require (__DIR__ . '/../vendor/autoload.php');

// Webiny autoload
$classLoaderMap = [
    'Todo' => __DIR__.'/../App',
];
Webiny\Component\ClassLoader\ClassLoader::getInstance()->registerMap($classLoaderMap);

// Run the application
Webiny\Component\Bootstrap\Bootstrap::getInstance()->runApplication(__DIR__.'/../');