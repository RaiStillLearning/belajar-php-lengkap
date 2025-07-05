<form action="" method="POST">
    <label for="">Email</label>
    <input type="email" name="email" required>
    <label for="">password</label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="Login">
</form>



<?php 
if(isset($_GET['logout'])){
    setcookie("email", "", time() - 3600, "/");
    session_start();
    unset($_SESSION['email']);
    session_destroy();
}





if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $password = $_POST["password"];

    setcookie("email", $email, time() + 3600, "/");
    header('location: setCookie.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['email'] = $email;
    header('Location: setSession.php');
}


?>