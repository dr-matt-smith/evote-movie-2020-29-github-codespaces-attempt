<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\Movie;
use Tudublin\MovieRepository;

$movieRespository = new MovieRepository();

// (1) drop then create table
$movieRespository->dropTable();
$movieRespository->createTable();

// (2) delete any existing objects
$movieRespository->deleteAll();

// give Category IDs meaningful names
$categoryHorror = 1;
$categoryCartoon = 2;

// (3) create objects
$m1 = new Movie();
$m1->setId(1);
$m1->setTitle('Jaws');
$m1->setCategoryId($categoryHorror);
$m1->setPrice(10.00);
$m1->setVoteTotal(5);
$m1->setNumVotes(1);

$m2 = new Movie();
$m2->setId(2);
$m2->setTitle('Jaws II');
$m2->setCategoryId($categoryHorror);
$m2->setPrice(5.99);
$m2->setVoteTotal(77 * 90);
$m2->setNumVotes(77);

$m3 = new Movie();
$m3->setId(3);
$m3->setTitle('Shrek');
$m3->setCategoryId($categoryCartoon);
$m3->setPrice(10);
$m3->setVoteTotal(5 * 50);
$m3->setNumVotes(5);

$m4 = new Movie();
$m4->setId(4);
$m4->setTitle('Shrek II');
$m4->setCategoryId($categoryCartoon);
$m4->setPrice(4.99);
$m4->setVoteTotal(0);
$m4->setNumVotes(0);

$m5 = new Movie();
$m5->setId(5);
$m5->setTitle('Alien');
$m5->setCategoryId($categoryHorror);
$m5->setPrice(19.99);
$m5->setVoteTotal(95 * 201);
$m5->setNumVotes(201);

// (4) insert objects into DB
$movieRespository->create($m1);
$movieRespository->create($m2);
$movieRespository->create($m3);
$movieRespository->create($m4);
$movieRespository->create($m5);

//// (5) test objects are there
$movies = $movieRespository->findAll();
print '<pre>';
var_dump($movies);
