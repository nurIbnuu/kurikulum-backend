<?php
// Perbandingan nilai tapi tidak dengan tipe datanya (==)
$a = 10;
$b = 10;
var_dump ($a == $b) . PHP_EOL;

// Perbandingan nilai dengan tipe datanya (===)
$c = 10;
$d = '10';
var_dump ($c === $d) . PHP_EOL;

// Tidak sama dengan, tidak membandingkan tipe data (!=)
$e = 10;
$f = 0;
var_dump ($e != $f) . PHP_EOL;

// Tidak sama dengan, membandingkan tipe data (!==)
$g = 10;
$h = '10';
var_dump ($g !== $h) . PHP_EOL;


$i = 10;
$j = 10;
// lebih besar dari (>) false
var_dump ($i > $j) . PHP_EOL;
// lebih kecil dari (<) false
var_dump ($i < $j) . PHP_EOL;

$k = 10;
$l = 10;
// lebih besar sama dengan (>=) true
var_dump ($k >= $l) . PHP_EOL;
// lebih kecil sama dengan (<=) true
var_dump ($k <= $l) . PHP_EOL;

// Spaship (<=>)
$m = 1;
$n = 10;
var_dump ($m <=> $n) . PHP_EOL; // int(-1)
var_dump ($n <=> $m) . PHP_EOL; // int(1)
$o = 8;
$p = 8;
var_dump ($o <=> $p) . PHP_EOL; // int(0)
var_dump ($p <=> $o) . PHP_EOL; // int(0)
$q = 7;
$r = 2;
var_dump ($q <=> $r) . PHP_EOL; // int(1)
var_dump ($r <=> $q) . PHP_EOL; // int(-1)




