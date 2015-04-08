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
        <form class="caregiver" method="post" action="http://essentialcare.oxzen.com/caregiver-application/remote">
            <fieldset class="table">
                <legend>Applicant</legend>
                <dl>
                    <dt><label for="">First Name</label></dt>
                    <dd><input type="text" name="first_name" /></dd>
                </dl>
                <dl>
                    <dt><label for="">Last Name</label></dt>
                    <dd><input type="text" name="last_name" /></dd>
                </dl>
                <dl>
                    <dt><label for="">Address</label></dt>
                    <dd><input type="text" name="address" /></dd>
                </dl>
                <dl>
                    <dt><label for="">City</label></dt>
                    <dd><input type="text" name="city" /></dd>
                </dl>
                <dl>
                    <dt><label for="">State</label></dt>
                    <dd>
                        <select name="state">
                            <option></option>
                            <option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dt><label for="">Zip Code</label></dt>
                    <dd><input type="tel" name="zip_code" /></dd>
                </dl>
                <dl>
                    <dt><label for="">Phone</label></dt>
                    <dd><input type="tel" name="phone" /></dd>
                </dl>
                <dl>
                    <dt><label for="">Email</label></dt>
                    <dd><input type="text" name="email" /></dd>
                </dl>
                <dl>
                    <dt><label for="">Social Security Number</label></dt>
                    <dd><input type="tel" name="ssn" /></dd>
                </dl>
                <dl>
                    <dt><label for="">Driver&rsquo;s License Number</label></dt>
                    <dd><input type="text" name="drivers_license" /></dd>
                </dl>
                <dl>
                    <dt><label for="">Date of Birth</label></dt>
                    <dd><input type="text" class="datepicker" name="dob" jq-datepicker /></dd>
                </dl>
            </fieldset>
            <fieldset class="table">
                <legend>Availability</legend>
                <dl>
                    <dt><label for="">Start Date</label></dt>
                    <dd><input type="text" class="datepicker" name="work_start_date" jq-datepicker /></dd>
                    <dd class="options-horizontal">
                        <label class="option"><input type="radio" name="work_availability" value="Full-time" /> Full-time</label>
                        <label class="option"><input type="radio" name="work_availability" value="Part-time" /> Part-time</label>
                    </dd>
                </dl>
                <div class="instructions">
                    <p>What days and hours are you available to work?</p>
                </div>
                <dl>
                    <dd class="options-vertical">
                        <label class="option"><input type="checkbox" name="work_schedule_monday" value="1" /> Monday</label>
                    </dd>
                    <dd>
                        <select class="pw" name="work_schedule_monday_start">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                        to
                        <select class="pw" name="work_schedule_monday_end">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                    </dd>
                    <!--
                    <dd>
                        <a class="btn sm-btn">Add Time</a>
                    </dd>
                    -->
                </dl>
                <dl>
                    <dd class="options-vertical">
                        <label class="option"><input type="checkbox" name="work_schedule_tuesday" value="1" /> Tuesday</label>
                    </dd>
                    <dd>
                        <select class="pw" name="work_schedule_tuesday_start">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                        to
                        <select class="pw" name="work_schedule_tuesday_end">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dd class="options-vertical">
                        <label class="option"><input type="checkbox" name="work_schedule_wednesday" value="1" /> Wednesday</label>
                    </dd>
                    <dd>
                        <select class="pw" name="work_schedule_wednesday_start">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                        to
                        <select class="pw" name="work_schedule_wednesday_end">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dd class="options-vertical">
                        <label class="option"><input type="checkbox" name="work_schedule_thursday" value="1" /> Thursday</label>
                    </dd>
                    <dd>
                        <select class="pw" name="work_schedule_thursday_start">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                        to
                        <select class="pw" name="work_schedule_thursday_end">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dd class="options-vertical">
                        <label class="option"><input type="checkbox" name="work_schedule_friday" value="1" /> Friday</label>
                    </dd>
                    <dd>
                        <select class="pw" name="work_schedule_friday_start">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                        to
                        <select class="pw" name="work_schedule_friday_end">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dd class="options-vertical">
                        <label class="option"><input type="checkbox" name="work_schedule_saturday" value="1" /> Saturday</label>
                    </dd>
                    <dd>
                        <select class="pw" name="work_schedule_saturday_start">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                        to
                        <select class="pw" name="work_schedule_saturday_end">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dd class="options-vertical">
                        <label class="option"><input type="checkbox" name="work_schedule_sunday" value="1" /> Sunday</label>
                    </dd>
                    <dd>
                        <select class="pw" name="work_schedule_sunday_start">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                        to
                        <select class="pw" name="work_schedule_sunday_end">
                            <option value="12:00am">12:00am</option><option value="12:30am">12:30am</option><option value="01:00am">01:00am</option><option value="01:30am">01:30am</option><option value="02:00am">02:00am</option><option value="02:30am">02:30am</option><option value="03:00am">03:00am</option><option value="03:30am">03:30am</option><option value="04:00am">04:00am</option><option value="04:30am">04:30am</option><option value="05:00am">05:00am</option><option value="05:30am">05:30am</option><option value="06:00am">06:00am</option><option value="06:30am">06:30am</option><option value="07:00am">07:00am</option><option value="07:30am">07:30am</option><option value="08:00am">08:00am</option><option value="08:30am">08:30am</option><option value="09:00am">09:00am</option><option value="09:30am">09:30am</option><option value="10:00am">10:00am</option><option value="10:30am">10:30am</option><option value="11:00am">11:00am</option><option value="11:30am">11:30am</option><option value="12:00pm">12:00pm</option><option value="12:30pm">12:30pm</option><option value="01:00pm">01:00pm</option><option value="01:30pm">01:30pm</option><option value="02:00pm">02:00pm</option><option value="02:30pm">02:30pm</option><option value="03:00pm">03:00pm</option><option value="03:30pm">03:30pm</option><option value="04:00pm">04:00pm</option><option value="04:30pm">04:30pm</option><option value="05:00pm">05:00pm</option><option value="05:30pm">05:30pm</option><option value="06:00pm">06:00pm</option><option value="06:30pm">06:30pm</option><option value="07:00pm">07:00pm</option><option value="07:30pm">07:30pm</option><option value="08:00pm">08:00pm</option><option value="08:30pm">08:30pm</option><option value="09:00pm">09:00pm</option><option value="09:30pm">09:30pm</option><option value="10:00pm">10:00pm</option><option value="10:30pm">10:30pm</option><option value="11:00pm">11:00pm</option><option value="11:30pm">11:30pm</option>
                        </select>
                    </dd>
                </dl>
            </fieldset>
            <fieldset class="table">
                <legend>Experience</legend>
                <dl>
                    <dt><label for="">How long have you worked professionally as a Care-Provider?</label></dt>
                    <dd>
                        <select name="work_experience_length">
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
                            <label class="option" for="1"><input type="checkbox" name="work_experience[12]" value="12" /> Another Task</label>
                            <label class="option"><input type="checkbox" name="work_experience[16]" value="116" /> Appointments</label>
                            <label class="option"><input type="checkbox" name="work_experience[18]" value="18" /> Bathing</label>
                            <label class="option"><input type="checkbox" name="work_experience[31]" value="31" /> Bowel Care</label>
                            <label class="option"><input type="checkbox" name="work_experience[28]" value="28" /> Brief Care</label>
                            <label class="option"><input type="checkbox" name="work_experience[25]" value="25" /> Companionship</label>
                            <label class="option"><input type="checkbox" name="work_experience[22]" value="22" /> Errands</label>
                            <label class="option"><input type="checkbox" name="work_experience[23]" value="23" /> Excercises</label>
                        </div>
                        <div class="col-sm-4 col-xs-12 options-vertical">
                            <label class="option"><input type="checkbox" name="work_experience[15]" value="15" /> Gardening</label>
                            <label class="option"><input type="checkbox" name="work_experience[21]" value="21" /> Get ready for bed</label>
                            <label class="option"><input type="checkbox" name="work_experience[19]" value="19" /> Grooming</label>
                            <label class="option"><input type="checkbox" name="work_experience[27]" value="27" /> Incontinent Care</label>
                            <label class="option"><input type="checkbox" name="work_experience[30]" value="30" /> Laundry</label>
                            <label class="option"><input type="checkbox" name="work_experience[29]" value="29" /> Light Housekeeping</label>
                            <label class="option"><input type="checkbox" name="work_experience[17]" value="17" /> Meal Planning</label>
                            <label class="option"><input type="checkbox" name="work_experience[32]" value="32" /> Meal Prep</label>
                        </div>
                        <div class="col-sm-4 col-xs-12 options-vertical">
                            <label class="option"><input type="checkbox" name="work_experience[26]" value="26" /> Medication reminders</label>
                            <label class="option"><input type="checkbox" name="work_experience[11]" value="11" /> New Task</label>
                            <label class="option"><input type="checkbox" name="work_experience[20]" value="20" /> Shaving</label>
                            <label class="option"><input type="checkbox" name="work_experience[14]" value="14" /> Test</label>
                            <label class="option"><input type="checkbox" name="work_experience[33]" value="33" /> Transfer assistance</label>
                            <label class="option"><input type="checkbox" name="work_experience[24]" value="24" /> Transportation</label>
                            <label class="option"><input type="checkbox" name="work_experience[13]" value="13" /> Woot Woot</label>
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
                                    <label class="option" for=""><input type="checkbox" name="certifications[3]" value="3" /> Caregiver</label>
                                    <label class="option" for=""><input type="checkbox" name="certifications[2]" value="2" /> <abbr>CNA</abbr></label>
                                    <label class="option" for=""><input type="checkbox" name="certifications[7]" value="7" /> <abbr>RNA</abbr></label>
                                    <label class="option" for=""><input type="checkbox"name="certifications[6]" value="6" /> Nurse</label>
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
                                    <label class="option" for=""><input type="checkbox" name="languages_spoken[Portuguese]" value="Portuguese" /> Portuguese</label>
                                    <label class="option" for=""><input type="checkbox" name="languages_spoken[Russian]" value="Russian" /> Russian</label>
                                    <label class="option" for=""><input type="checkbox" name="languages_spoken[Spanish]" value="Spanish" /> Spanish</label>
                                </div>
                            </div>
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt><label for="">Other</label></dt>
                    <dd>
                        <textarea class="smart-width" name="languages_other"></textarea>
                    </dd>
                </dl>
            </fieldset>
            <fieldset>
                <dl>
                    <dt><label for="">List any physical limitations you may have</label></dt>
                    <dd>
                        <textarea class="smart-width" name="physical_limits"></textarea>
                    </dd>
                </dl>
            </fieldset>
            <fieldset class="table">
                <dl>
                    <dt><label for="">Do you</label></dt>
                    <dd class="options-vertical">
                        <label for="24" class="option"><input type="checkbox" id="24" name="legal_history[have a valid Driver’s License?]" value="have a valid Driver’s License?" /> have a valid Driver&rsquo;s License?</label>
                        <label for="25" class="option"><input type="checkbox" id="25" name="legal_history[have a car to use at work?]" value="have a car to use at work?" /> have a car to use at work?</label>
                        <label for="26" class="option"><input type="checkbox" id="26" name="legal_history[smoke?]" value="smoke?" /> smoke?</label>
                        <label for="27" class="option"><input type="checkbox" id="27" name="legal_history[use drugs?]" value="use drugs?" /> use drugs?</label>
                        <label for="28" class="option"><input type="checkbox" id="28" name="legal_history[drink alcohol?]" value="drink alcohol?" /> drink alcohol?</label>
                    </dd>
                </dl>
            </fieldset>
            <fieldset>
                <dl>
                    <dt><label for="">Have you ever been convicted of a felony or misdemeanor other than traffic violations? If so please explain.</label></dt>
                    <dd>
                        <textarea class="smart-width" name="convications"></textarea>
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
                    <dd><input type="text" name="reference_name1" /></dd>
                    <dt><label for="">Phone</label>
                    <dd><input type="tel" name="reference_phone1" /></dd>
                </dl>
                <dl>
                    <dt><label for="">Name</label>
                    <dd><input type="text" name="reference_name2" /></dd>
                    <dt><label for="">Phone</label>
                    <dd><input type="tel" name="reference_phone2"/></dd>
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
