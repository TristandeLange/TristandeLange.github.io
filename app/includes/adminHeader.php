
<header>
			<div class="logo">
				<h1 class="logo-text"><a href="<?php echo BASE_URL . '/index.php'; ?>"> <span>TD</span>Lange</a></h1>
			</div>
			<i class="fa fa-bars menu-toggle"></i> 
			<nav>
				<ul class="nav">
					
					<?php if(isset($_SESSION['id'])); ?>

					<li>
						<a href="#">
							<i class="fa fa-user"></i>
							<?php echo $_SESSION['username']; ?>
							<i class="fa fa-chevron-down" style="font-size: .8em;"></i>
						</a>
						<ul> 
							<li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
						</ul>	
					</li>
				</ul>
			</nav>

		</header>