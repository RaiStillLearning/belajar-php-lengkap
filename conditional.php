<?php 
// // conditional statement
// cara kerja kondisional dalam PHP adalah untuk mengontrol alur eksekusi program berdasarkan kondisi tertentu. Berikut adalah beberapa contoh cara kerja kondisional dalam PHP:
// // 1. if statement : digunakan untuk mengeksekusi blok kode jika kondisi tertentu terpenuhi.
// // 2. if-else statement : digunakan untuk mengeksekusi blok kode jika kondisi tertentu terpenuhi, dan blok kode alternatif jika tidak.
// // 3. switch statement : digunakan untuk mengeksekusi blok kode berdasarkan nilai dari sebuah variabel.
// // 4. ternary operator : digunakan untuk mengeksekusi blok kode berdasarkan kondisi tertentu dalam satu baris.



$nilai1 = 70;

if ($nilai1 >= 90) {
    echo "Nilai Kamu Gacor";
}
else {
    echo "Nilai Kamu Tidak Gacor";
}


echo "<br>";

$hari = "Rabu";
switch ($hari) {
    case "Senin":
        echo "Hari ini Senin";
        break;
    case "Selasa":
        echo "Hari ini Selasa";
        break;
    case "Rabu":
        echo "Hari ini Rabu";
        break;
    default:
        echo "Hari tidak valid";
        break;
}



$usia = 16;

$status = ($usia >= 18) ? "Dewasa" : "Anak-Anak";
echo "<br>";
echo $status;
?>