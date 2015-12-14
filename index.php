<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Alvian Prasetya's Personal Webpage</title>
		<meta name="description" content="Alvian Prasetya's Personal Webpage">
		<meta name="author" content="Alvian Prasetya">
		
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/bootstrap-parallax.min.css" rel="stylesheet" media="screen">
		<link href="assets/css/parallax.css" rel="stylesheet" media="screen">
		
		<script src="assets/js/jquery-1.6.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/parallax.js"></script>
	</head>
	
	<body>
		
		<?php
			$page_id = "index";
			include "navigationBar.php";
		?>
		
		<?php
			include "headerSection.php";
		?>
		
		<?php
			include "projectsSection.php";
		?>
		
		<?php
			include "contactSection.php";
		?>
		
		<?php
			include "footer.php";
		?>
		
	</body>
	
</html>