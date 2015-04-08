<?php

$path = '../';

$page = '1';

$title = 'Caregiver Window';

?>

<!DOCTYPE html>
<html>
<head>
<?php include ($path.'inc/brains.php') ?>
</head>
<body>

<?php include ($path.'inc/header.php') ?>

<div class="content">
	<div class="container">
		<div class="pricing-feature">
			<h3>All packages include unlimited users, clients, and caregivers, per geography, franchise, etc.</h3>
		</div>
		<div class="pricing row">
			<div class="col-xs-6">
				<div class="term">
					<div class="primary">$40</div>
					<div class="secondary">Monthly</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="term">
					<div class="primary">$400</div>
					<div class="secondary">Annually</div>
				</div>
			</div>
		</div>
		<form class="signup">
			<fieldset>
				<dl>
					<dt><label for="">Full Name</label></dt>
					<dd><input type="text" class="fill-width" /></dd>
				</dl>
				<dl>
					<dt><label for="">Company</label></dt>
					<dd><input type="text" class="fill-width" /></dd>
				</dl>
				<dl>
					<dt><label for="">Email</label></dt>
					<dd><input type="email" class="fill-width" /></dd>
				</dl>
				<dl>
					<dt><label for="">Password</label></dt>
					<dd><input type="text" class="fill-width" /></dd>
				</dl>
				<div class="btns">
					<button>Start my 30 day free trial</button>
				</div>
			</fieldset>
		</form>
	</div>
</div>

<?php include ($path.'inc/footer.php') ?>

<?php include_once("inc/analyticstracking.php") ?>
</body>
</html>
