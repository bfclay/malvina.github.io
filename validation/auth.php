<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);


	$pass = md5($pass."solevaya");

	$mysql= new mysqli('localhost', 'root', 'root', 'lesson');


	$result = $mysql -> query("SELECT * FROM `signup` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result -> fetch_assoc();
	if(count($user) == 0) {
		echo "Такой пользователь не найден";
		exit();
	}

	setcookie('user', $user['name'], time() + 60*60*24*30, "/");
	$mysql->close();

	header('Location: /');

?>