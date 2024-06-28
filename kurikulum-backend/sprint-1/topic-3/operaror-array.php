<?php
$color = ['a' => 'white', 'b' => 'green'];
$color2 = ['c' => 'red', 'd' => 'blue'];
$warna = $color + $color2;
var_dump($warna) . PHP_EOL;

$warna1 = $color == $color2;
var_dump($warna1) . PHP_EOL;

$warna2 = $color === $color2;
var_dump($warna2) . PHP_EOL;

// != samadengan <>
