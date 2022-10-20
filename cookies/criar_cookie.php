<?php
	setcookie("usuario", "Larissa", time() + 60 * 60 * 24 * 30); // Cria um cookie com validade de 30 dias

	if (isset($_COOKIE["usuario"])){
		$user = $_COOKIE["usuario"];
		echo("<h1>Bem vinda, $user!</h1>");
	} else {
		echo("Cookie ainda não definido.");
	}
?>