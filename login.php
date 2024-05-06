<?php
	
	session_start();

	if (isset($_POST['login'])) {
		require 'function.php';

		$username = $_POST($_POST['user']);
		$pass = $_POST($_POST['pass']);

		$check = mysqli_query($connect, "SELECT * FROM login WHERE username='$username' and pass='$pass'");
		$hitung = mysqli_num_rows($check);

		if ($hitung > 0) {
			$_SESSION['login'] = 'true';
			header('location:index.php');
		} else {
			echo '
            	<script>
            	alert("Username atau Password Salah");
            	window.location.href="login.php"
            	</script>
            	';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Login - Aplikasi Toko</title>
	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-success">
	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">
			<div class="col-md-5 mt-5">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="p-5">
							<div class="text-center">
								<h4 class="h4 text-gray-900 mb-4"><b>Login Aplikasi Kasir</b></h4>
							</div>
							<form class="form-login" method="POST">
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="username"
										placeholder="User ID" autofocus>
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user" name="pass"
										placeholder="Password">
								</div>
								<button class="btn btn-success btn-block" name="login" type="submit"><i
										class="fa fa-lock"></i>
									Masuk</button>
							</form>
							<!-- <hr>
							<div class="text-center">
								<a class="small" href="forgot-password.html">Forgot Password?</a>
							</div>
							<div class="text-center">
								<a class="small" href="register.html">Create an Account!</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap core JavaScript-->
	<script src="sb-admin/vendor/jquery/jquery.min.js"></script>
	<script src="sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="sb-admin/js/sb-admin-2.min.js"></script>
</body>

</html>