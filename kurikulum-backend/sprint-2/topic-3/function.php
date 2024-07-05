<?php
// $var = 'Hello';
function hello($n, $o = 'Honey') {
  // echo $GLOBALS['var'];
  return "$n $o";
}

echo hello('Hai');


// Return

// 1. Agar mau mengembalikan nilai maka function harus diberi kata kunci 'return', karena secara default function tidak mengembalikan nilai.
// 2. Hanya bisa mengembalikan 1 tipe data, jika ingin lebih dari 1 tipe data maka bisa menggunakan array atau object.

// 3. function ini hanya memiliki tugas menampilkan ke layar
// function total(int $a, int $b) {
//   echo $a + $b;
// }
// total(1, 2);

// 4. function ini bertugas mengembalikan nilai ke pemanggil function, selanjutnya pemanggil function yang menentukan hasilnya mau digunakan untuk apa
function total(int|float $a, int $b) : int|float {
  // return '10';
  return $a + $b;
}
// 5. hasil dari pengembalian function biasa ditampung dalam variable
$result = total('1.8', 2); // 7. "string" '1.8' dikonversi ke dalam bentuk"float"
// var_dump(total('a', 'b')); // 8. "string" 'a', 'b' dikonversi ke dalam bentuk "integer", jika tidak bisa maka akan keluar pesan error
var_dump($result);

// 6. return value juga bisa diatur tipe datanya
// function total(int $a, int $b) : int
var_dump(total(1, 2));

// Variable scope = cakupan variable bisa diakses
//  3 Jenis variable scope; 1. global, 2. local, 3. static



//    1. global
// Variabel yang dibuat di luar function. Hanya bisa diakses dari luar function, secara default tidak bisa diakses di dalam function. Apabila hendak mengakses dari dalam function maka bisa menggunakan kata kunci 'global' atau menggunakan variable khusus $GLOBALS. Contoh:

// $name = 'Nur';
// function hello() {
//  global $name; ATAU 
//  echo $GLOBALS['name'] . PHP_EOL;
// }
// hello(); Nur



//    2. local
// Variabel yang dibuat di dalam function. Hanya bisa diakses dari dalam function 'itu sendiri'. Otomatis dihapus setelah program keluar dari function, jadi pastikan tidak menyimpan data penting di dalam local variabel. Contoh:

// function hello() {
//   $name = 'Nur';
//   echo $name . PHP_EOL; // Bisa
// }
// hello(); Nur
// echo $name . PHP_EOL; // Error

// function test() {
//   echo $name . PHP_EOL; // Error
// }
// test(); // Error



//    3. static
// Dibuat dengan kata kunci 'static'. Nilai tidak dihapus walau program keluar dari function. Bisa digunakan untuk mempertahankan nilai yang disimpan di dalam function. Contoh:

// function counter() {
//   $count = 0;
//   $count++;
//   echo $count . PHP_EOL;
// }
// counter(); // 1
// counter(); // 1
// counter(); // 1

// function counter() {
//   static $count = 0;
//   $count++;
//   echo $count . PHP_EOL;
// }
// counter(); // 1
// counter(); // 2
// counter(); // 3