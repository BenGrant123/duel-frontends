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
				<h1 class="mb-4">My Profile</h1>
			</section>
		</div>
		<div class="row">
			
			<div class="col-xs-12 col-sm-6 col-md-4 settings-widget">
				<div class="inner">
					<div class="widget-header">
						<h2>Main Details</h2>
					</div>
					<!--<img src="static/img/client-logo.jpg" alt="" class="logo img-fluid">
					<img src="static/img/client-image.png" alt="" class="bg img-fluid">
					
					<h2>Cineworld</h2>-->
					
					<div class="toolbar">
						<svg class="default-profile">
					    	<use xlink:href="#icon-default-profile"></use>
					  	</svg>
						<p class="upload-profile">Upload a profile pic</p>
					</div>

					
					<div class="widget-main">
						<form>
						  <div class="form-group">
						    <label for="displayName">Display Name:</label>
						    <input type="password" class="form-control" id="displayName" aria-describedby="displayName">
						  </div>
						  <button type="button" class="btn btn-primary">Submit Changes</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 settings-widget">
				<div class="inner">
					<div class="widget-header">
						<h2>Update Password</h2>
					</div>
					<div class="widget-main">
						<form>
						  <div class="form-group">
						    <label for="currentPassword">Current Password:</label>
						    <input type="password" class="form-control" id="currentPassword" aria-describedby="currentPassword">
						  </div>
						  <div class="form-group">
						    <label for="newPassword">New Password:</label>
						    <input type="password" class="form-control" id="newPassword" aria-describedby="newPassword">
						  </div>
						  <div class="form-group">
						    <label for="newPasswordConf">Confirm New Password:</label>
						    <input type="password" class="form-control" id="newPasswordConf" aria-describedby="newPasswordConf">
						  </div>
						  <button type="button" class="btn btn-primary">Update Password</button>
						</form>
					</div>

										
				</div>
			</div>
			
			
		</div><!-- /row -->
	</main>
	<?php include 'includes/modals/submission-page.php';?>
	</div>
	<?php include 'includes/footer.php';?>

</body>
</html>