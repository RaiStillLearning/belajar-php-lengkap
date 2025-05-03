<?php 
// Regular expression (regex) adalah pola teks yang digunakan untuk mencocokkan, mencari atau memanipulasi teks di dalam string dan REGEX ini sangat berguna dalam pemrosesan teks seperti membuat validasi dalam format tertentu 

// Jenis-Jenis Regular Expression:

// 1. preg_match() mencocokan pola regex dengan string
// 2. preg_match_all() mencocokan semua pola regex dengan string
// 3. preg_replace() mengganti teks berdasarkan pola regex dengan string lain
// 4. preg_split() untuk memisahkan string berdasarkan pola REGEX 


$email = 'rakhaarkhana98@gmail.com';

$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/"; // regex untuk validasi email

if (preg_match($pattern, $email)) {
    echo 'Email Valid';
} else {
    echo "email tidak valid";
}

echo "<br/>";

// operator ini (^ dan &) adalah untuk menandakan awal dan akhir dari string
// [a-zA-Z0-9._%+-] adalah karakter yang diijinkan dalam email
// [a-zA-Z0-9.-] adalah karakter yang diijinkan dalam domain
// [a-zA-Z]{2,}$/ sebagai extensi domain yang di izinkan minimal 2 karakter


// preg_replace : mengganti teks 
$phone = '08123456789';
$patternReplace = "/\d{4}$/";
$replace = '****';

$out = preg_replace($patternReplace, $replace, $phone); // mengganti 4 digit terakhir dengan ****
echo $out; // output 081234****s

echo '<br/>';

// preg_split memisahkan string berdasarkan pola regex
$mapel = "PHP  REACT  JAVASCRIPT LARAVEL";

$patternSplit = "/[,\s:|]+/"; // regex untuk memisahkan string berdasarkan koma, spasi, titik dua, dan garis vertikal
$mapelArray = preg_split($patternSplit, $mapel); // memisahkan string menjadi array
print_r($mapelArray); // output Array ( [0] => PHP [1] => REACT [2] => JAVASCRIPT [3] => LARAVEL )

echo '<br/>';

// preg_match_all() kita gunakan untuk menemukan semua pola
$textAll = "Angka: 123,456, dan 789";
$patternAll = '/\d+/';
preg_match_all($patternAll, $textAll, $matches); // mencari semua angka dalam string
print_r($matches[0]); // output Array ( [0] => 123 [1] => 456 [2] => 789 )
?>