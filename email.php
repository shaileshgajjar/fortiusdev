<?php
	include('lib/sparkpost-api.php');
	$mail = new sparkPostApi('https://api.sparkpost.com/api/v1/transmissions','1a0d96ca1f592c636d7e2e2736a45687085c25b3');
	$mail-> from(array('email' => 'support@pcicomply.com','name' => 'Support at PCI Comply'));
	$mail-> subject('My First Sparkpost Mail');
	$mail-> html('
		<h1>Sample Email</h1>
		<p>Test email from shailesh over sparkpost !!!</p>
	');
	/*========================================================================
	// TEMPLATE USAGE
	// $mail->template(template_id (String)>,Substitution Data (Array));
	/=======================================================================*/
	/*$mail-> template(
		'my-first-email',
		array(
			'Name'    => 'Sagar Upadhyay',
			'Message' => 'Test email from shailesh over sparkpost!'
		)
	);*/
	$mail->setTo(array('sa_gajjar@yahoo.in'));
	$mail->setReplyTo('support@pcicomply.com');
	
	/* CC emails as array same as "seTo"
	//$mail->setCc(array('person1@yourdomain.com','person2@yourdomain.com'));

	/* BCC emails as array same as "seTo" */
	//$mail->setBcc(array('person1@yourdomain.com','person2@yourdomain.com'));
	
	try{
		$mail->send();
		print "Message Sent";
	} 
	catch (Exception $e) {
		print $e;	
	}
	$mail->close();
?>