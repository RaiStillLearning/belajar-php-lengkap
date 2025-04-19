<?php
// Jenis Array 
// 1. Array Numerik : Array yang menggunakan angka sebagai indexnya.
// 2. Array Asosiatif : Array yang menggunakan string sebagai indexnya.


$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];
// echo $buah[0]; // output: Apel
echo "<br>";



foreach ($buah as $value) {
    echo $value . "<br>";
}

echo "<br>";

$profile = [
    "nama" => "Ijat",
    "umur" => 17,
    "alamat" => "Cimahi",
    "hobi" => ["Membaca", "Berenang", "Bersepeda"]
];
echo $profile["nama"]; // output: Ijat

// array_push() // menambah data ke dalam array
// count() // menghitung jumlah elemen dalam array
// array_pop() // menghapus data terakhir dari array

// array_merge() // menggabungkan dua array menjadi satu array baru

?>