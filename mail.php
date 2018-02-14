<?php

// require_once ("./swiftmailer-5/swift_mailer-5/lib/swift_required.php");

// echo "My apologies, the contact form is under construction. Please send emails to tami@tamiprieto.com.  Thank you!";
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];
$subject = "Contact Form";
$formcontent = "From: $name \n Subscribe: $subscribe \n Message: $message";
$recipient = "brenden.prieto@yahoo.com";

$transport = new \Swift_SmtpTransport("smtpout.secureserver.net", 80);
// $transport->setUsername('tamiprieto');
// $transport->setPassord('vflN55TU#KOgbe');

$message = new \Swift_Message($transport);
$message->setSubject($subject);
$message->setFrom(array($email => $name));
$message->setTo('brenden.prieto@yahoo.com');
$message->setBody($formcontent);


// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank you!";
if ($mailer->send($message))
{
	echo "Thank you\n";
}
else
{
	echo "Failed\n";
}
?>