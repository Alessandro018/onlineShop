<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body class="login-body">
	<div class="login">
		<form id="login">
			<h2>Acessar sua conta</h2>
			<label>Login</label>
			<input type="text" class="form-control" name="login" minlength="5" placeholder="min 5 | max 20" maxlength="20" required>
			<label>Senha</label>
			<input type="password" class="form-control" name="password" minlength="6" placeholder="min 6 | max 20" maxlength="20" required>
			<button type='submit'>Entrar</button>
		</form>
	</div>

	<div class="modal fade" id="showErrorMessage" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header border-0">
				<!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
			</div>
			<div class="modal-body d-flex justify-content-center align-items-center flex-column">
				<img src="../../../assets/img/error-icon.jpg" width="60" height="60">
				<h4 class="text-danger mt-2" id="errorMessage"></h4>
			</div>
			<div class="modal-footer d-flex justify-content-center">
				<button type="button" class="btn btn-primary px-5" data-bs-dismiss="modal">Ok</button>
			</div>
			</div>
		</div>
	</div>

	<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/bootstrap/css/bootstrap.min.css">
	<script src="../../../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../../../assets/bootstrap/js/bootstrap.min.js"></script>    
    <script src="../../../assets/js/functions.js"></script>
</body>
</html>