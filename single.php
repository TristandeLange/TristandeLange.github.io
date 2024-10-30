<?php include("path.php") ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); 
include(ROOT_PATH . '/app/controllers/comments.php'); 

if(isset($_GET['id']))
{
	$post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);


$commentSection = getComments($_GET['id']);


?>
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

		<title><?php echo $post['title']; ?> TDLange</title>
	</head>
	
	<body>
		
		<!-- Header Include -->
		<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

		<!--Page Wrapper-->
		<div class="page-wrapper"> 

			<!-- Content -->
			<div class="content clearfix">
				
				<!-- Main Content Wrapper -->
				<div class="main-content-wrapper">
					<div class="main-content single">
						<h1 class="post-title"><?php echo $post['title']; ?></h1>
						<div class = "post-content">
							<?php echo html_entity_decode($post['body']); ?>
						</div>

						<div class="comment-section-wrapper">
							
							<h2> Comments </h3>

							<?php include(ROOT_PATH . "/app/includes/commentSection.php"); ?>

							

							<?php foreach ($commentSection as $comment): ?>
								<div class="comment-box">
									<p><?php echo $comment['uid']; ?> </p>
									<p><?php echo $comment['date']; ?></p>
									<p><?php echo $comment['message']; ?></p>			
								</div>
							<?php endforeach; ?>

					    </div>
					
					</div>
					
					

				</div>


				<!-- // Main Content -->

				<!-- Sidebar -->
				<div class="sidebar single">

					<div class="section insta">
						<h2 class="section-title">Instagram Posts</h2>
						<div class="insta-feed">
							<figure data-behold-id="wH7Itkla8fHtJj0yLP5J"></figure>
						</div>
					</div>

					<div class = "section popular">
						<h2 class="section-title">Popular</h2>

						<?php foreach ($posts as $p): ?>
							
							<div class="post clearfix">
								<img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
								<a href="" class="title">
									<h4><?php echo $p['title']; ?></h4>
								</a>
							</div>

						<?php endforeach ?>

						

						

					</div>

					<div class="section topics">
						<h2 class="section-title">Topics</h2>
						<ul>
							<?php foreach ($topics as $key => $topic): ?>
								<li>
								    <a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['ID'] . '&name=' . $topic['name'];?>>"<?php echo $topic['name']; ?>"><?php echo $topic['name']; ?></a>
							    </li>
							<?php endforeach; ?>
						</ul>
					</div>


				</div>
				<!-- // Sidebar -->
			</div>
			<!-- // Content -->



		</div>
		<!--// Page Wrapper-->
		

		<!-- Footer Include -->
		<?php include("app/includes/footer.php"); ?>

		<!-- JQuery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<!-- Slick Carousel -->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

		<!-- Custom Script -->
		<script src = "assets/js/scripts.js"></script>
		
	</body>
</html>