<?php
// Encapsulation/Acces Level; public, protected, private
// public bisa diakses melalui class, subclass/anak, world
// protected bisa diakses melalui class, subclass/anak
// private bisa diakses melalui class


// var = public, best practice pakai public
class Rumah{
  public const APK = "Info Rumah";
  protected const AUTHOR = "Rizky";
  private const ADDRESS = "Indonesia";

  public $panjang = 10;
  protected $lebar = 5;

  private $tinggi = 15;



  public function __construct(){
      echo "Selamat datang di Aplikasi " . self::APK . PHP_EOL;
  }

  public function infoRumah(){
      echo "Info Rumah : " . $this->panjang . "x" . $this->lebar . "x" . $this->tinggi . " " . self::ADDRESS . PHP_EOL;
      echo "Dibuat Oleh " . self::AUTHOR . PHP_EOL;
  }

  protected function infoRumah2(){
      echo "Info Rumah : " . $this->panjang . "x" . $this->lebar . "x" . $this->tinggi . " " . self::ADDRESS . PHP_EOL;
      echo "Dibuat Oleh " . self::AUTHOR . PHP_EOL;
  }

  private function infoRumah3(){
      echo "Info Rumah : " . $this->panjang . "x" . $this->lebar . "x" . $this->tinggi . " " . self::ADDRESS . PHP_EOL;
      echo "Dibuat Oleh " . self::AUTHOR . PHP_EOL;
  }

  public function __destruct(){
      echo "Saya " . self::AUTHOR . " Terima kasih telah menggunakan aplikasi " . self::APK . PHP_EOL;
  }
  
}

class Kamar extends Rumah{
  public function infoRumah(){
      parent::infoRumah2();
  }

}

$myHome = new Rumah();
$myRoom = new Kamar();
$myRoom->infoRumah();