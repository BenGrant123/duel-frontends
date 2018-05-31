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

  <?php include 'includes/login-header.php';?>
	<main class="container">
		<!--<div class="toolbar">
			<section>
				<h1>My submissions</h1>
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
			
		</div>-->
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 login-widget">
				<img src="static/img/client-logo.jpg" class="icon-brand">
				<div class="inner">
					
					<div class="widget-header">
						<h2>Login</h2>
					</div>
					<div class="widget-main">
						<form>
						  <div class="form-group">
						    <label for="userEmail">Email:</label>
						    <input type="text" class="form-control" id="userEmail" aria-describedby="userEmail">
						  </div>
						  <div class="form-group">
						    <label for="userPassword">Password:</label>
						    <input type="text" class="form-control" id="userPassword" aria-describedby="userPassword">
						  </div>
						  <button type="button" class="btn btn-primary">Login</button>
						  <small id="loginHelp" class="form-text">Forgot your password or Activate your account.</small>
						</form>
					</div>
			          
				<div>
			</div>
		</div><!-- /row -->
	</main>
	<?php include 'includes/brand-footer.php';?>

</body>
</html>