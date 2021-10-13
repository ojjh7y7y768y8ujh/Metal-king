<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$tel = $_POST['tel'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);

$name = urldecode($name);
$tel = urldecode($tel);

$name = trim($name);
$tel = trim($tel);

if (mail("khabib.gadzhimagomedov@mail.ru",
"Новое письмо с сайта",
 "Имя: ".$name."\n".
 "Номер телефона: ".$tel,
 "From: no-reply@mydomain.ru \r\n")
 ) {
	 echo ('Письмо успешно отправлено!');
 }
 else {
	 echo ('Есть ошибки! Проверьте данные...');
 }

?>