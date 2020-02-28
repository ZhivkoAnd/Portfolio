<?php

//send.php

if(isset($_POST["contact_name"]))
{
 require 'class/class.phpmailer.php';
 $mail = new PHPMailer;
 $mail->IsSMTP();
 $mail->Host = 'smtpout.secureserver.net';

 $mail->Port = '80';

 $mail->SMTPAuth = true;
 $mail->Username = 'xxxx';
 $mail->Password = 'xxxx'; 
 $mail->SMTPSecure = '';
 $mail->From = $_POST['contact_email'];
 $mail->FromName = $_POST['contact_name'];
 $mail->AddAddress('web-tutorial@programmer.net');
 $mail->WordWrap = 50;
 $mail->IsHTML(true);

 $mail->Subject = 'New Business Enquiry from ' . $_POST['contact_name'];
 $message_body = $_POST["contact_message"];
 $message_body .= '<p>With mobile number ' . $_POST["contact_mobile"] . '</p>';
 $mail->Body = $message_body;

 if($mail->Send())
 {
  echo 'Thank you for Contact Us';
 }
}

?>