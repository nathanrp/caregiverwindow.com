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
			<h3>Our skilled caregivers assist thousands of seniors everyday throughout North America. To be considered for a caregiver position with our rapidly growing, progressive company, please ensure you satisfy the minimum qualification and submit the form below. If you appear to meet these requirements, one of our care managers will contact you to discuss the next step in our hiring process.</h3>
		</div>
		<form class="caregiver">
			<fieldset class="table">
				<legend>Applicant</legend>
				<dl>
					<dt><label for="">First Name</label></dt>
					<dd><input type="text" /></dd>
				</dl>
				<dl>
					<dt><label for="">Last Name</label></dt>
					<dd><input type="text" /></dd>
				</dl>
				<dl>
					<dt><label for="">Address</label></dt>
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
				<dl>
					<dt><label for="">Phone</label></dt>
					<dd><input type="tel" /></dd>
				</dl>
				<dl>
					<dt><label for="">Email</label></dt>
					<dd><input type="text" /></dd>
				</dl>
				<dl>
					<dt><label for="">Social Security Number</label></dt>
					<dd><input type="tel" /></dd>
				</dl>
				<dl>
					<dt><label for="">Driver&rsquo;s License Number</label></dt>
					<dd><input type="text" /></dd>
				</dl>
				<dl>
					<dt><label for="">Date of Birth</label></dt>
					<dd><input type="date" class="datepicker" jq-datepicker /></dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>Availability</legend>
				<dl>
					<dt><label for="">Start Date</label></dt>
					<dd><input type="date" class="datepicker" jq-datepicker /></dd>
					<dd class="options-horizontal">
						<input type="radio" />
						<label class="option">Full-time</label>
						<input type="radio" />
						<label class="option">Part-time</label>
					</dd>
				</dl>
				<div class="instructions">
					<p>What days and hours are you available to work?</p>
				</div>
				<dl>
					<dd class="options-vertical">
						<input type="checkbox" />
						<label class="option">Monday</label>
					</dd>
					<dd>
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
						to
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
					</dd>
					<dd>
						<a class="btn sm-btn">Add Time</a>
					</dd>
				</dl>
				<dl>
					<dd class="options-vertical">
						<input type="checkbox" />
						<label class="option">Tuesday</label>
					</dd>
					<dd>
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
						to
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dd class="options-vertical">
						<input type="checkbox" />
						<label class="option">Wednesday</label>
					</dd>
					<dd>
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
						to
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dd class="options-vertical">
						<input type="checkbox" />
						<label class="option">Thursday</label>
					</dd>
					<dd>
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
						to
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dd class="options-vertical">
						<input type="checkbox" />
						<label class="option">Friday</label>
					</dd>
					<dd>
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
						to
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dd class="options-vertical">
						<input type="checkbox" />
						<label class="option">Saturday</label>
					</dd>
					<dd>
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
						to
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dd class="options-vertical">
						<input type="checkbox" />
						<label class="option">Sunday</label>
					</dd>
					<dd>
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
						to
						<select class="pw">
							<option>12:00am</option>
							<option>1:00am</option>
						</select>
					</dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>Experience</legend>
				<dl>
					<dt><label for="">How long have you worked professionally as a Care-Provider?</label></dt>
					<dd>
						<select>
							<option></option>
							<option>Less than 1 year</option>
							<option>1 year</option>
							<option>2 years</option>
							<option>3 years</option>
							<option>4 years</option>
							<option>5 years</option>
							<option>6 years</option>
							<option>7 years</option>
							<option>8 years</option>
							<option>9 years</option>
							<option>More than 10 years</option>
						</select>
					</dd>
				</dl>
				<div class="instructions">
					<p>Check the conditions and duties that you have encountered or performed.</p>
				</div>
				<div class="container-fluid wrap-edit">
					<div class="row">
						<div class="col-sm-4 col-xs-12 options-vertical">
							<input type="checkbox" id="1" />
							<label class="option" for="1">Bathing/Showering</label>
							<input type="checkbox" id="2" />
							<label class="option" for="2">Dressing</label>
							<input type="checkbox" id="3" />
							<label class="option" for="3">Alz/Dementia</label>
							<input type="checkbox" id="4" />
							<label class="option" for="4">Transferring</label>
							<input type="checkbox" id="5" />
							<label class="option" for="5">Feeding</label>
							<input type="checkbox" id="6" />
							<label class="option" for="6">Parkinson&rsquo;s</label>
							<input type="checkbox" id="7" />
							<label class="option" for="7">Toileting</label>
							<input type="checkbox" id="8" />
							<label class="option" for="8">Ambulating</label>
						</div>
						<div class="col-sm-4 col-xs-12 options-vertical">
							<input type="checkbox" id="9" />
							<label class="option" for="9">Stroke</label>
							<input type="checkbox" id="10" />
							<label class="option" for="10">O2 Machines</label>
							<input type="checkbox" id="11" />
							<label class="option" for="11">Feeding Tubes</label>
							<input type="checkbox" id="12" />
							<label class="option" for="12">Heart Conditions</label>
							<input type="checkbox" id="13" />
							<label class="option" for="13">Shaving</label>
							<input type="checkbox" id="14" />
							<label class="option" for="14">Oral Hygiene</label>
							<input type="checkbox" id="15" />
							<label class="option" for="15">Cancers</label>
							<input type="checkbox" id="16" />
							<label class="option" for="16">Turn in Bed</label>
						</div>
						<div class="col-sm-4 col-xs-12 options-vertical">
							<input type="checkbox" id="17" />
							<label class="option" for="17">Blood Pressure</label>
							<input type="checkbox" id="18" />
							<label class="option" for="18">Hospice</label>
							<input type="checkbox" id="19" />
							<label class="option" for="19">Vacuuming</label>
							<input type="checkbox" id="20" />
							<label class="option" for="20">Dusting</label>
							<input type="checkbox" id="21" />
							<label class="option" for="21">Physical Therapy</label>
							<input type="checkbox" id="22" />
							<label class="option" for="22">Laundry</label>
							<input type="checkbox" id="23" />
							<label class="option" for="23">Changing Linens</label>
						</div>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Certifications</legend>
				<dl>
					<dt><label for="">What certifications do you have? <small><abbr>CNA</abbr>, Caregiver, Etc.</small></label></dt>
					<dd>
						<div class="container-fluid padding-bottom-sm wrap-edit">
							<div class="row">
								<div class="col-sm-4 col-xs-12 options-vertical">
									<input type="checkbox" />
									<label class="option" for=""><abbr>RNA</abbr></label>
								</div>
								<div class="col-sm-4 col-xs-12 options-vertical">
									<input type="checkbox" />
									<label class="option" for=""><abbr>CNA</abbr></label>
								</div>
								<div class="col-sm-4 col-xs-12 options-vertical">
									<input type="checkbox" />
									<label class="option" for="">Caregiver</label>
								</div>
							</div>
						</div>
					</dd>
				</dl>
				<dl>
					<dt><label for="">Other</label></dt>
					<dd>
						<textarea class="smart-width"></textarea>
					</dd>
				</dl>
			</fieldset>
			<fieldset>
				<legend>Languages</legend>
				<dl>
					<dt><label for="">Do you speak any language other than English?</label></dt>
					<dd>
						<div class="container-fluid padding-bottom-sm wrap-edit">
							<div class="row">
								<div class="col-sm-4 col-xs-12 options-vertical">
									<input type="checkbox" />
									<label class="option" for="">Portuguese</label>
								</div>
								<div class="col-sm-4 col-xs-12 options-vertical">
									<input type="checkbox" />
									<label class="option" for="">Russian</label>
								</div>
								<div class="col-sm-4 col-xs-12 options-vertical">
									<input type="checkbox" />
									<label class="option" for="">Spanish</label>
								</div>
							</div>
						</div>
					</dd>
				</dl>
				<dl>
					<dt><label for="">Other</label></dt>
					<dd>
						<textarea class="smart-width"></textarea>
					</dd>
				</dl>
			</fieldset>
			<fieldset>
				<dl>
					<dt><label for="">List any physical limitations you may have</label></dt>
					<dd>
						<textarea class="smart-width"></textarea>
					</dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<dl>
					<dt><label for="">Do you</label></dt>
					<dd class="options-vertical">
						<input type="checkbox" id="24" />
						<label for="24" class="option">have a valid Driver&rsquo;s License?</label>
						<input type="checkbox" id="25" />
						<label for="25" class="option">have a car to use at work?</label>
						<input type="checkbox" id="26" />
						<label for="26" class="option">smoke?</label>
						<input type="checkbox" id="27" />
						<label for="27" class="option">use drugs?</label>
						<input type="checkbox" id="28" />
						<label for="28" class="option">drink alcohol?</label>
					</dd>
				</dl>
			</fieldset>
			<fieldset>
				<dl>
					<dt><label for="">Have you ever been convicted of a felony or misdemeanor other than traffic violations? If so please explain.</label></dt>
					<dd>
						<textarea class="smart-width"></textarea>
					</dd>
				</dl>
			</fieldset>
			<fieldset class="table">
				<legend>References</legend>
				<div class="instructions">
					<p>List 2 references who we can verify your work experience.</p>
				</div>
				<dl>
					<dt><label for="">Name</label>
					<dd><input type="text" /></dd>
					<dt><label for="">Phone</label>
					<dd><input type="tel" /></dd>
				</dl>
				<dl>
					<dt><label for="">Name</label>
					<dd><input type="text" /></dd>
					<dt><label for="">Phone</label>
					<dd><input type="tel" /></dd>
				</dl>
			</fieldset>
			<div class="btns">
				<button>Send Application</button>
			</div>
		</form>
	</div>
</div>

<?php include ($path.'inc/footer.php') ?>

<?php include_once("inc/analyticstracking.php") ?>
</body>
</html>
