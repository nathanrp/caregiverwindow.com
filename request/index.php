<?php

$path = '../';

$page = '2';

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
		<div class="feature">
			<h3>To learn more how we can help you or a loved one, request a free no obligation consultation.</h3>
		</div>
		<form class="request">
			<fieldset class="table">
				<legend>Client</legend>
				<dl>
					<dt><label for="">First Name</label></dt>
					<dd>
						<input type="text" />
					</dd>
				</dl>
				<dl>
					<dt><label for="">Last Name</label></dt>
					<dd><input type="text" /></dd>
				</dl>
				<dl>
					<dt><label for="">Phone</label></dt>
					<dd><input type="tel" /></dd>
				</dl>
				<dl>
					<dt><label for="">Email</label></dt>
					<dd><input type="text" /></dd>
				</dl>
				<dl>
					<dt><label for="">Contact Preference</label></dt>
					<dd>
						<select>
							<option></option>
							<option>Phone</option>
							<option>Email</option>
							<option>Both</option>
						</select>
					</dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<dl>
					<dt><label for="">How did you hear about Essential Care?</label></dt>
					<dd><input type="text" /></dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>Care</legend>
				<dl>
					<dt><label for="">Who will be needing services?</label></dt>
					<dd>
						<select>
							<option></option>
							<option>Father</option>
							<option>Father-in-law</option>
							<option>Friend</option>
							<option>Grandparent</option>
							<option>Mother</option>
							<option>Mother-in-law</option>
							<option>Other Relative</option>
							<option>Self</option>
							<option>Sibling</option>
							<option>Spouse</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt><label for="">Service Address</label></dt>
					<dd><input type="text" /></dd>
				</dl>
				<dl>
					<dt><label for="">City</label></dt>
					<dd><input type="text" /></dd>
				</dl>
				<dl>
					<dt><label for="">State</label></dt>
					<dd>
						<select>
							<option></option>
							<option>Utah</option>
							<option>All States</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt><label for="">Zip Code</label></dt>
					<dd><input type="tel" /></dd>
				</dl>
			</fieldset>
			<fieldset>
				<legend>Schedule</legend>
				<dl>
					<dt><label for="">What is your desired schedule for your EssentialCare support Staff?</label></dt>
					<dd>
						<textarea class="smart-width"></textarea>
					</dd>
				</dl>
				<dl>
					<dt><label for="">When would you like to start services?</label></dt>
					<dd>
						<select>
							<option></option>
							<option>Immediately</option>
							<option>When Discharged from Hospital or Nursing Home</option>
							<option>Within one month</option>
							<option>Temporary Respite Care</option>
							<option>Researching for future needs</option>
						</select>
					</dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>Current Situation</legend>
				<dl>
					<dt><label for="">What is the situation of the care recipient?</label></dt>
					<dd class="options-vertical"> 
						<input type="checkbox" id="1" />
						<label class="option" for="1">Lives in Own Home</label>
						<input type="checkbox" id="2" />
						<label class="option" for="2">Lives in Assisted Living Community</label>
						<input type="checkbox" id="3" />
						<label class="option" for="3">Lives in Nursing Home</label>
						<input type="checkbox" id="4" />
						<label class="option" for="4">Lives with a Family Member</label>
						<input type="checkbox" id="5" />
						<label class="option" for="5">Lives in a Senior Apartment</label>
						<input type="checkbox" id="6" />
						<label class="option" for="6">Currently Hospitalized</label>
					</dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>Our Services</legend>
				<dl class="wrap-edit">
					<dt><label for="">How can we help?</label></dt>
					<dd class="options-vertical"> 
						<input type="checkbox" id="9" />
						<label class="option" for="9">Home Care Services</label>
						<input type="checkbox" id="10" />
						<label class="option" for="10">Companionship</label>
						<input type="checkbox" id="11" />
						<label class="option" for="11">Cancer</label>
						<input type="checkbox" id="12" />
						<label class="option" for="12">Stroke</label>
						<input type="checkbox" id="13" />
						<label class="option" for="13">Alzheimers</label>
						<input type="checkbox" id="14" />
						<label class="option" for="14">Parkinsons</label>
						<input type="checkbox" id="15" />
						<label class="option" for="15">Orthopedic Care</label>
						<input type="checkbox" id="16" />
						<label class="option" for="16">Hospice Care</label>
						<input type="checkbox" id="7" />
						<label class="option" for="7">Sitter</label>
						<input type="checkbox" id="8" />
						<label class="option" for="8">Other</label>
					</dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>Payment Information</legend>
				<dl>
					<dt><label for="">How will you pay for the service?</label></dt>
					<dd class="options-vertical">
						<input type="checkbox" id="17" />
						<label class="option" for="17">Private Pay</label>
						<input type="checkbox" id="18" />
						<label class="option" for="18">Long-term Care Insurance</label>
						<input type="checkbox" id="19" />
						<label class="option" for="19">Worker&rsquo;s Compensation Insurance</label>
					</dd>
				</dl>
			</fieldset>
			<fieldset>
				<legend>Additional</legend>
				<dl>
					<dt><label for="">Notes</label></dt>
					<dd><textarea class="smart-width" placeholder=""></textarea></dd>
				</dl>
			</fieldset>
			<div class="btns">
				<button>Send Request</button>
			</div>
		</form>
	</div>
</div>

<?php include ($path.'inc/footer.php') ?>

<?php include_once("inc/analyticstracking.php") ?>
</body>
</html>
