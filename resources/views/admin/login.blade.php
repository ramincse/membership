<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap">
		<a href=""></a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Admin Login</h2>
				<form action="">
					<div class="form-group">
						<label for="">Email / Username</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input class="form-control" type="password">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Log In">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<a class="card-link" href="{{ route('admin.register') }}">Admin Register</a>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>