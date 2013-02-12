<?php
/* contact_process.php */
// Connects to the database
mysql_connect("localhost", "username", "password") or die(mysql_error());
mysql_select_db("database") or die(mysql_error());

if(isset($_POST['submit']))
{
	// if the submit button has been pressed...
	if($_POST['first_name'] != NULL && $_POST['last_name'] != NULL && $_POST['email'] != NULL && $_POST['phone'] != NULL && $_POST['address'] != NULL && $_POST['city'] != NULL && $_POST['state'] != NULL && $_POST['zip'] != NULL && $_POST['moreinfo'] != NULL)
	{
		// if the required fields of name, email and comment have been filled...
		$first_name = strip_tags($_POST['first_name']);
		$last_name = strip_tags($_POST['last_name']);
		$email = strip_tags($_POST['email']);
		$phone = strip_tags($_POST['phone']);
		$address = strip_tags($_POST['address']);
		$city = strip_tags($_POST['city']);
		$state = strip_tags($_POST['state']);
		$zip = strip_tags($_POST['zip']);
		$moreinfo = strip_tags($_POST['moreinfo']);

		// insert the comment to the db
		$insert = "INSERT INTO contact (first_name, last_name, email, phone, address, city, state, zip, comment) VALUES ('" . $first_name . "', '" . $last_name . "', '" . $email . "', '" . $phone . "', '" . $address . "', '" . $city . "', '" . $state . "', '" . $zip . "', '" . $moreinfo . "')";
		$add_comment = mysql_query($insert);

		// send the email confirmation
		$radiant_email = 'radiant_window.cleaning@yahoo.com';
		$subject_email = "radiant-window-cleaning.com -- A Quote Request Has Been Made!";
		$body_email = $first_name . " " . $last_name . " has sent the following message:\n-----------------------\n(EMAIL ADDRESS)\n" . $email . "\n\n(ADDRESS:)\n" . $address . "\n" . $city . ", " . $state . " " . $zip . "\n\n(PHONE:)\n" . $phone . "\n-----------------------\n\n" . $moreinfo;
		$headers_email  = "From: RADIANT-WINDOW-CLEANING.COM <noreply@radiant-window-cleaning.com>\r\n";
		$params_email = "-f webmaster@radiant-window-cleaning.com";

		mail($radiant_email, $subject_email, $body_email, $headers_email, $params_email);
		header("Location: contact_complete.php");
	}
	else
	{
		// they left a required field blank
		die("You didn't fill out all the required fields.  Please <a href='contact.php'>try again.</a>");
	}
}
else
{
	// the submit button was not pressed
	die("You have visited this page when you shouldn't have!");
}
?>