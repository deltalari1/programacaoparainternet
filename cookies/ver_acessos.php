<?php
	if(isset($_COOKIE['acessos'])){
		$quantidade_acessos = $_COOKIE['acessos'];
		$quantidade_acessos++;

		echo("<h1>Bem-vindo de volta!</h1>");
		echo("Você já acessou $quantidade_acessos vezes.");

		setcookie("acessos", $quantidade_acessos);
	} else {
		echo("<h1>Bem-vindo!</h1>");
		echo("Esse é o seu primeiro acesso.");
		setcookie("acessos", 1);
	}
?>