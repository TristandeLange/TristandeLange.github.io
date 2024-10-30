<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	</head>
	

	<body>


		<!-- Header Include -->
		<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
		<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

		<!--Page Wrapper-->
		<div class="page-wrapper"> 

			<!-- Content -->
			<div class="content clearfix">


				<?php

					echo "<iframe src=\"assets/images/GamesconVersion.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";

				?>


			</div>
		</div>

		<!-- Footer Include -->
		<?php include("app/includes/footer.php"); ?>

	</body>
</html>