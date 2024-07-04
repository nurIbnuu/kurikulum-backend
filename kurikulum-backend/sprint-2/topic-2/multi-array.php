<?php
$siswa = [
  ['NurIbnuu', 15],
  ['Affan', 16],
  ['Fajar', 15],
  ['Feri', 18]
];

var_dump($siswa) . PHP_EOL;
echo $siswa[0][0] . PHP_EOL;
print_r($siswa[0]) . PHP_EOL;

foreach($siswa as $dt) {
  foreach($dt as $santri) {
    echo $santri;
  }
}