<?php
$data = ['Honda', 'Toyota', 'Mitsubishi'];
$data[0] = 'Nissan';

// array_push = menambah isi array
// array_push($data, 'Volvo');

// echo $data[1] . PHP_EOL;
// var_dump($data) . PHP_EOL;

// Array Asosiative
$data1 = ['mobil1 ' => 'Honda ', 'mobil2 ' => 'Toyota ', 'mobil3 ' => 'Mitsubishi '];

$data1['mobil1'] = 'Kijang';
// var_dump($data1['mobil1']);

foreach($data1 as $index => $value) {
  echo "$index : $value";
}

// membuat array
// $array = array(1, 2, 3); // atau
// $array = [1, 2, 3];

// default array/pakai index
$a = [];
$a[0] = 'Muhammad';
$a[1] = 'Nur';
$a[2] = 'Ibnu';
$a[3] = 'Hubab';
// var_dump($a);

// campuran index dan asosiative
$a = [];
$a[0] = 'Muhammad';
$a[1] = 'Nur';
$a[2] = 'Ibnu';
$a['nama 4'] = 'Hubab';

// mengubah data array
foreach($a as $arr) {
  $arr = 'value';
}
// var_dump($a['nama 4']);


// menghapus data array
array_splice($a, 0, 2);
unset($a[0]);
$dff = array_diff($a, ['Hubab']);
var_dump($dff);
