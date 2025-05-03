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

?>