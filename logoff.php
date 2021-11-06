<?php
	
	//para encerrar a sessão possui duas maneiras
	//remover indices do array de sessão
	//função nativa do php unset()

	//destruir a variavel de sessão
	//session_destroy()

	session_destroy();
	header('Location: index.php');

?>