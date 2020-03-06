<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Test_project\Models' => APP_PATH . '/common/models/',
    'Test_project'        => APP_PATH . '/common/library/',
    'Phalcon' 						=> APP_PATH . '/vendor/phalcon/incubator-3.4.3/Library/Phalcon'
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Test_project\Sample_module\Module' => APP_PATH . '/modules/sample_module/Module.php',
    'Test_project\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
