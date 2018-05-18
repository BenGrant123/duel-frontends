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
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      
	  <svg icon="duel" class="icon icon-duel">
	    	<use href="#icon-duel">
	  </svg>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    
	    
	    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">My Submissions<span class="sr-only">(current)</span></a>
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
			
			<div class="col-xs-12 col-sm-6 col-md-4 submission-widget">
				<div class="inner">
					<img src="static/img/client-logo.jpg" alt="" class="logo img-fluid">
					<img src="static/img/client-image.png" alt="" class="bg img-fluid">
					
					<!--<svg icon="three-dots">
				    	<use href="#icon-three-dots">
				    </svg>-->
					<h2>Cineworld</h2>
					<div class="toolbar">
						<p class="share">share</p>
						<img src="static/img/three-dots.svg" alt="" class="three-dots img-fluid">
					</div>
					<p class="testimonial-date">
						22/07/2018
					</p>
					<p class="testimonial">Testimonial goes here! Testimonial goes here! Testimonial goes here <span class="testimonial-more">read more</span><span class="testimonial-by">Maria F</span></p>
					
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 submission-widget">
				<div class="inner">
					<div class="widget-header">
						<h2>Earn More</h2>
					</div>
					<p class="testimonial">Testimonial goes here! Testimonial goes here! Testimonial goes here ... <span class="testimonial-by">Maria F</span></p>
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 submission-widget">
				<div class="inner">
					<div class="widget-header">
						<h2>My Rewards</h2>
					</div>
					<p class="testimonial">Testimonial goes here! Testimonial goes here! Testimonial goes here ... <span class="testimonial-by">Maria F</span></p>
					
				<div>
			</div>
			
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
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
	</footer>

</body>
</html>