<?php 

use PHPMailer\PHPMailer\PHPMailer;

require("vendor/autoload.php");
function sendMail($subject, $body, $email, $name, $html = false){

    //configuracion inicial de nuestro servidor de correos 
$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.gmail.com';
$phpmailer->SMTPAuth = true;
$phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
$phpmailer->Port = 465;
$phpmailer->Username = 'chicorodriguezbonilla@gmail.com';
$phpmailer->Password = 'isgwsjoootwmthqq'; 



//anadiendo destinatarios

$phpmailer->setFrom('franciscorodriguezsv24@gmail.com', 'Francisco Rodriguez');
$phpmailer->addAddress($email, $name);

// definiendo el contenido de mi email
$phpmailer->isHTML($html);           
                       //Set email format to HTML
$phpmailer->Subject = $subject;
$phpmailer->Body    = $body;

//mandar el correo 
$phpmailer  ->send();



}

?>