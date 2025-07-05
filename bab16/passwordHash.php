<!-- password hash digunakan untuk mengenkripsi password sebelum di simpan ke database
sementara pasword verify digunakan untuk memverifikasi password yang dimasukan oleh 
pengguna dengan hash yang sudah di simpan sebelumnya -->


<!-- password_hash()
fungsi ini mengubah password menjadi string hash yang aman dengan algoritma seperti bcrypt
atau argon2 -->

<?php
$hashPassword = password_hash("admin123", PASSWORD_DEFAULT);
echo $hashPassword . "<br>";

$password = 'admin123';
// password_verify() -> digunakan untuk mencocokan password yang sudah di hash 
if(password_verify($password, $hashPassword)) {
    echo "Password cocok!";
} else {
    echo "Password tidak cocok!";
}



?>