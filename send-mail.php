<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['contact_no']) && !empty($_POST['country']) && !empty($_POST['msg_type']) && !empty($_POST['message'])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'mail.intellidt.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'smitd@intellidt.com';
    $mail->Password = 'smit@d123';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('smitd@intellidt.com');
    $mail->addAddress('sal@intellidt.com');
    $mail->Subject = 'BC Orachard Contact Form';
    $mail->isHTML(TRUE);

    $message =  preg_replace("/&#?[a-z0-9]{2,8};/i", "", $_POST['message']);

    $mail->Body = "<html><b>First Name:-</b> {$_POST['first_name']} <br><b>Last Name:-</b> {$_POST['last_name']} </br> <br><b>Email:-</b> {$_POST['email']} </br><br><b>Contact No:-</b> {$_POST['contact_no']} </br><br><b>Country:-</b> {$_POST['country']} </br><br><b>Message Type:-</b> {$_POST['msg_type']} </br><br><b>Message :-</b> {$message} </br></html>";


    // send the message
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;

        echo '<script>alert("Message could not be sent. Mailer Error:  . "' . $mail->ErrorInfo . '")</script>';
    } else {
        header("Location: contact-us.php");
        echo '<script>alert("Message has been sent")</script>';
    }
} else {

    header("Location: contact-us.php");
    echo '<script>alert("Message has been sent")</script>';
}
