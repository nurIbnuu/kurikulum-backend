<?php
// pre-increament
$a = 1;
var_dump (++$a) . PHP_EOL; // 2
var_dump ($a) . PHP_EOL; // 2

// post-increament
$a = 1;
var_dump ($a++) . PHP_EOL; // 1
var_dump ($a) . PHP_EOL; // 2


// pre-decreament
$a = 1;
var_dump (--$a) . PHP_EOL; // 0
var_dump ($a) . PHP_EOL; // 0

// post-decreament
$a = 1;
var_dump ($a--) . PHP_EOL; // 1
var_dump ($a) . PHP_EOL; // 0