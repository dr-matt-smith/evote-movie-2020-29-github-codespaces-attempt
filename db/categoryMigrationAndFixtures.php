<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Category;
use Tudublin\CategoryRepository;

$categoryRespository = new CategoryRepository();

// (1) drop then create table
$categoryRespository->dropTable();
$categoryRespository->createTable();

// (2) delete any existing objects
$categoryRespository->deleteAll();

// (3) create objects
$c1 = new Category();
$c1->setId(1);
$c1->setName('Horror');
$c1->setDescription('fun, but scary movies ...');

$c2 = new Category();
$c2->setId(2);
$c2->setName('Cartoon');
$c2->setDescription('animated family fun');


// (4) insert objects into DB
$categoryRespository->create($c1);
$categoryRespository->create($c2);
