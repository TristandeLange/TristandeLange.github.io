<?php include("path.php") ?>
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

					<h1>Hello, I'm Tristan de Lange - Exploring Tech and Creativity</h1>
					<p>
						Greetings! I'm Tristan de Lange, a dedicated software developer with a keen interest in merging technology and creativity. My passion lies in video game development, art, and the exploration of creating art with, in spite of, and for technology.
					</p>

					<h2>Crafting Games and Adventures </h2>
					<p>
						Within the realm of game development, I engage in various projects, from game jams to personal ventures. My goal is to create games that combine unique mechanics, meaningful stories, and emotive art to make something that lingers in a player's mind. Games are indisputably an incredibly intricate and interactive form of art, and I want to make art that resonates with player for a long time. Ideally, I hope to make games that inspire other people to change and to create themselves. 
					</p>

					<h2>Tech Journey</h2>
					<p>
						My academic journey has taken me through AI, Cryptography, Pen Testing, UI/UX, and many other disciplines within the field of computer science. Life is an ongoing learning process, and I always enjoy expanding my horizons. 
					</p>

					<h2>Jack of Many Trades</h2>
					<p>
						Often labeled a renaissance man, I find fulfillment in delving into diverse areas, whether it's managing IT infrastructure, software development, game design, voice acting, or media content creation. I don't claim expertise in all, but I do claim enthusiasm and dedication for each.
					</p>

					<h2>Beyond Tech and Pixels</h2>
					<p>
						Away from the tech scene, you'll find me pushing my limits in triathlon training, practicing kickboxing, and traveling as much as I can. I also enjoy working on my creative skills further by practicing art through creative writing and pixel art. 
					</p>

					<h2>Join Me on This Journey</h2>
					<p>
						This blog serves as a platform for sharing my thoughts on a range of topics, from game development to life's adventures. Thank you for stopping by!</h1>
					</p>

				</div>
			</div>
		</div>


	<!-- Footer Include -->
		<?php include("app/includes/footer.php"); ?>

	</body>
</html>