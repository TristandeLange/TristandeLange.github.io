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
				
				<!-- Main Content -->
				<div class="main-content about">

					<div>
						<h1>Personal Projects</h1>
						<h3>Projects, Demos, and Game Jams</h3>
					</div>
					
					<div class="cards">
						<div class="flip-card">
							<a href="https://tristandelange.itch.io/DementedNoir" target="_blank">
							  <div class="flip-card-inner">
							    <div class="flip-card-front">
							      <img src="<?php echo BASE_URL . '/assets/images/DementedNoirKelArt.jpg'; ?>" alt="Avatar" style="width:300px; height:300px;">
							    </div>
							    <div class="flip-card-back">
							      <h1>Demented Noir</h1>
							      <p>A Demo of a Choose Your Own Adventure game set in a dark noir fantasy world. Go through these questions and determine your greater and lesser arcana. Made in collaboration with Kelvin Ortiz</p>
							    </div>
							  </div>
						  </a>
						</div>
						
						<div class="flip-card">
							<a href="https://tristandelange.itch.io/swapshot" target="_blank">
							  <div class="flip-card-inner">
							    <div class="flip-card-front">
							      <img src="<?php echo BASE_URL . '\assets\images\SwapShotImage.png'; ?>" alt="Avatar" style="width:300px; height:300px;">
							    </div>
							    <div class="flip-card-back">
							      <h1>Swap Shot</h1>
							      <p>A small submission to a boss rush game jam I attempted in 3 days. Swap positions with obstacles in the level to block shots, reflect shots, and set up bomb barrels near the boss.</p>
							    </div>
							  </div>
						  	</a>
						</div>

						<div class="flip-card">
							<a href="https://github.com/TristandeLange/CSC214-LastDefense" target="_blank">
							  <div class="flip-card-inner">
							    <div class="flip-card-front">
							      <img src="<?php echo BASE_URL . '\assets\images\BestDefenseIcon.png'; ?>" alt="Avatar" style="width:300px; height:300px;">
							    </div>
							    <div class="flip-card-back">
							      <h1>Best Defense</h1>
							      <p>This was a game I made for the iphone with a team in college. We never published it, but here's the github page for any interested. You had to turn and face increasingly faster projectiles in order to face and thus defened against them.</p>
							    </div>
							  </div>
						  	</a>
						</div>
					

						<div class="flip-card">
								<a href="#" target="_blank">
								  <div class="flip-card-inner">
								    <div class="flip-card-front">
								      <h1>More To Come!</h1>
								    </div>
								    <div class="flip-card-back">
								      <h1>More To Come!</h1>
								      <p></p>
								    </div>
								  </div>
							  	</a>
							</div>
						</div>
					
					</div>

				</div>
			</div>
		</div>

		<!-- Footer Include -->
		<?php include("app/includes/footer.php"); ?>

	</body>
</html>