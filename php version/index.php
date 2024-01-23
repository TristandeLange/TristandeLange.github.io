<?php include("path.php") ?>
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

		<title>Blog</title>
	</head>
	
	
	<body>
		
		<!-- Header Include -->
		<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

		<!--Page Wrapper-->
		<div class="page-wrapper"> 
		
			<!--Post Slider-->
			<div class="post-slider">
				<h1 class="slider-title"> Trending Posts</h1>
				<i class="fa fa-chevron-left prev"></i>
				<i class="fa fa-chevron-right next"></i>


				<div class="post-wrapper">
					
					<div class="post ">
						<img src="assets/images/programming_meme.jpg" alt="" class="slider-image">
						<div class="post-info">
							<h4><a href="single.php">Programming Memes for People with no dreams</a></h4>
							<i class="far fa-user"><span class ="post-sub">Tristan de Lange</span></i>
							&nbsp;
							<i class="far fa-calendar"><span class ="post-sub">Jan 1, 2024</span></i>
						</div>
					</div>

					<div class="post ">
						<img src="assets/images/programming_meme.jpg" alt="" class="slider-image">
						<div class="post-info">
							<h4><a href="single.php">Programming Memes for People with no dreams</a></h4>
							<i class="far fa-user"><span class ="post-sub">Tristan de Lange</span></i>
							&nbsp;
							<i class="far fa-calendar"><span class ="post-sub">Jan 1, 2024</span></i>
						</div>
					</div>

					<div class="post ">
						<img src="assets/images/programming_meme.jpg" alt="" class="slider-image">
						<div class="post-info">
							<h4><a href="single.php">Programming Memes for People with no dreams</a></h4>
							<i class="far fa-user"><span class ="post-sub">Tristan de Lange</span></i>
							&nbsp;
							<i class="far fa-calendar"><span class ="post-sub">Jan 1, 2024</span></i>
						</div>
					</div>

					<div class="post ">
						<img src="assets/images/programming_meme.jpg" alt="" class="slider-image">
						<div class="post-info">
							<h4><a href="single.php">Programming Memes for People with no dreams</a></h4>
							<i class="far fa-user"><span class ="post-sub">Tristan de Lange</span></i>
							&nbsp;
							<i class="far fa-calendar"><span class ="post-sub">Jan 1, 2024</span></i>
						</div>
					</div>

					<div class="post">
						<img src="assets/images/programming_meme.jpg" alt="" class="slider-image">
						<div class="post-info">
							<h4><a href="single.php">Programming Memes for People with no dreams</a></h4>
							<i class="far fa-user"><span class ="post-sub">Tristan de Lange</span></i>
							&nbsp;
							<i class="far fa-calendar"><span class ="post-sub">Jan 1, 2024</span></i>
						</div>
					</div>

				</div>
			</div>
			<!--// Post Slider-->

			<!-- Content -->
			<div class="content clearfix">
				
				<!-- Main Content -->
				<div class="main-content">
					<h1 class="recent-post-title">Recent Posts</h1> 
					
					<div class="post clearfix">
						<img src="assets/images/image2.png" alt="" class="post-image">
						<div class = "post-preview">
							<h2><a href="single.php">Yet another meme for you heathens</a></h2>
							<i class="far fa-user"> <span class ="post-sub">Tristan de Lange</span> </i>
							&nbsp;
							<i class="far calender"><span class ="post-sub"> Jan 2, 2024</span></i>
							<p class="preview-text">Random bullshittttt oh yes more random bullshit, you know how I dearly love random bullshit, all the random bullshit in the wooooooorld
							</p>
							<a href="single.php" class="read-more btn">Read More</a>
						</div>
					</div>
					
					<div class="post clearfix">
						<img src="assets/images/image2.png" alt="" class="post-image">
						<div class = "post-preview">
							<h2><a href="single.php">Yet another meme for you heathens</a></h2>
							<i class="far fa-user"> <span class ="post-sub">Tristan de Lange</span> </i>
							&nbsp;
							<i class="far calender"><span class ="post-sub"> Jan 2, 2024</span></i>
							<p class="preview-text">Random bullshittttt oh yes more random bullshit, you know how I dearly love random bullshit, all the random bullshit in the wooooooorld
							</p>
							<a href="single.php" class="read-more btn">Read More</a>
						</div>
					</div>
				
					<div class="post clearfix">
						<img src="assets/images/image2.png" alt="" class="post-image">
						<div class = "post-preview">
							<h2><a href="single.php">Yet another meme for you heathens</a></h2>
							<i class="far fa-user"> <span class ="post-sub">Tristan de Lange</span> </i>
							&nbsp;
							<i class="far calender"><span class ="post-sub"> Jan 2, 2024</span></i>
							<p class="preview-text">Random bullshittttt oh yes more random bullshit, you know how I dearly love random bullshit, all the random bullshit in the wooooooorld
							</p>
							<a href="single.php" class="read-more btn">Read More</a>
						</div>
					</div>
				
					<div class="post clearfix">
						<img src="assets/images/image2.png" alt="" class="post-image">
						<div class = "post-preview">
							<h2><a href="single.php">Yet another meme for you heathens</a></h2>
							<i class="far fa-user"> <span class ="post-sub">Tristan de Lange</span> </i>
							&nbsp;
							<i class="far calender"><span class ="post-sub"> Jan 2, 2024</span></i>
							<p class="preview-text">Random bullshittttt oh yes more random bullshit, you know how I dearly love random bullshit, all the random bullshit in the wooooooorld
							</p>
							<a href="single.php" class="read-more btn">Read More</a>
						</div>
					</div>
				</div>	
			
				<!-- // Main Content -->

				<div class="sidebar">
								
					<div class="section search">
						<h2 class="search-title">search</h2>
						<form action="index.php" method="post">
							<input type="text" name="seach-term" class="text-input" placeholder="Search...">
						</form>
					</div>

					<div class="section topics">
						<h2 class="section-title">Topics</h2>
						<ul>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Interviews</a></li>
							<li><a href="#">Gaming News</a></li>
							<li><a href="#">Game Development</a></li>
							<li><a href="#">Random</a></li>
						</ul>
					</div>

				</div>
		
			</div>
			<!-- // Content -->



		</div>
		<!--// Page Wrapper-->
		

		<!-- Footer Include -->
		<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>



		<!-- JQuery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<!-- Slick Carousel -->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

		<!-- Custom Script -->
		<script src = "assets/js/scripts.js"></script>


	</body>

</html>
