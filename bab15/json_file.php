<?php

// $data = [
//     'nama' => 'budi',
//     'usia' => 34,
//     'profesi' => 'web3 developer',

// ];

// // mengubah array menjadi format json
// $jsonData = json_encode($data, JSON_PRETTY_PRINT);

// //simpan data json ke dalam file 
// $file = 'datasiswa.json';
// file_put_contents($file, $jsonData);
// echo 'file json berhasil di buat!'



// membaca dan mencetak data dari file json 
$file = 'datasiswa.json';
$jsonData = file_get_contents($file);

// ubah json menjadi array 
$data = json_decode($jsonData, true);

// mencetak data json
echo "nama: " .$data['nama'].'<br/>';
echo "usia: " .$data['usia'].'<br/>';
echo "profesi: " .$data['profesi'].'<br/>';



?>