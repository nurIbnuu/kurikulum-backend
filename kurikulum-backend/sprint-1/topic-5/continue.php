<?php
$data = ['Honda', 'Toyota', 'Mitsubishi'];
for($i = 0; $i <= count($data); $i++) {
  if ($i == 0) continue;
  echo $data[$i]. PHP_EOL;
}