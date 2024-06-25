<?php

// dengan define
define('KONSTANTA', 1);
// define('KONSTANTA', 2); // error, konstanta tidak bisa berubah nilainya.
echo KONSTANTA . PHP_EOL;

// dengan const
const NAMA = 'Ibnu';
echo NAMA . PHP_EOL;

const IDENTITAS = ['Nama' => 'Ibnu', 'Asal' => 'Jogja'];
echo IDENTITAS['Nama'] . PHP_EOL;
var_dump(IDENTITAS) . PHP_EOL;
