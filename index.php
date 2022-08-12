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
<body class="p-0">
	<!-- Start Section -->
		<?php require 'includes/class/News.php'; ?>
	<!--  End Section  -->
	<!------- Header --------------->
	<header>
		<?php
			require 'includes/index/header.php';
		?>
	</header>
	<!------------------------------>

	<!------- Main ----------------->
	<main>
		<!-- Start Top-Main Section -->
		<?php require 'includes/index/main/top-main.php'; ?>
		<!--  End Top-Main Section  -->
		<!------------------------>
		<!-- Start Middle-Main Section -->
		<?php require 'includes/index/main/mid-main.php'; ?>
		<!--  End Middle-Main Section  -->
		<!------------------------>
		<!-- Start Buttom-Main Section -->
		<?php require 'includes/index/main/btm-main.php'; ?>
		<!--  End Buttom-Main Section  -->
	</main>
	<!------------------------------>

	<!------- footer --------------->
	<footer>
		<?php
			require 'includes/index/footer.php';
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