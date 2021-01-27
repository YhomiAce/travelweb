<?php
	require_once "../inc/config.php";

	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

	// Load Composer's autoloader
	require 'vendor/autoload.php';

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	if(isset($_POST['action']) && $_POST['action'] == 'send_email'){
		
		$name = htmlspecialchars($_POST['full_name']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$data = htmlspecialchars($_POST['message']);

		$to = $email;
		$subject = 'Contact Request';

		$headers = "From: " . $email. "\r\n";
		$headers .= "Reply-To: ". $email . "\r\n";
		$headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$message = '<html><body>';
		$message .= '<h1>Hello From Kreative!</h1>';
		$message .= '<div>';
		$message .= '<h2>Contact Request From '. $name.'</h2>';
		$message .= '<h2>Email:  '.$email.' </h2>';
		$message .= '<h2>Phone:'.$phone.' </h2>';
		$message .= '<p>'.$data.' </p>';
		$message .= '</div>';
		$message .= "</body></html>";
		// if(mail($to,$subject,$message,$headers)){
		// 	echo "Email sent Successfully";
		// }else{
		// 	echo "Email Not Sent";
		// }
		
		try{
			$mail->isSMTP();
			$mail->Host = 'smtp.mailtrap.io';
			$mail->SMTPAuth = true;
			$mail->SMTPDebug  = 1; 
			$mail->Username   = 'a4d387291a1e74';                    
			$mail->Password   = 'db0843923090c1';                              
			$mail->SMTPSecure = 'tls';         
			$mail->Port       = 587;

			$mail->setFrom('test@mail.com','Kreative');
			$mail->addAddress("mail@gmail.com");

			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body = $message;
			$mail->send();
			echo 'Your mail has been sent successfully.';
			$sql = "INSERT INTO contacts(full_name,email,phone, message) VALUES(?,?,?,?) ";
			$stmt = $conn->prepare($sql);
			$stmt->execute([$name,$email,$phone,$data]);
		}catch(Exception $e){
			echo 'Unable to send email. Please try again.';
		}
		
	}

?>