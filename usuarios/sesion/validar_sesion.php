<?php
	session_start();

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			$idusuario = $_SESSION['id'];
	} else {
	   echo "Usted no tiene permisos para entrar al sistema. Por favor inicia sesi&oacute;n<br>";
	   echo "<br><a href='index.html'>Login</a>";
	   exit;
	}
?>