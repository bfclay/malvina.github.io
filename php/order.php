<?php 

	if (isset($_POST['start'])) {$start = $_POST['start'];}
	if (isset($_POST['end'])) {$end = $_POST['end'];}
	if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
	if (isset($_POST['adults'])) {$adults = $_POST['adults'];}
	if (isset($_POST['url'])) {$url = $_POST['url'];}

	$start = stripslashes($start);
	$start = htmlspecialchars($start);

	$end = stripslashes($end);
	$end = htmlspecialchars($end);

	$phone = stripslashes($phone);
	$phone = htmlspecialchars($phone);

	$adults = stripslashes($adults);
	$adults = htmlspecialchars($adults);

	$url = stripslashes($url);
	$url = htmlspecialchars($url);

	$mail_to = 'mail@mail.com'; // ВАШ mail

	$subject = 'Новый заказ';
	
	$headers = 'From: html6.com.ru <support@html6.com.ru>' . "\r\n";
	
	$text .= "Дата начала: ".$start."\nДата окончания: ".$end."\nТелефон: ".$phone."\nКол-во человек: ".$adults."\nСтраница: ".$url;
	
	if (mail($mail_to, $subject, $text, $headers)) {
		echo "Ваш заказ принят! Мы свяжемся с Вами.";
	}

?>