<?php
echo "Hello World Nested PHP!";
echo "<br>";


// Nested PHP adalah teknik di mana kita dapat menyisipkan kode PHP di dalam kode PHP lainnya. Ini memungkinkan kita untuk membuat kode yang lebih dinamis dan fleksibel. Berikut adalah contoh penggunaan nested PHP:
// nested looping(perulangan bersarang) adalah teknik di mana kita dapat menggunakan satu perulangan di dalam perulangan lainnya. Ini memungkinkan kita untuk mengulangi blok kode yang lebih kompleks. Berikut adalah contoh penggunaan nested looping:


$usia = 17;
$idCard = true;

if ($usia >= 18) {
    if ($idCard) {
        echo "Anda di persilahkan masuk";

    } else {
        echo "Anda tidak di persilahkan masuk";
    }
} else {
    echo "Anda terlalu muda untuk masuk";
}
echo "<br>";

for ($a = 1; $a <=3; $a++) {
    for ($b = 1; $b <= 3; $b++) {
        echo "Perulangan ke-$a - $b <br>";
    }
}

?>