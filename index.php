<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Bienvenido a MainEvent!</title>

	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png"/>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">


	<link rel="stylesheet" href="css/styles/css/mainStyles.min.css">
	<link href="images/bootstrap-glyphicons-master/css/bootstrap.icon-large.min.css" rel="stylesheet">
	
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	 <link rel="stylesheet" href="css/animate.css" type="text/css">
	
</head>
<body>




  <?php include'inc/upSection.php'; ?>

	<?php include'inc/navSection.php'; ?>
	<?php include'inc/sliderSection.php'; ?>
	<?php include'inc/optionsSection.php'; ?>
	<?php include'inc/reelSection.php'; ?>
	<?php include'inc/principalSection.php'; ?>
	<?php include'inc/trustSection.php'; ?>
	<?php include'inc/contactUsSection.php'; ?>
	<?php include'inc/upSection.php'; ?>
	<?php include'inc/footerSection.php'; ?>


	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$(document).ready(function(){
						$('a[href^="#"]').on('click',function (e) {
				   		 e.preventDefault();

				    var target = this.hash;
				    var $target = $(target);

				    $('html, body').stop().animate({
				        'scrollTop': $target.offset().top
				    }, 900, 'swing', function () {
				        window.location.hash = target;
				    });
				});
			});
	</script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>