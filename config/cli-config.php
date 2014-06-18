<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

/* @var $em EntityManager */
$em = require_once __DIR__ . '/../tests/bootstrap.php';

return ConsoleRunner::createHelperSet($em);
