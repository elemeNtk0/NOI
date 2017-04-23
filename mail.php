<?php
	/* Здесь проверяется существование переменных */
	if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
	if (isset($_POST['name'])) {$name = $_POST['name'];}

	/* Сюда впишите свою эл. почту */
	$address = "igosheva.spb@gmail.com, just_anasteziya@mail.ru";

	/* А здесь прописывается текст сообщения, \n - перенос строки */
	$mes = "Тема: Обращение с лендинга http://www.oy-image-akciya.ru/\nТелефон: $phone\nИмя: $name";

	/* А эта функция как раз занимается отправкой письма на указанный вами email */
	$sub='Заявка'; //сабж
	$email='http://www.oy-image-akciya.ru/'; // от кого
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

	ini_set('short_open_tag', 'On');
	header('Refresh: 3; URL=/');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Салон красоты комфорт-класса в Санкт-Петербурге — «Image House ONLY YOU»</title>
        <meta content="Салон красоты комфорт-класса в Санкт-Петербурге — «Image House ONLY YOU». Предлагаем услуги по созданию индивидуального и неповторимого образа на каждый день - женские и мужские стрижки, модное окрашивание, уход за волосами, маникюр и педикюр, косметология и др. виды услуг." name="description">
        <meta content="салон красоты,салон красоты в Санкт-Петербурге,салон красоты в СПб,салон красоты Image House ONLY YOU,салон красоты на петроградской,салон красоты премиум" name="keywords">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <link sizes="16x16" href="assets/images/favicon.ico" rel="icon" type="image/icon">
		<link href="assets/css/app.css" rel="stylesheet">
		<meta name="generator">
		<style type="text/css">
			body {
				text-align: center;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			h1 {
				width: 42%;
				margin: 0 auto;
				@media only screen and (max-width: 1280px)
					width: 60%;
				@media only screen and (max-width: 640px)
					width: 70%;
				@media only screen and (max-width: 480px)
					width: 80%;
				@media only screen and (max-width: 375px)
					width: 100%;
			}
		</style>
		<script type="text/javascript">

		setTimeout('location.replace("/..")', 3000);
		*//*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*//*
		</script>
	</head>
	<body>
		<h1>Спасибо! Мы свяжемся с Вами в ближайшее время</h1>
	</body>
</html>
