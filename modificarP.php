<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/Style.css">
    <title>Christian Ganzo</title>
</head>
<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<header>
    <div class="bg-dark collapse show" id="navbarHeader">    
    <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-1">
                    <h4 class="text-white">Christian Ganzo ®</h4>
                </div>
                <div class="col-sm-2 col-md-5 py-1">
                    <h4 class="text-white">
                        <form name="formulario" method="post" action="principal.html">
                        <input type="submit" class="btn btn-info" name="boton" value="Pagina Principal">
                        </form>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</header>

<body class="formulario-inicio">
    <img src="IMG/empresa.jpg" height="300">
<!--conexion a bases de datos-->
<?php
    $id=$_GET["IDP"];

$usuario = "root";
$password = "";
$servidor = "127.0.0.1";
$basededatos = "tarea1s";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de Datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$query="SELECT * FROM `inventario` WHERE `inventario`.`IDP` = ".$id.";";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

while ($columna = mysqli_fetch_array( $resul )){

    echo "<form name='formulario' method='post' action='modificadoP.php'>";
    echo "<h2>Actualizar Usuario</h2><br>";
    echo "<center>";
    echo "<div class='col-md-4 col-sm-6'>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
    echo "<br> <input type='text' class='form-control' name='V1' value='".$id."'>";
    echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
    echo "<br> <input type='text' class='form-control' name='V2' value='".$columna['nombre']."'><br>";
    echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' class='form-control' name='V3' value='".$columna['correo']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' class='form-control' name='V4' value='".$columna['numero']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='date' name='V5' value='".$columna['cumpleaños']."'><br>";
        echo "</div>";
        echo "</div>";
echo "</center>";
echo "<input type='submit' name='Actualizar' value='Actualizar'><br><br>";
echo "</form>";
echo "<br><br><a href='consultar.php'>Ir a Consultas</a>";
}
?>
<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
<br><br><br><br>
<footer class="container">
    <p>© 2018-2022 Christian A. Ramirez Ganzo 
      <a href="#">Privacy</a> · <a href="#">Terms</a>
    </p>
  </footer>
</body>
</html>