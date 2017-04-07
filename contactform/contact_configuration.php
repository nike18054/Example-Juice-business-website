<?php


/* Licensed software, from www.freecontactform.com */

$fieldlist = array();
$fieldlist["Full_Name"] = "NOT_EMPTY";
$fieldlist["Questions_&_Comments"] = "NOT_EMPTY";
$form_page_name = "contact.php";
$email_it_to = "contact@oregonjuiceco.com";
$email_it_to_cc = "";
$email_it_to_bcc = "";
$email_it_from = "Email";
$email_subject = "Contact Us Form";
$email_suspected_spam = "*SUSPECT Contact Us Form";
$accept_suspected_hack = "yes"; // change to "no" to NOT accept
$success_page = "thankyou.html";
$failure_page = "_formerror.php";
$failure_accept_message = "yes";



// CAPTCHA OPTION 2: 
$custom_captcha = "no"; // set to "yes" to use

// ENTER YOUR QUESTION AND ANSWER PAIRS - add as many as you like
$custom_captcha_challenges[] = array("If you add 5 to 8 what is the result?", "13");
$custom_captcha_challenges[] = array("If you add 5 to 5 what is the result?", "10");
$custom_captcha_challenges[] = array("Using only numbers, how many days are in one week?", "7");
$custom_captcha_challenges[] = array("Using only numbers, how many hours are in one day?", "24");


$rnd = rand(0,count($custom_captcha_challenges)-1);
$custom_antispam_field_index = $rnd;
$custom_antispam_field_question = $custom_captcha_challenges[$rnd][0];
$customer_antispam_field_HTML = $custom_captcha_challenges[$rnd][0].
	' &nbsp; <input type="hidden" name="custom_antispam_field_index" value="'.$rnd.'" /> 
	  <input size="8" type="text" name="custom_antispam_field" id="custom_antispam_field" />';

	
if(isset($reCAPTCHA_publickey)) {	
	if(strlen(trim($reCAPTCHA_publickey)) > 0 
	  && strlen(trim($reCAPTCHA_privatekey)) > 0 
	  && $custom_captcha == "no") {
	  if(isset($fieldlist)) {
		// $fieldlist[] = "recaptcha_challenge_field";
		// $fieldlist[] = "recaptcha_response_field";
		$fieldlist["recaptcha_challenge_field"] = "NOT_EMPTY";
		$fieldlist["recaptcha_response_field"] = "NOT_EMPTY";
	  }
	}
}

// ACCEPTED FILE TYPES/SIZE (FOR FILE UPLOAD ATTACHMENT)
$accepted_file_types = array(".jpg",".jpeg",".tif",".gif",".png",".bmp",".doc",".docx",".xls",".xlsx"); // case-insensitive
$accepted_file_size = "2048"; // size in kilobytes

// SMTP EMAILS
$smtp_use = "no"; // set to no if you do not want to use SMTP
$smtp_host = "your.serverhost.com";
$smtp_auth = true;
$smtp_secure = "tls";
$smtp_user = "account-username";
$smtp_pass = "account-password";
$smtp_ssl = "yes"; // set to no if you do not need to use ssl
$smtp_port = 587; // or try 465;


// 	AUTO-RESPONDER EMAIL MESSAGE
$email_autoresponder = "no";
$email_autoresponder_from = "noreply@somedomain.com";
$email_autoresponder_to = "Email"; // enter email field name from the form
$email_autoresponder_subject = "Your message has been received";
$email_autoresponder_message = 
"Hi,

We have received your message and hope to get back to you in the next 24 hours.

You submitted the following information:

#SUBMISSION#


Best Regards,
www.somedomain.com
";

// TIMEZONE - used to mark email datetime in the email
if(phpversion() > "5.0") {
	date_default_timezone_set('Europe/London'); // for List see: http://www.php.net/manual/en/timezones.php
}
$hour_offset = "+0";
$dateformat = "Y-m-d H:i:s"; // for List see: http://www.php.net/manual/en/function.date.php
?>