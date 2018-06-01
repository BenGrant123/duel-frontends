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

	<main class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 login-widget">
				<svg width="80" height="80" icon="duel" class="icon icon-duel">
				    <use xlink:href="#icon-duel"></use>
				</svg>
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
						  <!--<div class="loginHelp">
						  	<a data-toggle="modal" data-target="#modal1" href="#modal1">Forgot your password or Activate your account.</a>
						  </div>-->
						  <small class="loginHelp form-text">
						  	<a data-toggle="modal" data-target="#modal1" href="#modal1">Forgot your password or Activate your account.</a>
						  </small>
						</form>
					</div>
			          
				<div>
			</div>
		</div><!-- /row -->
	</main>
	<?php include 'includes/modals/login.php';?>
	<?php include 'includes/footer.php';?>

</body>
</html>