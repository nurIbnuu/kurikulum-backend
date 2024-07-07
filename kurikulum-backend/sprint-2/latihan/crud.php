<?php
# Tugas membuat program CRUD sederhana
# Create, Read, Update, Delete

$data = [];
$pilih = true;
var_dump($data);



function create(&$data, $input) {
  $data[] = $input;
}
function update(&$data, $input, $key) {
  $data[$key] = $input;
}
function delete(&$data, $key) {
  unset($data[$key]);
}



while($pilih) {
  echo "Create/Update/Delete? \n";
  $input = trim(fgets(STDIN));
  switch($input) {
    case 'Create':
      echo "Masukkan data : \n";
      $inp = trim(fgets(STDIN));
      create($data, $inp);
      break;
    case 'Update':
      echo "Masukkan key dari data yang mau diperbarui : \n";
      $key = trim(fgets(STDIN));
      echo 'Masukkan data baru : ';
      $inp = trim(fgets(STDIN));
      update($data, $inp, $key);
      break;
    case 'Delete';
      echo "Masukkan key dari data yang mau dihapus : \n";
      $key = trim(fgets(STDIN));
      delete($data, $key);
      break;
    default:
      echo "Hanya boleh menginputkan 'Create/Update/Delete' (pilih salah satu) !!!\n";
  }
  echo "Data saat ini :\n";
  var_dump($data);
  echo "Jika ingin mengulangi ketik 'Ulangi', jika tidak ketik sembarang : \n";
  if(trim(fgets(STDIN)) == 'Ulangi') {
    $pilih = true;
  } else {
    echo "Terima kasih (^_^)\n";
    $pilih = false;
  }
}

