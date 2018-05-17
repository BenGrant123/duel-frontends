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
      <a class="navbar-brand" href="#">
	    	<!--Hidden brand-->
	    	<img src="static/img/client-logo2.jpg" class="icon-brand">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <!--<a class="navbar-brand" href="#">
	    	<img src="static/img/client-logo2.jpg" class="icon-brand">
	    </a>-->
	    <div class="brand">
	    	<span class="brand-name">Cineworld</span>
	    	<span class="brand-url">www.cineworld.com</span>
	    </div>
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
	    <!--<form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>-->
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
			<!--<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <label class="input-group-text" for="inputGroupSelect01">Options</label>
			  </div>
			  <select class="custom-select" id="inputGroupSelect01">
			    <option selected>Choose...</option>
			    <option value="1">One</option>
			    <option value="2">Two</option>
			    <option value="3">Three</option>
			  </select>
			</div>
			<div class="input-group mb-3">
			  <select class="custom-select" id="inputGroupSelect02">
			    <option selected>Choose...</option>
			    <option value="1">One</option>
			    <option value="2">Two</option>
			    <option value="3">Three</option>
			  </select>
			  <div class="input-group-append">
			    <label class="input-group-text" for="inputGroupSelect02">Options</label>
			  </div>
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <button class="btn btn-outline-secondary" type="button">Button</button>
			  </div>
			  <select class="custom-select" id="inputGroupSelect03">
			    <option selected>Choose...</option>
			    <option value="1">One</option>
			    <option value="2">Two</option>
			    <option value="3">Three</option>
			  </select>
			</div>

			<div class="input-group">
			  <select class="custom-select" id="inputGroupSelect04">
			    <option selected>Choose...</option>
			    <option value="1">One</option>
			    <option value="2">Two</option>
			    <option value="3">Three</option>
			  </select>
			  <div class="input-group-append">
			    <button class="btn btn-outline-secondary" type="button">Button</button>
			  </div>
			</div>-->
		</div>
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
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    
	</footer>

</body>
</html>