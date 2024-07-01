<?php
echo 'Persegi/Persegi Panjang/Segitiga/Trapesium?: ';
$select = trim(fgets(STDIN));

switch($select) {
  case 'Persegi':
    // Persegi
    echo "Masukkan Sisi: ";
    $sisi = fgets(STDIN);
    echo "Luas Persegi: ";
    echo 4 * $sisi . PHP_EOL;
    break;

  case 'Persegi Panjang':
    // Persegi Panjang
    echo "Masukkan Panjang: ";
    $panjang = fgets(STDIN);
    echo "Masukkan Lebar: ";
    $lebar = fgets(STDIN);
    echo "Luas Persegi Panjang: ";
    echo $panjang * $lebar . PHP_EOL;
    break;
  
  // Tugas menghitung Segitiga dan Trapesium
  case 'Segitiga':
    echo "Masukkan Alas: ";
    $alas = fgets(STDIN);
    echo "Masukkan Tinggi: ";
    $tinggi = fgets(STDIN);
    echo "Luas Segitiga: ";
    echo 1/2 * $alas * $tinggi . PHP_EOL;
    break;

    case 'Trapesium':
      echo "Masukkan Tinggi: ";
      $tinggi = fgets(STDIN);
      echo "Masukkan Sisi 1: ";
      $sisi1 = fgets(STDIN);
      echo "Masukkan Sisi 2: ";
      $sisi2 = fgets(STDIN);
      echo "Luas Trapesium: ";
      echo 1/2 * ($sisi1 + $sisi2) * $tinggi . PHP_EOL;
      break;

  default:
    echo 'Salah Input';
}