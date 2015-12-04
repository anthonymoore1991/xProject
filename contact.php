<?php
$from = ""
$to = "Anthony.Moore1@student.ncirl.ie"
$email = Trim(stripslashes($_POST ['email']));
$name = Trim(stripslashes($_POST ['name']));
$message = Trim(stripslashes($_POST ['message']));

$body ="";
$body .="Email: ";
$body .="$email";
$body .="\n";
$body .="Name: ";
$body .="$name";
$body .="\n";
$body .="Message: ";
$body .="$message";
$body .="\n";

$go = mail($to, $subject, $body, "From:<$from>");

if($go){
	print("Success!");
}
else{
	print("Unable to send!");
}
?>