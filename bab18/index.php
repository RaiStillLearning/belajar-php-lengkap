<?php 
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

//membuat sanitasi input agar tidak terjadi eksploitasi
$allowedPage = ['home', 'product', 'about', 'contact'];

if(!in_array($page, $allowedPage)) {
    $page = 'home'; // default page
}

include 'include/header.php';
include 'pages/$page.php';
include 'include/footer.php';




?>