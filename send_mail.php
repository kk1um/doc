<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
$webmaster_email = "kk1um@um.edu.my";

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$feedback_page = "feedback_form.html";
$error_page = "error_message.html";
$thankyou_page = "thank_you.html";

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$email_address = $_REQUEST['email_address'] ;
$comments = $_REQUEST['comments'] ;
$first_name = $_REQUEST['first_name'] ;
$msg =
"First Name: " . $first_name . "\r\n" .
"Email: " . $email_address . "\r\n" .
"No Bilik" . $No_Bilik . "\r\n" .
"Tarikh_Guna" .$Tarikh_Guna . "\r\n" .
"Masa" .$Masa . "\r\n" .
"HP" .$HP . "\r\n" .
"JKP" .$JKP . "\r\n" .
"Tujuan" .$Tujuan . "\r\n" .
"Kemudahan 1" .$Kemudahan_1 . "\r\n" .
"Kuantiti 1: " . $Kuantiti_1 . "\r\n" .
"Catatan 1: " . $Catatan_1 . "\r\n" .

"Kemudahan 2" .$Kemudahan_2 . "\r\n" .
"Kuantiti 2" . $Kuantiti_2 . "\r\n" .
"Catatan 2" . $Catatan_2 . "\r\n" .

"Kemudahan 3" .$Kemudahan_3 . "\r\n" .
"Kuantiti 3" . $Kuantiti_3 . "\r\n" .
"Catatan 3" . $Catatan_3 . "\r\n" .

"Kemudahan 4" .$Kemudahan_4 . "\r\n" .
"Kuantiti 4" . $Kuantiti_4 . "\r\n" .
"Catatan 4" . $Catatan_4 . "\r\n" .

"Kemudahan 5" .$Kemudahan_5 . "\r\n" .
"Kuantiti 5" . $Kuantiti_5 . "\r\n" .
"Catatan 5" . $Catatan_5 ;

/*
The following function checks for email injection.
Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
*/
function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

// If the user tries to access this script directly, redirect them to the feedback form,
if (!isset($_REQUEST['email_address'])) {
header( "Location: $feedback_page" );
}

// If the form fields are empty, redirect to the error page.
elseif (empty($first_name) || empty($email_address)) {
header( "Location: $error_page" );
}

/*
If email injection is detected, redirect to the error page.
If you add a form field, you should add it here.
*/
elseif ( isInjected($email_address) || isInjected($first_name)  || isInjected($comments) ) {
header( "Location: $error_page" );
}

// If we passed all previous tests, send the email then redirect to the thank you page.
else {

	mail( "$webmaster_email", "Feedback Form Results", $msg );

	header( "Location: $thankyou_page" );
}
?>
