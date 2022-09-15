<?php
  namespace PHPMailer\PHPMailer;
  include('../mobijoseph/phpmailer/Exception.php');
  include('../mobijoseph/phpmailer/PHPMailer.php');
  include('../mobijoseph/phpmailer/SMTP.php');

    if(isset($_POST['submit'])){
        extract($_POST);

        $phpmail = new PHPMailer(true);
        $phpmail->setFrom($email,$nom);
        $phpmail->Subject=$sujet;
        $phpmail->addAddress('mobijoseph2000@gmail.com');
        $phpmail->Body=$message;
        $phpmail->isHTML(true);
        $phpmail->send();
    } 
?> 