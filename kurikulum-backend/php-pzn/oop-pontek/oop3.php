<?php

class Laptop {
  // isi dari class
  // 1. const
  const AUTHOR = 'Ibnu';
  const APK = 'Info Laptop Terbaru';

  // 2. properties
  var string $brand;

  // 3. method
  function __construct() { // method yang selalu dieksekusi di awal
    echo 'Selamat datang di Aplikasi' . self::APK . PHP_EOL;
  }

  function infoLaptop(string $name) {
    echo "Pemilik laptop ini adalah " . self::AUTHOR . PHP_EOL; // self untuk memanggil 'const' di class yang sama
    echo "Mereknya adalah $this->$brand" . PHP_EOL; // $this untuk memanggil 'properties' di class yang sama
  }

  function __destruct() { // method yang selalu dieksekusi di awal
    echo 'Saya ' . self::AUTHOR . ' mengucapkan terima kasih talah menggunakan Aplikasi ' . self::APK;
  }
}


class Handphone extends Laptop { // extends adalah inheritance/pewarisan
  function infoHandphone() {
    echo 'Ini Handphone' . $this->brand . PHP_EOL;
    echo 'Dibuat oleh' . parent::AUTHOR . PHP_EOL; // parent merupakan pewarisan const dari class Laptop
  }
}


echo Laptop::AUTHOR;

$lenovo = new Laptop();
$lenovo->brand = 'Lenovo';
$lenovo->infoLaptop('Fulan');