<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		* {
			margin: 0px;
		}
	</style>
	<!------- Styles -------------->
	<?php  
		require 'includes/_styles.php';
	?>
	<!------------------------------>
</head>
<body class="p-0" style="background-color: var(--color-4);">
	<!-- Start Section -->
		<?php require 'includes/class/News.php'; ?>
	<!--  End Section  -->
	<!------- Header --------------->
	<header>
		<?php 
			require 'new/header.php'
			//require 'includes/index/header.php'; 
		?>
	</header>
	<!------------------------------>

	<!------- Main ----------------->
	<main>
		<?php 
			require 'new/main1.php';
			require 'new/main2.php';
			require 'new/main3.php';
			//require 'includes/index/main.php'; 
		?>
	</main>
	<!------------------------------>

	<!------- footer --------------->
	<footer>
		<?php 
			require 'new/footer.php'
			//require 'includes/index/footer.php'; 
		?>
	</footer>
	<!------------------------------>
	
	<!------- Scripts -------------->
	<?php
		require 'includes/_scripts.php';
	?>
	<!------------------------------>
</body>
</html>