<!-- JSON singkatan dari javascript object notation, adalah format pertukaran data yang ringan mudah dibaca dan mudah ditulis. json banyak digunakan untuk mengirim dan menerima data. terutama dalam aplikasi web dan RESTful API. -->


<?php

// menggunakan fungsi json_encode() untuk mengubah array atau object menjadi string JSON.

// $dataSiswa = [
//     'nama' => 'budi',
//     "profesi" => 'programmer',
//     "keahlian" => [
//         "php",
//         "javascript",
//         "python"
//     ],
// ];



// $json = json_encode($dataSiswa, JSON_PRETTY_PRINT); 
// // untuk mencetak output yang rapih di php 8
// echo $json;

$dataSiswa = '{"nama":"budi", "profesi":"programmer"}';

$obj = json_decode($dataSiswa);
echo $obj->nama . "<br>";

$arr = json_decode($dataSiswa, true);
echo $arr['profesi'] . "<br>";

// menangani error pada JSON

$result = json_decode($dataSiswa);
if($result == null && json_lost_error() !== JSON_ERROR_NONE) {
    echo "Error: " .json_last_error_msg();
}

?>