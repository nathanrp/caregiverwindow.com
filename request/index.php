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
		<form class="request" method="post" action="http://essentialcare.oxzen.com/client-request-for-care/remote">
			<fieldset class="table">
				<legend>Client</legend>
				<dl>
					<dt><label>First Name</label></dt>
					<dd>
						<input type="text" name="first_name" />
					</dd>
				</dl>
				<dl>
					<dt><label>Last Name</label></dt>
					<dd><input type="text" name="last_name" /></dd>
				</dl>
				<dl>
					<dt><label>Phone</label></dt>
					<dd><input type="tel" name="phone" /></dd>
				</dl>
				<dl>
					<dt><label>Email</label></dt>
					<dd><input type="text" name="email" /></dd>
				</dl>
				<dl>
					<dt><label>Contact Preference</label></dt>
					<dd>
						<select name="contact_preference">
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
					<dt><label>How did you hear about Essential Care?</label></dt>
					<dd><input type="text" name="hear_about_care" /></dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>Care</legend>
				<dl>
					<dt><label>Who will be needing services?</label></dt>
					<dd>
						<select name="client_relation">
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
					<dt><label>Service Address</label></dt>
					<dd><input type="text" name="address" /></dd>
				</dl>
				<dl>
					<dt><label>City</label></dt>
					<dd><input type="text" name="city" /></dd>
				</dl>
				<dl>
					<dt><label>State</label></dt>
					<dd>
						<select name="state">
							<option></option>
							<option value="UT">Utah</option>
							<option>All States</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt><label>Zip Code</label></dt>
					<dd><input type="tel" name="zip_code" /></dd>
				</dl>
			</fieldset>
			<fieldset>
				<legend>Schedule</legend>
				<dl>
					<dt><label>What is your desired schedule for your EssentialCare support Staff?</label></dt>
					<dd>
						<textarea class="smart-width" name="desired_schedule"></textarea>
					</dd>
				</dl>
				<dl>
					<dt><label>When would you like to start services?</label></dt>
					<dd>
						<select name="service_start_preference">
							<option></option>
							<option value="Immediately">Immediately</option>
							<option value="When Discharged from Hospital or Nursing Home">When Discharged from Hospital or Nursing Home</option>
							<option value="Within one month">Within one month</option>
							<option value="Temporary Respite Care">Temporary Respite Care</option>
							<option value="Researching for future needs">Researching for future needs</option>
						</select>
					</dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>Current Situation</legend>
				<dl>
					<dt><label>What is the situation of the care recipient?</label></dt>
					<dd class="options-vertical"> 
						<label class="option"><input type="checkbox" name="current_situation[Lives in Own Home]" value="Lives in Own Home" /> Lives in Own Home</label>
						<label class="option"><input type="checkbox" name="current_situation[Lives in Assisted Living Community]" value="Lives in Assisted Living Community" /> Lives in Assisted Living Community</label>
						<label class="option"><input type="checkbox" name="current_situation[Lives in Nursing Home]" value="Lives in Nursing Home" /> Lives in Nursing Home</label>
						<label class="option"><input type="checkbox" name="current_situation[Lives with a Family Member]" value="Lives with a Family Member" /> Lives with a Family Member</label>
						<label class="option"><input type="checkbox" name="current_situation[Lives in a Senior Apartment]" value="Lives in a Senior Apartment" /> Lives in a Senior Apartment</label>
						<label class="option"><input type="checkbox" name="current_situation[Currently Hospitalized]" value="Currently Hospitalized" /> Currently Hospitalized</label>
					</dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>Our Services</legend>
				<dl class="wrap-edit">
					<dt><label>How can we help?</label></dt>
					<dd class="options-vertical"> 
						<label class="option"><input type="checkbox" name="services_needed[5]" value="5" /> Alzheimers</label>
						<label class="option"><input type="checkbox" name="services_needed[30]" value="30" /> Bathing</label>
						<label class="option"><input type="checkbox" name="services_needed[3]" value="3" /> Cancer</label>
						<label class="option"><input type="checkbox" name="services_needed[2]" value="2" /> Companionship</label>
						<label class="option"><input type="checkbox" name="services_needed[31]" value="31" /> Dressing</label>
						<label class="option"><input type="checkbox" name="services_needed[33]" value="33" /> Escort to Appointment</label>
						<label class="option"><input type="checkbox" name="services_needed[39]" value="39" /> Hair Care</label>
						<label class="option"><input type="checkbox" name="services_needed[11]" value="11" /> Heart Conditions</label>
						<label class="option"><input type="checkbox" name="services_needed[1]" value="1" /> Home Care Service</label>
						<label class="option"><input type="checkbox" name="services_needed[8]" value="8" /> Hospice Care</label>
                        <label class="option"><input type="checkbox" name="services_needed[32]" value="32" /> Meal Preparation</label>
                        <label class="option"><input type="checkbox" name="services_needed[35]" value="35" /> Medication Reminders</label>
                        <label class="option"><input type="checkbox" name="services_needed[7]" value="7" /> Orthopedic Care</label>
                        <label class="option"><input type="checkbox" name="services_needed[6]" value="6" />Parkinsons</label>
                        <label class="option"><input type="checkbox" name="services_needed[4]" value="4" /> Stroke</label>
                        <label class="option"><input type="checkbox" name="services_needed[38]" value="38" /> TBI</label>
                        <label class="option"><input type="checkbox" name="services_needed[34]" value="34" /> Visit Friends</label>
					</dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>Payment Information</legend>
				<dl>
					<dt><label>How will you pay for the service?</label></dt>
					<dd class="options-vertical">
						<label class="option"><input type="checkbox" name="payment_type[Private Pay]" value="Private Pay" /> Private Pay</label>
						<label class="option"><input type="checkbox" name="payment_type[Long-term Care Insurance]" value="Long-term Care Insurance" /> Long-term Care Insurance</label>
						<label class="option"><input type="checkbox" name="payment_type[Worker’s Compensation Insurance ]" value="Worker’s Compensation Insurance " /> Worker&rsquo;s Compensation Insurance</label>
					</dd>
				</dl>
			</fieldset>
			<fieldset>
				<legend>Additional</legend>
				<dl>
					<dt><label>Notes</label></dt>
					<dd><textarea class="smart-width" placeholder="" name="notes"></textarea></dd>
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
