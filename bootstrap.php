<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';


// Annotation configuration
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);


// Connection configuration
$conn = array(
    'driver'    => 'pdo_sqlite',
    'path'      => __DIR__ . 'db.sqlite',
);


// Get EntityManager
$entityManager = EntityManager::create($conn, $config);
