<?php
class cms{
    
	public $conexion;

    public function __construct(){
		$this->conexion= mysqli_connect("localhost", "root", "", "evolve");
		mysqli_set_charset($this->conexion,"utf8");					
	}

    public function crear_registro($consulta){
        if (mysqli_query($this->conexion,$consulta) == TRUE){
            return TRUE;
        } else {
            echo "Error: " . $consulta . "<br>" . mysqli_error($this->conexion);
            //return FALSE;
        }
    }
	public function existe_correo($correo){
		$query = "SELECT * FROM usuarios WHERE correo = '$correo'";
		$res = mysqli_query($this->conexion,$query);
		if ($res)
			return mysqli_fetch_assoc($res);
		else 
			return 0;
	}

	public function desplegar_colores(){
		$sql= "SELECT * FROM colores";
		$result = mysqli_query($this->conexion,$sql);
		return regresar_registros($result);	
	}

	public function login_usuario($correo){
		$sql= "SELECT * FROM usuarios WHERE correo = '$correo'";
		$result = mysqli_query($this->conexion,$sql);
		return mysqli_fetch_assoc($result);
	}

	public function datos_usuarios(){
		$sql = "SELECT * from usuarios";
		$result = mysqli_query($this->conexion,$sql);
		return regresar_registros($result);	
	}

    public function catalogo_colores($idcatalogo){
		$sql= "SELECT * FROM colores WHERE idcolor = $idcatalogo";
		$result = mysqli_query($this->conexion,$sql);
		return mysqli_fetch_assoc($result);	
	}

	public function usuarios($idusuario){
		$sql = "SELECT * from usuarios WHERE idusuario = '$idusuario'";
		$result = mysqli_query($this->conexion,$sql);
		return mysqli_fetch_assoc($result);	
	}

	public function numero_colores($idcolor){
		$getnum = mysqli_fetch_array (mysqli_query($this->conexion, "SELECT COUNT(*) FROM usuarios where idcolor = $idcolor"));
		$num = $getnum["COUNT(*)"];
		return $num;
	}
}

$consultas = new cms;

function regresar_registros($resultado){
    if (mysqli_num_rows($resultado)){
        while ($row = mysqli_fetch_assoc($resultado)) $rows[] = $row;
        return $rows;
    }else {
        return NULL;
    }
}
?>