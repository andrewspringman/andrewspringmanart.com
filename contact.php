<?php
$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

$msg = "Someone filled out the contact form on andrewspringmanart.com

NAME:  $name
EMAIL: $email
MESSAGE:

$message
";

mail("info@andrewspringmanart.com","Website Contact from $name",$msg);
?>