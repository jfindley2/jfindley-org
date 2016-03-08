<?php
require_once((dirname(__DIR__)) . "/vendor/autoload.php");
try {
	// sanitize the inputs from the form: name, email, subject, and message

	// this assumes jQuery (not Angular will be submitting the form, so we're using the $_POST superglobal

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$emailContent = filter_input(INPUT_POST, "emailContent", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	// Generate Swift message

	$swiftMessage = Swift_Message::newInstance();

	// attach the sender to the message

	$swiftMessage->setFrom([$email => "A Visitor"]);

	//Attach my address to the message.
	$recipients = ["jacobmfindley@icloud.com" => "Jacob M Findley"];
	$swiftMessage->setTo($recipients);

	// attach the subject line to the message

	$swiftMessage->setSubject("A Message from a visitor");


	$swiftMessage->setBody($emailContent, "text/html");
	$swiftMessage->addPart(html_entity_decode($emailContent), "text/plain");

	/**
	 * send the Email via SMTP; the SMTP server here is configured to relay everything upstream via CNM
	 * this default may or may not be available on all web hosts; consult their documentation/support for details
	 * SwiftMailer supports many different transport methods; SMTP was chosen because it's the most compatible and has the best error handling
	 * @see http://swiftmailer.org/docs/sending.html Sending Messages - Documentation - SwitftMailer
	 **/
	$smtp = Swift_SmtpTransport::newInstance("localhost", 25);
	$mailer = Swift_Mailer::newInstance($smtp);
	$numSent = $mailer->send($swiftMessage, $failedRecipients);

	/**
	 * the send method returns the number of recipients that accepted the Email
	 * so, if the number attempted is not the number accepted, this is an Exception
	 **/
	if($numSent !== count($recipients)) {
		// the $failedRecipients parameter passed in the send() method now contains contains an array of the Emails that failed

		throw(new RuntimeException("unable to send email"));
	}

	// report a successful send

	echo "<div class=\"alert alert-success\" role=\"alert\">Email successfully sent.</div>";
} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Unable to send email: " . $exception->getMessage() . "</div>";
}