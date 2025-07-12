    <!-- exception error handling in PHP adalah mekansime dalam pemrograman yang digunakan untuk menangani kesalahan
    atau error agar program tidak menyebabkan crash atau berhenti secara tiba-tiba. khususnya di php
    error handeling menggunakan blog try, catch dan finally untuk menangkap dan menangani kesalahan exception -->


    <?php
    function divide($a, $b) {
        if($b == 0) {
            throw new Exception("tidak bisa membagi dengan NOL");
        }
        return $a / $b;
    }
    try {
        echo divide(10, 0);

    } catch (Exception $a) {
        echo "Error! <br/>" . $a->getMessage();
    }
    
    
    // jika b = 0 maka throw new Exception akan memproses pesan error
    // dan untuk blog try mencoba untuk menjalankan fungsi
    // catch untuk menangkap Exception dan menampilkan pesan error
    ?>