<?php
// $json = file_get_contents('https://api.brianabraham.web.id/api/v1/books');
// $data = json_decode($json, true);

// if($data) {
//     echo 'Nama: ' .$data['data'][0]['judul_buku'] . '<br>';
// }
// mengirim json api


header('Content-Type: application/json; charset=utf-8');

$response = [
    'status' => 'success',
    'message' => 'data berhasil diproses',

];

echo json_encode($response, JSON_PRETTY_PRINT   );
?>