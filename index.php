<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title></title>

<link rel="stylesheet" href="css/style.css">
</head>
<body>

<?= file_get_contents(__DIR__ . '/static/icons/app-icons.svg') ?>

<header>
	  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	    <svg icon="duel" class="icon icon-duel">
	    	<use href="#icon-duel">
	    </svg>
	    <div class="collapse navbar-collapse" id="navbarCollapse">
	      <ul class="navbar-nav ml-auto">
	        <li class="nav-item active">
	          <a class="nav-link" href="#">My Submissions <span class="sr-only">(current)</span></a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">My Rewards</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">My Profile</a>
	        </li>            
	      </ul>
	    </div>
	  </nav>
	</header>
	<main class="container">
		<section>
			<h1 class="mb-4">My submissions</h1>
		</section>
		<div class="row">
			<?php foreach (range(1, 12) as $product): ?>
			<div class="col-xs-4-5 col-sm-2-5 col-md-1-5 col-lg-1-5">
				<article>
					<img src="static/img/client-logo.jpg" alt="" class="logo img-fluid">
					<img src="static/img/client-image.png" alt="" class="bg img-fluid">
					<h2>Cineworld</h2>
					<p class="testimonial">Testimonial goes here! Testimonial goes here! Testimonial goes here ... <span class="testimonial-by">Maria F</span></p>
					<p class="testimonial-date">
						22/07/2018
					</p>
				</article>
			</div>
			<?php endforeach; ?>
		</div>
	</main>
	<footer class="footer bg-dark">
	  <div class="left-items">
	  	<svg icon="duel" class="icon icon-duel-small">
	    	<use href="#icon-duel">
	    </svg>
	    <span class="copyright">Copyright © 2018. All rights reserved by Duel.</span>
	  </div>
	  <div class="right-items">
	    <a class="footer-link" href="#">Privacy Policy</a>
	    <a class="footer-link" href="#">Terms & Conditions</a>
	  </div>

	</footer>

</body>
</html>