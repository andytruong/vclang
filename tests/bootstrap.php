<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// ---------------------
// Class autoloading
// ---------------------
$locations[] = __DIR__ . '/../vendor/autoload.php';
$locations[] = __DIR__ . '/../../../autoload.php';

foreach ($locations as $location) {
    if (is_file($location)) {
        $loader = require $location;
        $loader->addPsr4('AndyTruong\\VCLang\\Testing\\', __DIR__ . '/vclang');
        break;
    }
}

// ---------------------
// Doctrine ORM configuration
// ---------------------
$paths[] = dirname(__DIR__) . '/resources/config/entity';
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'foo',
);

$config = Setup::createXMLMetadataConfiguration($paths, $isDevMode);
return EntityManager::create($dbParams, $config);
