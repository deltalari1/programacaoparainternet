<?php
	// Para excluir um cookie, cria-se ele com validade de uma data passada
	setcookie("usuario", null, time() - 300);
?>