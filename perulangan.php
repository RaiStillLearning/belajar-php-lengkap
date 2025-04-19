<?php
// jenis jenis perulangan dalam PHP adalah untuk mengulangi blok kode tertentu berdasarkan kondisi yang ditentukan. Berikut adalah beberapa contoh cara kerja perulangan dalam PHP:
// // // 1. for loop : digunakan untuk mengulangi blok kode dengan jumlah iterasi yang ditentukan.
// // // 2. while loop : digunakan untuk mengulangi blok kode selama kondisi tertentu terpenuhi.
// // // 3. do-while loop : mirip dengan while loop, tetapi blok kode dieksekusi setidaknya sekali sebelum memeriksa kondisi.
// // // 4. foreach loop : digunakan untuk mengulangi elemen dalam array atau objek.
// // // 5. break : digunakan untuk keluar dari perulangan.

// syarat melakukan perulangan dalam PHP adalah untuk menentukan kondisi yang harus dipenuhi agar perulangan dapat dilakukan. Berikut adalah beberapa contoh cara kerja syarat perulangan dalam PHP:
// 1. for loop : digunakan untuk mengulangi blok kode dengan jumlah iterasi yang ditentukan.
// 2. while loop : digunakan untuk mengulangi blok kode selama kondisi tertentu terpenuhi.
// 3. do-while loop : mirip dengan while loop, tetapi blok kode dieksekusi setidaknya sekali sebelum memeriksa kondisi.
// // 4. foreach loop : digunakan untuk mengulangi elemen dalam array atau objek.


for ($i = 0; $i <= 10;$i++) {
    echo "Perulangan ke-$i <br>";
}
echo "<br>";


$b = 1;
while ($b <= 10) {
    echo "Perulangan while yang ke-$b <br>";
    $b++;
}


// DO-WHILE dapat digunakan untuk menjalankan kode setidaknya hanya sekali saja
$c = 1;
do {
    echo "Perulangan do while yang ke-$c <br>";
    $c++;
} while ($c <= 10);
echo "<br>";


// forEach digunakan khusus untuk menghandle data array
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

foreach ($buah as $index => $value) {
    echo "Buah ke-$index adalah $value <br>";
}
?>