<?php
	session_start();

	unset ($SESSION['id']);
	session_destroy();

	header('Location: ../usuarios/index.html');
?>