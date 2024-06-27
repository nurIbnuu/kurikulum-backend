<?php

$a = 1;
$b = 1;
$c = 0;

// and
var_dump (($a == 1) and ($b == 1)) . PHP_EOL; // true
var_dump (($a == 1) and ($c == 1)) . PHP_EOL; // false
// &&
var_dump (($a == 1) && ($b == 1)) . PHP_EOL; // true
var_dump (($a == 1) && ($c == 1)) . PHP_EOL; // false

// or
var_dump (($a == 1) or ($b == 1)) . PHP_EOL; // true
var_dump (($a == 1) or ($c == 1)) . PHP_EOL; // true
// ||
var_dump (($a == 1) || ($b == 1)) . PHP_EOL; // true
var_dump (($a == 1) || ($c == 1)) . PHP_EOL; // true

// xor
var_dump (($a == 1) xor ($b == 1)) . PHP_EOL; // false
var_dump (($a == 1) xor ($c == 1)) . PHP_EOL; // true

// not
var_dump (!($a == 1)) . PHP_EOL; // false