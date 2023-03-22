<?php 
    include("sesion/validar_sesion.php");
    include("definiciones/definiciones.php"); 
    include("../conexion/conexion.php");
    $usuarios = $consultas->datos_usuarios();
    $colores = $consultas->desplegar_colores();
    $datos = array();
    $count=0;
foreach($colores as $c):
        $datos[$count]["label"]=$c["color"];
        $datos[$count]["y"]=$c["n_color"];
        $count=$count+1;
endforeach;
        
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
      <meta http-equiv='x-ua-compatible' content='ie=edge'>
      <title>INICIO</title>
      <link rel="StyleSheet" href="../dist/css/estilos.css" type="text/css">
      <link rel="stylesheet" href="../dist/vendor/fontawesome/css/fontawesome-all.css">
      <link rel="stylesheet" href="../dist/vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../dist/vendor/libs/css/style.css">
      <link rel="stylesheet" href="../dist/vendor/fonts/circular-std/style.css" >
      <link rel="stylesheet" href="../dist/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="../dist/vendor/fonts/flag-icon-css/flag-icon.min.css">
      <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Preferencia de colores"
	},
	axisY: {
		title: "No.personas"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## han preferido este color",
		dataPoints: <?php echo json_encode($datos, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
   </head>
<body>
<?php include ("header/menu.php");?>
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xs-12 col-md-12">
            <div id="chartContainer" style="height: 290px; width: 100%;"></div>
               <hr>
               <h3>Lista de Usuarios</h3>
               <div class="card">
                    <div class="card-body" id="mostrar_tabla"> 
                    <?php if ($usuarios):?>  
                        <table class="table table-stripped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Correo</th>
                                    <th>Color</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($usuarios as $s):
                            if ($s['idcolor']):
                                $col = $consultas->catalogo_colores($s['idcolor']);
                                $color = $col['color'];
                            endif;     
                            ?>
                                <tr>
                                    <td> <?php echo $s['idusuario']?></td>
                                    <td><?php echo $s['correo']?></td>
                                    <td><?php echo $color?></td>   
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    <?php 
                        else:
                            echo "No hay equipos registrados";
                        endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
</body>
    <script src="../assets/script/canvasjs.min.js"></script>
    <script src="../dist/js/jquery-3.3.1.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/bootstrap.bundle.js"></script>
</html>