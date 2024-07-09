<?php
class Handphone {
  var ?string $name;
}


$oppo = new Handphone();
$oppo->name = null;
echo $oppo->name . PHP_EOL;


$vivo = new Handphone();
$vivo->name = 'Vivo Z1 Pro';
echo $vivo->name . PHP_EOL;