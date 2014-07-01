<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

// ---------------------
// Class autoloading
// ---------------------
$locations = [
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../../autoload.php'
];

foreach ($locations as $location) {
    if (is_file($location)) {
        $loader = require $location;
        $loader->addPsr4('AndyTruong\\VCLang\\', dirname(__DIR__) . '/src');
        $loader->addPsr4('AndyTruong\\VCLang\\Testing\\', __DIR__ . '/vclang');
        break;
    }
}

// ---------------------
// Doctrine ORM configuration
// ---------------------
class VCLangBootstrap
{

    private static $em;

    /**
     * @return EntityManager
     */
    public static function getEm($dbParams = array())
    {
        if (is_null(self::$em)) {
            $paths[] = dirname(__DIR__) . '/resources/config/xml';
            $isDevMode = false;

            // the connection configuration
            $dbParams += array(
                'driver' => 'pdo_mysql',
                'user' => 'root',
                'password' => '',
                'dbname' => 'foo',
            );

            $config = Setup::createXMLMetadataConfiguration($paths, $isDevMode);
            self::$em = EntityManager::create($dbParams, $config);
        }

        return self::$em;
    }

}

return VCLangBootstrap::getEm();
