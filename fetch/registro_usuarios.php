<?php
	include("../conexion/conexion.php");
    
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $color = $_POST['color'];

	switch ($_POST['opcion']) {
		case 'r':
			$query1 = "UPDATE colores SET n_color = n_color+1 WHERE idcolor = $color";;
			if ($consultas->crear_registro($query1)){ 
			}else{
				echo "Error de registro";
			}
			$query = "INSERT INTO usuarios(correo, password, idcolor) 
            VALUES ('$correo','$password','$color')";
			if ($consultas->crear_registro($query)){
                echo'<script>
                alert("Datos registrados correctamente,favor de iniciar sesion");
                window.location.href="../usuarios/index.html";
                </script>'; 
			}else{
				echo "Error de registro";
			}
			break;	
		default:
			# code...
			break;
	}
?>