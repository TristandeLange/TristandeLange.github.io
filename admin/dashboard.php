<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>
<?php adminOnly(); ?>

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
		<link rel="stylesheet" href="../assets/css/mainstyle.css">

		<!-- Custom Styling -->
		<link rel="stylesheet" href="../assets/css/admin.css">

		<title>Admin Section - Dashboard</title>
	</head>
	
	<body>

		<!-- Admin Header -->
		<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>


		<!--Admin Page Wrapper-->
		<div class="admin-wrapper"> 
		
			<!-- Left Sidebar -->
			<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
			<!-- // Left Sidebar -->


			<!-- Admin Content -->
			<div class="admin-content">
				

				<div class="content">

					<h2 class="page-title">Dashboard</h2>

					<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

					
					
				</div>


			</div>
			<!-- //Admin Content -->

		</div>
		<!--// Admin Page Wrapper-->


		<!-- JQuery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<!-- CKEditor 5 -->
		<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>

		<!-- Custom Script -->
		<script src = "../assets/js/scripts.js"></script>


	</body>

</html>
