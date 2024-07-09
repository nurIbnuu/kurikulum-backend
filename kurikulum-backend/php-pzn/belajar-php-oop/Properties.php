<?php
// Manipulasi Properties
require_once 'data/Person.php';

$person = new Person(); // ini cara membuat 'object'
$person->name = 'Eko'; // Mengubah data ->
$person->address = 'Subang'; // Mengubah data ->
$person->country = 'Indonesia'; // Mengubah data ->

var_dump($person);

echo "Name : {$person->name} \n"; // Memanggil data
echo "Address : {$person->address} \n"; // Memanggil data
echo "Country : {$person->country} \n"; // Memanggil data

$person2 = new Person(); // ini cara membuat 'object' baru
$person2->name = 'Budi';
$person2->address = 'Jakarta';
$person2->country = 'Indonesia';

var_dump($person2);

// error karena tipe datanya harus string
// $person->name = [];