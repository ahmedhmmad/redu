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
	<!------- Header --------------->
	<header>
		<?php
			require 'includes/index/header.php';
		?>
	</header>
	<!------------------------------>

	<!------- Main ----------------->
	<main>
		<?php
			require 'includes/index/main.php';
		?>
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