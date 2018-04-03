<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';

$address = $_POST["email"];

$mail = new PHPMailer(true);                              
try {
    $mail->SMTPDebug = 2;                                 
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.live.com';  
    $mail->SMTPAuth = true;         
    $mail->Username = 'nsnikhil614@hotmail.com';                 
    $mail->Password = 'Nik@1954';                           
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;                                   
    $mail->setFrom('nsnikhil614@hotmail.com', 'Nikhil');
    $mail->addAddress("$address");    
    $mail->isHTML(true);              
    $mail->Subject = 'Test Subject';
    $mail->Body    = 'Test Body';
    $mail->AltBody = 'Test Alt Body';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>
