<?php 


// open file 
$fileOpen = fopen("dataSiswa.txt", "r"); //membuka file dalam mode read (mode baca)

if ($fileOpen) {
    echo "1. file berhasil dibuka <br>";
    fclose($fileOpen); // menutup file setelah dibuka
} else {
    echo "2. file gagal dibuka <br>";
}

// Create / write file 
$fileCreate = fopen("dataSiswa.txt", "w"); //membuka file dalam mode write (mode tulis)
$dataSiswa = [
    "nama" => "John Doe",
    "umur" => 20,
    "jurusan" => "Teknik Informatika"
];
if ($fileCreate) {
    $jsonData = json_encode($dataSiswa, JSON_PRETTY_PRINT); // mengubah array menjadi format JSON
    fwrite($fileCreate, $jsonData); //untuk dapat menulis ke dalam file yang sudah kita buka
    fclose($fileCreate);
    echo "3. file berhasil dibuat <br>";
} else {
    echo "4. file gagal dibuat <br>";
}


//lihat data file
$lihatData = fopen("dataSiswa.txt", "r"); //membuka file dalam mode read (mode baca)
if ($lihatData) {
    $jsonShow = fread($lihatData, filesize("dataSiswa.txt")); // untuk membaca isi file
    fclose($lihatData); // menutup file setelah dibaca
    $data = json_decode($jsonShow, true); // mengubah format JSON menjadi array
    echo "<pre>";
    print_r($data); // menampilkan data dalam format array
    echo "</pre>";
} else {
    echo "6. file gagal dibaca <br>";
}

//hapus file
$fileRemove = "dataSiswa.txt";
if (file_exists($fileRemove)){
    unlink($fileRemove); // menghapus file
    echo "7. file berhasil dihapus <br>";
} else {
    echo "8. file gagal dihapus <br>";
}

?>