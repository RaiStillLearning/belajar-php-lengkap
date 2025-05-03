<?php 
// apa itu global variable dan super global ?
// globbal variable adalah konsep yang digunakan untuk mengelola data di dalam ruang lingkup yang berbeda
// definisi variable global adalah variable yang di deklarasikan di luar fungsi, class atau method
// variable ini hanya dapat di akses secara langsung dari luar fungsi, kecuali menggunakan kata kunci atau keyword global


$nilai = 80; // global variable
function HitungNilai() {
global $nilai;
echo $nilai;
}

HitungNilai(); // output 80



echo '<br/>';

// superglobal adalah variable bawaaan dari php yg tersedia di seluruh script atau code. tanpa perlu mendefinisikan global atau menggunakan variable $GLOBALS. superglobal selalu dapat diakses dimanapun terlepas dari ruang lingkupnya 

    // Daftar Super Global:
    // 1. $_GET - merupakan method get untuk melempar nilai melalui url
    // 2. $_POST - merupakan method post untuk melempar nilai melalui form
    // 3. $_REQUEST - merupakan gabungan dari $_GET dan $_POST
    // 4. $_SESSION - digunakan untuk menyimpan data session

    $_GET['nama_lengkap'] = 'Budi'; // contoh penggunaan $_GET
    echo $_GET['nama_lengkap']."<br/>"; // output Budi

    // mengguanakan variabel globals 
    $nilaiUAS = 90;
    function showGlobals() {
        echo $GLOBALS['nilaiUAS']; // output 90
    }


    showGlobals();
?>