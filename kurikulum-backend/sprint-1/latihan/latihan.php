<?php
echo 'Persegi atau Persegi Panjang: ';
$select = trim(fgets(STDIN));

switch($select) {
  case 'Persegi':
    // Persegi
    echo "Masukkan nilai sisi: ";
    $sisi = fgets(STDIN);
    echo "Luas Persegi adalah";
    echo 4 * $sisi . PHP_EOL;
    break;

  case 'Persegi Panjang':
    // Persegi Panjang
    echo "Masukkan nilai panjang: ";
    $panjang = fgets(STDIN);
    echo "Masukkan nilai lebar: ";
    $lebar = fgets(STDIN);
    echo "Luas Persegi Panjang: ";
    echo $panjang * $lebar . PHP_EOL;
    break;

  default:
    echo 'Salah Input';
}