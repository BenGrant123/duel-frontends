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

<?php include 'includes/brand-header.php';?>
	
	<main class="container">
		<div class="toolbar">
			<section>
				<h1 class="mb-4">My submissions</h1>
			</section>
		</div>
		<div class="row">
			
			<div class="col-xs-12 col-sm-6 col-md-4 submission-widget">
				<div class="inner">
					<img src="static/img/client-logo.jpg" alt="" class="logo img-fluid">
					<img src="static/img/client-image.png" alt="" class="bg img-fluid">
					
					<h2>Cineworld</h2>
					<div class="toolbar">
						<p class="share">share</p>
						<svg data-toggle="collapse" data-target="#modalsMenuToggler" icon="duel" class="icon icon-three-dots collapse">
					    	<use href="#icon-three-dots"></use>
					    </svg>
						<div class="collapse modals-menu-collapse" id="modalsMenuToggler">
						    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						      <li data-toggle="collapse" data-target=".modals-menu-collapse" class="nav-item active">
						        <a data-toggle="modal" data-target="#modal1" class="nav-link" href="#">Edit<span class="sr-only">(current)</span></a>
						      </li>
						      <li data-toggle="collapse" data-target=".modals-menu-collapse" class="nav-item">
						        <a data-toggle="modal" data-target="#modal2" class="nav-link" href="#">Permissions</a>
						      </li>
						      <li data-toggle="collapse" data-target=".modals-menu-collapse" class="nav-item">
						        <a data-toggle="modal" data-target="#modal3" class="nav-link" href="#">Delete</a>
						      </li>
						    </ul>
						  </div>
					</div>
					<div class="testimonial">
						<span class="testimonial-date">
							22/07/2018
						</span>
						<p class="testimonial-text">
							Testimonial goes here! Testimonial goes here! Testimonial goes here
							<span class="testimonial-more collapse">Some more text in the testimonial</span>
						</p>
						
						<a data-toggle="collapse" data-target=".testimonial-more,.testimonial-readmore,.testimonial-readless" class="collapse show testimonial-readmore" href="#" role="button" aria-label="Toggle expanded testimonial">read more</a>
						<a data-toggle="collapse" data-target=".testimonial-more,.testimonial-readmore,.testimonial-readless" class="collapse testimonial-readless" href="#" role="button" aria-label="Toggle expanded testimonial">read less</a>
						<span class="testimonial-by">
							Maria F
						</span>
					</div>
					<div class="widget-product">
						<div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="static/img/product.jpg" alt="First slide">
						      <div class="text">
								<h3>Stay Matte Liquid Lip Colour | Fatal Kiss</h3>
								<p class="description">A new liquid lipstick with high-intensity colour,
		velvety matte finish, and a long-lasting...</p>
								<p class="price">£5.99</p>
							 </div>
						    </div>
						    <div class="carousel-item">
						      <img src="static/img/product2.jpg" alt="Second slide">
						      <div class="text">
								<h3>Microphone | Fatal Kiss</h3>
								<p class="description">A new microphone with high-intensity colour,
		velvety matte finish, and a long-lasting...</p>
								<p class="price">£7.99</p>
							 </div>
						    </div>
						    <div class="carousel-item">
						      <img src="static/img/product3.jpg" alt="Third slide">
						      <div class="text">
								<h3>Golf Club | Fatal Kiss</h3>
								<p class="description">A new golf clubs with high-intensity colour,
		velvety matte finish, and a long-lasting...</p>
								<p class="price">£10.99</p>
							 </div>
						    </div>
						    <div class="carousel-item">
						      <img  src="static/img/product.jpg" alt="Fourth slide">
						      <div class="text">
								<h3>Stay Matte Liquid Lip Colour | Fatal Kiss</h3>
								<p class="description">A new liquid lipstick with high-intensity colour,
		velvety matte finish, and a long-lasting...</p>
								<p class="price">£5.99</p>
							 </div>
						    </div>
						    
						  </div>
						  <ol class="carousel-indicators">
				    		<li class="active">
				    			<a href="#productCarousel" role="button" data-slide-to="0"></a>
				    		</li>
				 			<li>
				 				<a href="#productCarousel" role="button" data-slide-to="1"></a>
				 			</li>
				 			<li>
				 				<a href="#productCarousel" role="button" data-slide-to="2"></a>
				 			</li>
				 			<li>
				 				<a href="#productCarousel" role="button" data-slide-to="3"></a>
				 			</li>
						  </ol>
						</div>
						
					</div>
					
					
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 submission-widget">
				<div class="inner">
					<div class="widget-header">
						<h2>Earn More</h2>
					</div>
					<div class="widget-main">
						<h3>To Do</h3>
						<form>
						  <div class="form-check">
						    <input type="checkbox" class="form-check-input" id="widget2Check1">
						    <label class="form-check-label" for="widget2Check1">Share your testimonial and <strong>get 100 loyalty points</strong></label>
						  </div>
						  <div class="form-check">
						    <input type="checkbox" class="form-check-input" id="widget2Check2">
						    <label class="form-check-label" for="widget2Check1">Refer your friends and <strong>get £20</strong></label>
						  </div>
						</form>
					</div>
										
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 submission-widget">
				<div class="inner">
					<div class="widget-header">
						<h2>My Rewards</h2>
					</div>
					<div class="widget-main">
						<div class="reward">
							<h3>Discount Code</h3>
							<p class="reward-amount">GET30</p>
							<p>30% off your next purchase</p>
						</div>
						<div class="reward">
							<h3>Loyalty Points</h3>
							<p class="reward-amount">200</p>
						</div>
						<div class="reward">
							<h3>Another Reward</h3>
							<p class="reward-amount">Reward Amount</p>
							<p>Some information about the reward</p>
						</div>
					</div>
				<div>
			</div>
			
		</div>
	</main>
	<?php include 'includes/modals.php';?>
	<?php include 'includes/footer.php';?>

</body>
</html>