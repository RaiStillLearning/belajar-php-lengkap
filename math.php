<?php 
echo "Belajar math PHP<br>";


// 1. abs() : Mengembalikan nilai absolut dari sebuah bilangan.
// 2. pow() : Menghitung pangkat dari sebuah bilangan.
// 3. sqrt() : Menghitung akar kuadrat dari sebuah bilangan.
// 4. round() : Membulatkan angka ke bilangan bulat terdekat.
// 5. rand() : Menghasilkan bilangan acak antara dua nilai.

echo abs(-10) . "<br/>"; // output: 10
echo pow(2,3); // output: 8 (2^3)
echo "<br/>";
echo sqrt(16); // output: 4 (akar kuadrat dari 16)
echo "<br/>";
echo round(3.14159, 2); // output: 3.14 (dibulatkan ke atas)    
echo "<br/>";
echo rand(1, 100)


// contoh constanta 
//global constanta
?>

<?php
define('PI', 3.14159); // konstanta global
echo PI . "\n"; // tambahin newline biar rapi output-nya

// class constanta
class Circle {
    const RADIUS = 10; // konstanta dalam class
}

echo Circle::RADIUS;



//magic constants / konstanta ajaib
// di php memiliki beberapa konstanta ajaib yang dapat digunakan untuk mendapatkan informasi tentang file, baris, dan direktori saat ini. Berikut adalah beberapa contoh magic constants yang sering digunakan:
// 1. __FILE__ : Mengembalikan nama file lengkap (termasuk path) dari file saat ini.
// 2. __DIR__ : Mengembalikan direktori dari file saat ini.
// 3. __LINE__ : Mengembalikan nomor baris saat ini dalam file.
// 4. __CLASS__ : Mengembalikan nama kelas saat ini.
// 5.__FUNCTION__ : Mengembalikan nama fungsi saat ini.
// 6. __METHOD__ : Mengembalikan nama metode saat ini (termasuk nama kelas).
// 7. __NAMESPACE__ : Mengembalikan nama namespace saat ini.


echo __LINE__ . "<br/>"; // output: 1 (nomor baris saat ini)
echo __FILE__ . "<br/>"; // output: /path/to/file.php (nama file lengkap)
echo __DIR__ . "<br/>"; // output: /path/to (direktori file saat ini)
echo __CLASS__ . "<br/>"; // output: Circle (nama kelas saat ini)




//date and time data dan waktu
//contoh :
// 1. date() : Mengembalikan tanggal saat ini dalam format yang ditentukan.
// 2. strtotime() : Mengonversi string tanggal/waktu menjadi timestamp Unix.


$date = new DateTime(); // Membuat objek DateTime baru
echo $date->format('Y-m-d H:i:s') . "<br/>"; // Output: 2023-10-01 12:34:56 (contoh format tanggal dan waktu saat ini)
$nextWeek = strtotime('+1 week'); // Menghitung timestamp untuk satu minggu ke depan
echo date('Y-m-d H:i:s', $nextWeek) . "<br/>"; // Output: 2023-10-08 12:34:56 (contoh tanggal satu minggu ke depan)

$dateInterval = new DateTime(); // objek tanggal sekarang
$interval = new DateInterval('P1D'); // interval satu hari

$dateInterval->add($interval); //  ini sekarang bener

echo $dateInterval->format('Y-m-d H:i:s') . "<br/>";



?>

