<?php
	require "../conexion/conexion.php";

	if (isset($_POST['user']) || $_POST['pass']){

			$correo = $_POST['user'];
			$pass = $_POST['pass'];
            
            $registro = $consultas->login_usuario($correo);
		if($registro){

			if($pass == $registro['password']){
				session_start();
				$_SESSION['loggedin'] = true;
				$_SESSION['id'] = $registro['idusuario'];
				header("Location: ../usuarios/inicio.php");

			}else{
				echo '<script>alert("Contrase&ntilde;a incorrecta")</script>';
				header("Location: ../usuarios/index.html?err=pass");
			}
		}
	}
?>