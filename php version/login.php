<?php include("path.php") ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<!-- Another Attempt at JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

		<!-- Font Awesome -->
		<script src="https://kit.fontawesome.com/9122cf98b7.js" crossorigin="anonymous"></script>
		
		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lora&display=swap" rel="stylesheet">

		<!-- Custom Styling -->
		<link rel="stylesheet" href="assets/css/mainstyle.css">

		<title>Login</title>
	</head>
	
	<body>
		
		<!-- Header Include -->
		<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

		<div class="auth-content">
			
			<form action="login.php" method="post">
				<h2 class="form-title">Login</h2>

				<div>
					<label>Username</label>
					<input type="text" name="username" class="text-input">
				</div>
				<div>
					<label>Password</label>
					<input type="password" name="password" class="text-input">
				</div>
				<div>
					<button type="submit" name="login-btn" class="btn btn-big">Login</button>	
				</div>
				<p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
			</form>

		</div>
		

		


		<!-- JQuery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<!-- Custom Script -->
		<script src = "assets/js/scripts.js"></script>

		<!-- Script for insta -->
		<script src="https://w.behold.so/widget.js" type="module"></script>


	</body>

</html>
