
///////////////////////////////////////////////////////////////////////////////////////////////////

<?php		 
			require 'send/PHPMailerAutoload.php';
			require 'send/credential.php';

			

			$mail = new PHPMailer;

			$mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                           // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL,'STACA');
			$mail->addAddress($sss);     // Add a recipient

			$mail->addReplyTo(EMAIL);
			// print_r($_FILES['file']); exit;
			/*for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
				$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
			}*/
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'commande ordre id';
			$mail->Body    = '<div your are the loyal customer we offer you one product </div>';

		


			$mail->AltBody = ' thanks for ordering transaction ';

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo ' </br> commande confirmation Message has been sent </br>';
			}
		

























 ?>		
////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////


