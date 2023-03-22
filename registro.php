<?php  
   include("conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>EVOLVE</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="dist/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="dist/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="dist/css/theme.css">
    <link rel="stylesheet" href="dist/css/theme-elements.css">
    <link rel="stylesheet" href="dist/css/skins/default.css">
</head>

<body>

    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 120}">
        <div class="header-body">
            <div class="header-top">
                <div class="header-top-container container">
                    <div class="header-row">
                        <div class="header-column justify-content-start">
                            <span class="d-none d-sm-flex align-items-center">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                Tenayuca 152, Letran Valle, Benito Juárez, 03650 Ciudad de México, CDMX
                            </span>
                            <span class="d-none d-sm-flex align-items-center ml-4">
                                <i class="fas fa-phone mr-1"></i>
                                <a href="tel:+525555754724">55-55-75-47-24</a>
                            </span>
                        </div>
                        <div class="header-column justify-content-end">
                            <span class="d-none d-sm-flex align-items-center ml-4">
                                <i class="fas fa-envelope mr-1"></i>
                                contacto@evolve.com.mx
                            </span>
                            <ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
                                <li class="social-icons-facebook">
                                    <a href="https://www.facebook.com/evolvetrabajo/?locale=es_LA" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="https://twitter.com/EvolveWorking" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div role="main" class="main">
        <section class="section" style="padding: 10px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb-lg-0"></div>
                    <div class="col-lg-6 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="bg-primary rounded p-5">
                            <div class="row">
                                <div class="col-md-7 text-justify"><span class="top-sub-title text-color-light-2">Registro de datos</span>
                                    <h2 class="text-color-light font-weight-bold text-4 mb-4">Sistema de colores</h2>
                                    <h6 class="text-color-light font-weight-bold">Verificar que sus datos sean correctos antes de registrarse</h6>
                                </div>
                                <div class="col-md-5 align-items-center text-right"><img src="dist/img/evo.jpg" width="150px" height="120px"/></div>
                            </div>
                            <form id="formulario" action="fetch/registro_usuarios.php" method="post">

                                <div class="form-row">
                                    <div class="form-group col mb-2">
                                        <label  class="text-color-light-2" for="correo"><br>Email</label>
                                        <input type="email" class="form-control bg-light rounded border-0 text-1" id="correo" name="correo" placeholder="Ingrese su correo electr&oacute;nico" onchange="verificar_existencia(this.value)" required="true"> 
                                        <div id="mensaje_existencia_correo" class="text-center"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-color-light-2" for="frmSignInPassword">Contrase&ntilde;a</label>
                                        <input type="password" value="" class="form-control bg-light rounded border-0 text-1" name="password" id="password" placeholder="crear una contraseña de almenos 8 caracteres y maximo 10" minlength="8" maxlength="10" required="true">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <select  class="form-control bg-light rounded border-0 text-1" id="color" name="color" required="true">
                                        <option value="">Seleccione su color favorito</option>
                                        <?php foreach($consultas->desplegar_colores() as $c):?>
                                        <option value="<?php echo $c['idcolor']?>"><?php echo $c['color']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <br>
                                <div class="form-row mb-2">
                                    <div class="form-group col-6">
                                        <div class="form-check checkbox-custom checkbox-custom-transparent checkbox-default">
                                            <input class="form-check-input" type="checkbox" id="ver_password">
                                            <label class="form-check-label text-color-light-2" for="ver_password"> Mostrar contrase&ntilde;a </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                    <input type="hidden" name="opcion" value="r">
                                        <button id="boton_registrar" type="submit" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">Registrar datos</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-lg-0"></div>
                </div>
            </div>
        </section>
    </div>
    
    <script src="dist/js/verificar_ajax.js"></script>
    <script src="dist/vendor/jquery/jquery.min.js"></script>
    <script src="dist/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="dist/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="dist/js/theme.js"></script>
    <script src="dist/js/theme.init.js"></script>
    <script src="dist/js/jquery.validate.js"></script>
	<script src="dist/js/jquery.espanol.js"></script>	
	<script src="dist/js/required.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#ver_password').click(function() {
                $(this).is(':checked') ? $('#password').attr('type', 'text') : $('#password').attr('type', 'password');
            });
        });
    </script>
</body>

</html>