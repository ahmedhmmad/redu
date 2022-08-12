
<div id="myCarousel" class="mb-0 carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	<?php 

		for ($i=0; $i <= 6 ; $i++) {
			if($i == 0) {
				$a = 'active';
			}
			else {
				$a = "";
			}
	?>
		<div class="carousel-item <?= $a; ?> ">
			<img class="img-fluid first-slide" src="includes\images\news-<?=$i+1?>.jpg" alt="First slide">
			<div class="container">
				<div class="carousel-caption text-right">
					<h1><?= $news[$i]?></h1>
				</div>
			</div>
		</div>
	<?php } ?>
		


	</div>
	
	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only"></span>
	</a>

	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only"></span>
	</a>
</div>