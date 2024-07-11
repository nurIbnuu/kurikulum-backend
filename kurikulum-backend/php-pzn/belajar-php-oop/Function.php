<?php

require_once 'data/Person.php';

$eko = new Person(); // ini cara membuat 'object'
$eko->name = 'Eko';
$eko->sayHello('Budi');

$joko = new Person(); // ini cara membuat 'object'
$joko->name = 'Joko';
$joko->sayHello(null);
