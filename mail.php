<meta charset="utf-8">
<?php 
$message = "Имя: {$_POST['name']}<br>"; // добавляем имя в текст
$message .= "Email: {$_POST['email']}<br>";
$message .= "Телефон: {$_POST['phone']}<br>";
$message .= "Тариф: {$_POST['tarif']}<br>";

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'логин от мейл';
$mail->Password = 'пароль от мейл';
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';
$mail->CharSet = 'UTF-8';
$mail->From = 'мейл почта@mail.ru';
$mail->FromName = 'тема письма';
$mail->addAddress('любая другая почта не обязательно');
$mail->isHTML(true);
$mail->Subject = 'текст письма';
$mail->Body = $message;

if( $mail->send() ){
echo '<h1 style="color: green; text-align: center;">Ваша заявка принята. Наш менеджер свяжется с Вами в ближайшее время!</h1>';
}else{
echo '<p style="color: red;">Ошибка!</p>';
}
 ?>