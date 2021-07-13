<?php
include "../database/Connection.php";
if(!isset($_SESSION["USER"])){
	header('location: admin/app/php/views/users/userLogin.php');
	// $pagina = "login";
	// include "app/php/routes/index.php";
	// exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
</head>
<body>
	<div class="custom-container">
		<div class="custom-sidenav">
			<div class="teste">
				<div class="logo">
					<img src="app/assets/img/developer-icon.png" width="60" height="60">
				</div>
				<ul class="links">
					<li>
						<svg class="bi" width="25" height="25" fill="currentColor" style="color: cornflowerblue">
							<use xlink:href="app/assets/bootstrap-icons/bootstrap-icons.svg#bag-check"/>
						</svg>
						<a href="">Produtos</a>
					</li>
					<li>
						<svg class="bi" width="25" height="25" fill="currentColor" style="color: cornflowerblue">
							<use xlink:href="app/assets/bootstrap-icons/bootstrap-icons.svg#box-seam"/>
						</svg>
						<a href="">Fornecedores</a>
					</li>
					<li>
						<svg class="bi" width="25" height="25" fill="currentColor" style="color: cornflowerblue">
							<use xlink:href="app/assets/bootstrap-icons/bootstrap-icons.svg#people"/>
						</svg>
						<a href="users/user_list.php">Clientes</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="custom-main">
			<div class="top-navbar">
				<label for="">Olá, <?=$_SESSION["USER"]['name'];?>! | <a href="../controller/users/logout.php">Sair</a></label>
			</div>
			<div class="content">
				<form action="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
					<input type="date" class="form-control" name="" id="">
				</form>
			</div>
			<footer class="footer">
				©2021
			</footer>
		</div>
	</div>
	<link rel="stylesheet" type="text/css" href="app/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="app/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="app/assets/bootstrap-icons/font/bootstrap-icons.css">
	<script src="app/assets/js/jquery-3.5.1.min.js"></script>    
	<script src="app/assets/bootstrap/js/bootstrap.min.js"></script>    
    <script src="app/assets/js/functions.js"></script>    
</body>
</html>