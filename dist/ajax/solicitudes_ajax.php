<?php
include("../../conexion/conexion.php");
//$inciso = 1;
$inciso =$_POST['inciso'];
//$correo = 'cisnerps@gmail.com';

switch($inciso){
    case "1": 
        $correo = $_POST['correo'];
	$existe =  $consultas->existe_correo($correo);
        echo ($existe)?'error':'success';
        break;
}
?>