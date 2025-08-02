<?php 
require 'config/koneksi.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $pdo->prepare("SELECT * FROM masterusers WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if($user && password_verify($password, $user['password'])){
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        $_SESSION['role'] = $user['role'];
        header("Location: index.php");
        exit();
} else {
    header("Location: login.php?status=invalid");
    exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 col-sm-6 col-md-4 offset-1 offset-sm-3 offset-md-4">
                <div class="card my-5 py-4 px-5 bg-body-tertiary rounded-4">
                    <form action="" novalidate="novalidate" method="POST">
                        <div class="alert bg-white py-2 text-center">
                            <h4 class="fw-700">Login Backend</h4>
                        </div>
                        <?php if(isset($_GET['status']) == 'invalid'): ?>
                        <div class="alert bg-danger-subtle py-1 text-center">Username atau password salah</div>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="" class="form-label">username</label>
                            <input type="email" name="username" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success float-end">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>