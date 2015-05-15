	<?php
	$title="Welcome to Travel Experts: Home";
	?>
	
	<?php
	include "header.php";
	?>


		<script>
		
			function validate(){
				var myform = document.getElementById("reg");
				var message = "";
					if (myform.firstname.value == "")
					{
						message += "First name must be a value <br />";
					}
					if (myform.lastname.value == "")
					{
						message += "Last name must be a value <br />";
					}
					if (myform.address.value == "")
					{
						message += "Address must be a value <br />";
					}
					if (myform.city.value == "")
					{
						message += "City must be a value <br />";
					}
					if (myform.province.value == "")
					{
						message += "Province must be a value <br />";
					}
					if (myform.country.value == "")
					{
						message += "Country must be a value <br />";
					}
					if (myform.pcode.value == "")
					{
						message += "Postal code must be a value <br />";
					}
					var regexp = new RegExp(/^[A-Z]\d[A-Z]\s?\d[A-Z]\d$/i);
					if (!regexp.test(myform.pcode.value))
					{
					message += "Postal code has an invalid format <br />";
					}
					if (myform.phone.value == "")
					{
						message += "Phone must be a value <br />";
					}
					if (myform.email.value == "")
					{
						message += "Email must be a value <br />";
					}
					if (myform.vactype.value == "")
					{
						message += "Vacation type must be a value <br />";
					}
					if (myform.numtravellers.value == "")
					{
						message += "Number of travellers must be a value <br />";
					}
				
					if (message == "")
					{
						return confirm("Continue submitting?");
					}
					else
					{
						document.getElementById("error").innerHTML = message;
						return false;
					}
			}

			function showInfo(para)
			{
			document.getElementById(para).style.visibility = "visible";

			}

			function hideInfo(para)
			{
			document.getElementById(para).style.visibility = "hidden";

			}


		</script>
	</head>

	<body>
		<div id="wrapper">
		<h1>Register with Travel Experts</h1>
		
		<p id="p1" class="fieldinfo">Customer's first name</p>
		<p id="p2" class="fieldinfo">Customer's last name</p>
		<p id="p3" class="fieldinfo">Customer's full address</p>
		<p id="p4" class="fieldinfo">Customer's city</p>
		<p id="p5" class="fieldinfo">Customer's province in two alpha character format</p>
		<p id="p6" class="fieldinfo">Customer's country</p>
		<p id="p7" class="fieldinfo">Customer's postal code in  A1A 1A1 format</p>
		<p id="p8" class="fieldinfo">Customer's phone including the area code</p>
		<p id="p9" class="fieldinfo">Customer's email address</p>



		<p id="error"></p>
		<form id="reg" method="get" action="http://localhost/bouncer.php">
			<fieldset>
				<legend class="legends">Personal Information</legend>
				<label for="firstname">First Name:</label><input type="text" name="firstname" placeholder="John" onfocus="showInfo('p1')" onblur="hideInfo('p1')"><br />
				<label for="lastname">Last Name:</label><input type="text" name="lastname" placeholder="Doe" onfocus="showInfo('p2')" onblur="hideInfo('p2')" ><br />
				<label for="address">Address:</label><input type="text" name="address" placeholder="123 Rainbow Acres" onfocus="showInfo('p3')" onblur="hideInfo('p3')"><br />
				<label for="city">City:</label><input type="text" name="city" placeholder="Sunny Town" onfocus="showInfo('p4')" onblur="hideInfo('p4')"><br />
				<label for="province">Province:</label><input type="text" name="province" placeholder="Sunshine Province" onfocus="showInfo('p5')" onblur="hideInfo('p5')" ><br />
				<label for="country">Country:</label><input type="text" name="country" placeholder="Canada" onfocus="showInfo('p6')" onblur="hideInfo('p6')" ><br />
				<label for="pcode">Postal Code:</label><input type="text" name="pcode" placeholder="A1A-A1A" onfocus="showInfo('p7')" onblur="hideInfo('p7')" ><br />
				<label for="phone">Phone:</label><input type="text" name="phone" placeholder="403-XXX-XXXX" onfocus="showInfo('p8')" onblur="hideInfo('p8')" ><br />
				<label for="email">E-mail:</label><input type="email" name="email" placeholder="john_doe@sunnytown.com" onfocus="showInfo('p9')" onblur="hideInfo('p9')"><br />
			</fieldset>
			<br />
			<fieldset>
				<legend class="legends">Travel Preferences</legend>
				<label>Vacation type:</label>
					<select name="vactype">
					<option value="package" selected>Package</option>
					<option value="land">Land Only</option>
					<option value="air">Air Only</option>
					<option value="cruise">Cruise</option>
					</select><br />
				<label>Number of travellers:</label>
					<input id="travelNum" type="text" name="numtravellers" placeholder="4">
					<br />
				</fieldset><br />
				
			
				<input class="formbuttons" type="submit" value="Submit" onclick="return validate()" />
				<input class="formbuttons" type="reset" value="Reset" onclick="return confirm('Are you sure you would like to continue?')" /><br />
				
				<hr />
			</form>
			
			<nav><p><a href="index.html" class="navbuttons">Home</a>
			<a href="contact.html" class="navbuttons">Contact</a></p></nav>
			
		</div>
		<footer><p>&#169; Copyright 2010-2015 Travel Experts</p></footer>
	
	</body>
	
</html>