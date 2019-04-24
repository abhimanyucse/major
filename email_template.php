<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

function sendmail($to,$subj,$body){

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	require 'vendor/autoload.php';
	
	
	$mail = new PHPMailer(true);
	
	try {
		$mail->SMTPDebug = 2;                           
		$mail->isSMTP();                                
		$mail->Host       = 'smtp.gmail.com';
		$mail->SMTPAuth   = true;            
		$mail->Username   = 'macrock1203@gmail.com';                     
		$mail->Password   = 'spiritual_project';                         
		$mail->SMTPSecure = 'tls';                      
		$mail->Port       = 587;                        
		$headers = 'Content-type: text/html';
		$mail->setFrom('macrock1203@gmail.com');
		$mail->addAddress($to);     
		$mail->Subject = $subj;
		$mail->Body    = $body;
		$mail->isHTML(true);                            
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		$mail->addReplyTo('noreply@gmail.com','doc');
		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}
//sendmail('macrock1203@gmail.com','mac','yo');
?>