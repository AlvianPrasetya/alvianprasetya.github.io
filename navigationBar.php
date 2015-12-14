<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="#">Alvian Prasetya</a>
			<ul class="nav">
				<li <?php if ($page_id == "index") echo 'class="active"' ?>><a href="index.php">Home</a></li>
				<li <?php if ($page_id == "about") echo 'class="active"' ?>><a href="about.php">About</a></li>
				<li <?php if ($page_id == "projects") echo 'class="active"' ?>><a href="projects.php">Projects</a></li>
				<li <?php if ($page_id == "contact") echo 'class="active"' ?>><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</div>
</div>