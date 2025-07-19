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
			
				$page = isset($_GET['page']) ? $_GET['page'] : '';
			
			?>

		</div>
	</div>
</body>
</html>