<?php
session_start();
if (!isset($_SESSION['id_user'])) {
	header('Location: login.php');
	exit();
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/custome.css">
	<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/fontawesome/js/all.min.js"></script>
</head>
<body>
	<div class="container mx-4">
		<div class="row">
			<?php include 'config/koneksi.php'; ?>
			<?php include 'partials/menu.php'; ?>
			<?php 
			
				$pages = isset($_GET['pages']) ? $_GET['pages'] : '';
			
				if($pages == "") {
					include 'pages/tableData.php';
				} elseif($pages == "tambah-data") {
					include 'pages/tambahData.php';
				} elseif($pages == "ubah-data"){
					include 'pages/ubahData.php';
				} elseif($pages == "delete-data") {
					include 'pages/deleteData.php';
				} elseif($pages == "lihat-data") {
					include 'pages/lihatData.php';
				} else {
					echo "<h2 class='text-center'>Halaman tidak ditemukan!</h2>";
				}
			?>

		</div>
	</div>
</body>
</html>