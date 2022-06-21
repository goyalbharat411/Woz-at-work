<?php
 require("PHPMailer/src/PHPMailer.php");
 require("PHPMailer/src/SMTP.php");

$mail = new PHPMailer\PHPMailer\PHPMailer(true);


$mail->SMTPDebug = 4; //                              // debugging: 1 = errors and messages, 2 = messages only
$mail->Mailer = "smtp";
 $mail->isHTML(true); // enable SMTP                     // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'goyalbharat411@gmail.com';                   // SMTP username
$mail->Password = 'goyal@505';                             // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('goyalbharat411@gmail.com', 'Woz At Work');
$mail->addAddress('bharat@rkcl.in');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/home/tutsplanet/file.tar.gz');         // Add attachments
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here comes the the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>