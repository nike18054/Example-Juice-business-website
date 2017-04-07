<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <meta http-equiv="content-language" content="en" />
  <title>Form</title>
<link rel="stylesheet" type="text/css" href="requiredformfiles/css/contactformpro.css" />
<!--bootsrap css-->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<!-- JAVASCRIPT files-->
<script src="../js/jquery.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/dropdown.js"></script>
<style>

@media (max-width: 499px){
  .resize {
    width: 250px;
    height: 500px;
  }
}
</style>
</head>
<body>

<div class="contactformpro" style="float:left">
  <div width="500px" class="contactformpro-default">

<!-- Licensed software, from www.freecontactform.com -->

  <script type="text/javascript" src="requiredformfiles/_validation.js"></script>
  <script type="text/javascript">
    FCFrequired.add('Full_Name','NOT_EMPTY','Full Name');
    FCFrequired.add('Questions_&_Comments','NOT_EMPTY','Questions');
  </script>
  <form accept-charset="utf-8" method="post" action="contact_process.php" onsubmit="return FCFvalidate.check(this)">
    <table width="500" border="0">

      <div>
        <h1 align="center">Contact Us</h1>
      </div>

      <!--Ful Name-->
      <div class="form-group">
        <label for="Full_Name">Full Name: <span class="required_star"> * </span></label>
        <input class="form-control" size="40" type="text" name="Full_Name" id="Full_Name" maxlength="50" value="" />
      </div>

      <div class="form-group">
        <label for="Questions_&_Comments" class="required">Questions<span class="required_star"> * </span></label>
        <textarea class="form-control" cols="40" rows="6" name="Questions_&_Comments" id="Questions_&_Comments" maxlength="1000"></textarea>
      </div>
<!--
<?php
echo " -" . "->";
require_once('contact_configuration.php');
if(isset($reCAPTCHA_privatekey) && strlen(trim($reCAPTCHA_privatekey)) > 8 && $custom_captcha == "no") {
echo "
<tr>
 <td>&nbsp;</td>
 <td>";
  require_once('requiredformfiles/recaptcha/recaptchalib.php');
  echo recaptcha_get_html($reCAPTCHA_publickey);
 echo "<script>
  FCFrequired.add('recaptcha_response_field','NOT_EMPTY','Security Challenge (reCAPTCHA)');
 </script>";
 echo  "</td>
 </tr>";
} elseif(isset($custom_captcha) && $custom_captcha == "yes") {
echo '
<tr>
 <td valign="top">&nbsp;
 <label for="custom_antispam_field">Challenge<span class="required_star"> * </span></label>
<script>
 FCFrequired.add(\'custom_antispam_field\',\'NOT_EMPTY\',\'Security Challenge\');
 </script>
 <td>';
 echo 'To help prevent automated spam, please answer the following question.<br /><br />';
  echo $customer_antispam_field_HTML;
  echo '
  </td>
 </tr>';
}
echo "<!-"."-";
?>
-->
<tr>
 <td colspan=2 align=center><br /><br /><input type="submit" value="Submit" id="form_submit_button" /><br />
 </td>
</tr>
</table>
</form>
</div></div>

</body>
</html>
