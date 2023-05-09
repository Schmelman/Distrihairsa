<?php

	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	
	require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

	$mail = new PHPMailer(true);
	$receiver = array(
        'email' => 'fdsfdsffd19520800@gm.uit.edu.vn',
        'name' => 'Nhan 19520800'
    );
try {
    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'distrihairs.a@gmail.com';                     
    $mail->Password   = 'M2a7t1i1a9s1';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('distrihairs.a@gmail.com', 'Distrihairsa');
    $mail->addAddress($receiver['email'] , $receiver['name']);     //Add a recipient
    $mail->addReplyTo('distrihairs.a@gmail.com', 'Distrihairsa');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Welcome to Distrihairsa';
    $mail->Body    = '
                        <html>
                        <body> 
                            <p>Hi '.$receiver['name'].',</p>
                            <p><b>Distrihairsa</b></p>
                        </body>
                        </html>';


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
