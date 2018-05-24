<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?= file_get_contents(__DIR__ . '/static/icons/app-icons.svg') ?>

	<?php include 'includes/header.php';?>
	<main class="container">
		<div class="toolbar">
			<section>
				<h1 class="mb-4">My submissions</h1>
			</section>
			<div class="rail-select">
			  <div class="select-side">
			    <i class="glyphicon glyphicon-menu-down blue"></i>
			  </div>
			  <select class="form-control" id="sel1">
			    <option value="1">Sort by newest</option>
			    <option value="2">Sort by oldest</option>
			  </select>
			</div>
			
		</div>
		<div class="row">
			<?php foreach (range(1, 12) as $product): ?>
			<div class="col-xs-4-5 col-sm-2-5 col-md-1-5 col-lg-1-5">
				<article>
					<img src="static/img/client-logo.jpg" alt="" class="logo img-fluid">
					<a href="submission-page.php">
						<img src="static/img/client-image.png" alt="" class="bg img-fluid">
					</a>
					<h2>Cineworld</h2>
					<p class="testimonial">Testimonial goes here! Testimonial goes here! Testimonial goes here ... <span class="testimonial-by">Maria F</span></p>
					<p class="testimonial-date">
						22/07/2018
					</p>
					<a href="submission-page.php">
						<svg icon="duel" class="icon icon-three-dots">
					    	<use href="#icon-three-dots"></use>
					    </svg>
				    </a>
				</article>
			</div>
			<?php endforeach; ?>
		</div>
	</main>
	<?php include 'includes/footer.php';?>

</body>
</html>