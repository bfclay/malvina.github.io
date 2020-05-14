<?php
	setcookie('user', $user['name'], time() - 60*60*24*30, "/");
	header('Location: /');
?>