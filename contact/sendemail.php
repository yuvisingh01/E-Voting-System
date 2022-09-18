<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
$phone = $_POST['phone'];
  $college_id = $_POST['college_id'];
  $user_id = $_POST['user_id'];
  $password = $_POST['password'];
  $message = $_POST['message'];
  

  try{
    $mail->IsSMTP();
    $mail->Host = 'smtp.googlemail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yourname@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Enter your password'; // Gmail address Password
    $mail->SMTPSecure = 'ssl';

    $mail->Mailer = "smtp";
    $mail->Port = '465';

    $mail->setFrom('yourname@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('yourname@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Voter application request';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>phone: $phone  <br>College Id: $college_id <br>User Id : $user_id<br>Password: $password <br>Message : $message</h3>";
    
    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Thank you for applying! We will notify you very shortly :) </span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
