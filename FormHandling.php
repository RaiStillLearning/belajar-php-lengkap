<!-- form handling adalah proses pengelolaan data yang dikirim melalui form HTML  -->
 <!-- data yang dikirim melalui method HTTP seperti POST dan GET. -->

 <!-- validation adalah proses untuk memeriksa nilai input dari pengguna untuk memastikan data yang diterima memenuhi kriteria sebelum di proses  -->

<!-- dan untuk menghindari adanya nilai kosong yang dikirim  -->

<!-- proses adalah tahapan terkhir yang dimana data yg sudah divalidasi untuk di olah lebih lanjut seperti untuk kebutuhan simpan ke table database, untuk  di tampilkan output dari masing-masing nilai kedalam elemen html  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $nama_lengkap = $_POST['nama_lengkap'];
        
        // Validasi data
        if (empty($nama_lengkap)) {
            echo "Nama lengkap tidak boleh kosong.";
        } else {
            // Proses data (misalnya simpan ke database atau tampilkan)
            echo "Nama lengkap: " . htmlspecialchars($nama_lengkap);
        }
    }
    
    ?>
    <form action="" method="POST">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" required><br><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>