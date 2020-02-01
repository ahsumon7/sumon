<?php 
$result="";
if(isset($_POST['submit'])){
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='abdulhannansumon70@gmail.com';
$mail->Password='*isam78805577';
$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('abdulhannansumon70@gmail.com');
$mail->addReplyTo($_POST['email'],$_POST['name']);
$mail->isHTML(true);
$mail->Subject='Form Submission:' .$_POST['subject'];
$mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'</h3>';
if(!$mail->send()){
$result = "Something went worng. Please try again.";
}
else {
    $result="Thanks" .$_POST['name']. " for contacting us. We'll get back to you soon!";
  }
}
?>
