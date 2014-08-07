<?php

$path = '';

$page = '0';

$title = 'Caregiver Window';

?>

<!DOCTYPE html>
<html>
<head>
<?php include ($path.'inc/brains.php') ?>
</head>
<body>

<?php include ($path.'inc/header.php') ?>

<div class="home-hero">
	<img src="<?php echo $path;?>img/1.jpg" class="hero" alt="Banner" />
</div>

<div class="content">
	<section class="home-intro container">
		<h1>Caregiver Window is the most user friendly private duty software available today.</h1>
		<a class="btn">Try Caregiver Window Free for 30 Days</a>
	</section>
</div>

<?php include ($path.'inc/footer.php') ?>

<?php include_once("inc/analyticstracking.php") ?>
</body>
</html>
