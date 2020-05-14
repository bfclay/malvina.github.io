<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);

	if(mb_strlen($login)<5  || mb_strlen($login) > 90) {
		echo "Недопустимая длина логина";
		exit();
	}		else if(mb_strlen($name)<2  || mb_strlen($name) > 50) {
		echo "Недопустимая длина имени";
		exit();
	}		else if(mb_strlen($email)<5  || mb_strlen($email) > 90) {
		echo "Недопустимая длина электронной почты";
		exit();
	}	else if(mb_strlen($pass)<6  || mb_strlen($pass) > 50) {
		echo "Недопустимая длина пароль (6-50 символов)";
		exit();
	}

	$pass = md5($pass."solevaya");

	$mysql= new mysqli('localhost', 'root', 'root', 'lesson');
	$mysql -> query("INSERT INTO `signup` (`login`, `name`, `email`, `pass`) 
	VALUES('$login', '$name', '$email', '$pass')");

	$mysql->close();

	header('Location: /');

?>