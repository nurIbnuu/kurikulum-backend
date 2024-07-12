<?php
// STATIC KEYWORD


// Class merupakan template dari object
// membuat object == menginstansiasi
// kita bisa mengakses property dan method dalam konteks class

class ContohStatic {
  public static $angka = 1;

  public static function halo() {
    return 'Hallo ' . self::$angka . ' kali.';
  }
}

// cara mengakses yang static
echo ContohStatic::$angka . PHP_EOL;
echo ContohStatic::halo() . PHP_EOL;


class Contoh {
  public static $angka = 1;

  public function hallo() {
    return 'Hallo ' . self::$angka++ . ' kali' . PHP_EOL;
  }
}

$obj = new Contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();

$obj2 = new Contoh;
echo $obj2->hallo();
echo $obj2->hallo();
echo $obj2->hallo();