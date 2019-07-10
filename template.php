<?php

if( isset($_POST['email_data']) ){

require 'class/Exception.php';
require 'class/PHPMailer.php';
require 'class/SMTP.php';

    $emails = $_POST['email_data'];
    $emailFrom = $_POST['emailFrom'];
    $emailBody = $_POST['emailBody'];
    $emailSubject = $_POST['emailSubject'];
    $output = '';

    foreach ($emails as $email ) {
      $mail = new PHPMailer;
      //Server settings

      $mail->isSMTP();                                            // Set mailer to use SMTP
      $mail->Host       = 'mail.mahamudhasan23.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'admin@mahamudhasan23.com';                     // SMTP username
      $mail->Password   = 'hasan5523';                               // SMTP password
      $mail->SMTPSecure = '';                                  // Enable TLS encryption, `ssl` also accepted
      $mail->Port       = '25';

      //Recipients
      $mail->setFrom('from@example.com', 'Mailer');
      $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
                    // Name is optional

      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Here is the subject';
      $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $result = $mail->send();

      if( $result['code'] == '400'){
        $output .= html_entity_decode($result['full_error']);
      }

    }

    if( $output == ''){
      echo 'ok';
    }else{
      echo $output;
    }



}



?>
