<?php
// strlen untuk mencari jumlah huruf termasuk spasi
echo strlen('Hello World') . PHP_EOL;

// str_word_count untuk mencari jumlah kata
echo str_word_count('Hello World') . PHP_EOL;

// strpos untuk mencari urutan huruf
echo strpos('Hello World', 'World') . PHP_EOL;

// strtoupper untuk mengubah menjadi uppercase
echo strtoupper('hello') . PHP_EOL;

// strtolower untuk mengubah menjadi lowercase
echo strtolower('HELLO') . PHP_EOL;

// str_replace untuk mengubah kata
echo str_replace('World', 'Dunia', 'Hello World') . PHP_EOL;

// strrev untuk mengubah urutan huruf
echo strrev('Hello') . PHP_EOL;

// trim untuk menghilangkan spasi awal dan akhir
echo trim('   He   llo   ') . PHP_EOL;

// explode
$arr = explode(' ', 'Hello World');
var_dump($arr)  . PHP_EOL;

// concatenation (penggabung string) (.)
$a = 'Hello';
$b = 'World';
$c = $a . ' ' . $b . PHP_EOL;
echo $c;

// substr untuk slicing
$x = 'Hello World';
echo substr($x, 6, 3) . PHP_EOL; // Wor
echo substr($x, 6) . PHP_EOL; // World
echo substr($x, -3, 1) . PHP_EOL; // r
echo substr($x, -2) . PHP_EOL; // ld
echo substr($x, -2, -1) . PHP_EOL; // l

// escape character
echo "Hari ini adalah hari Jum'at\n";
echo 'Hari ini adalah hari Jum\'at' . PHP_EOL;