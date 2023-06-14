
<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<body class="formulario-inicio" style="background-color: black;">
    
<!--conexion a bases de datos-->
<?php
include "../../encabezado.php";
echo "<img src='../../IMG/logocircular.png' height='300'>";

    $id=$_GET["IDP"];

$usuario = "root";
$password = "";
$servidor = "127.0.0.1";
$basededatos = "escuela";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de Datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$query="SELECT * FROM `alumnos` WHERE `alumnos`.`IDP` = ".$id.";";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

while ($columna = mysqli_fetch_array( $resul )){

    echo "<form name='formulario' method='post' action='modificadoP.php'>";
    echo "<h2 style='color: #fff;'>Actualizar Usuario</h2><br>";
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
    echo "<br> <input type='text' placeholder='Nombre' class='form-control' name='V2' value='".$columna['nombre']."'><br>";
    echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
    echo "<br> <input type='text' placeholder='Apellido Paterno' class='form-control' name='V3' value='".$columna['apellidoPaterno']."'><br>";
    echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
    echo "<br> <input type='text' placeholder='Apellido Materno' class='form-control' name='V4' value='".$columna['apellidoMaterno']."'><br>";
    echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Correro Electronico' class='form-control' name='V5' value='".$columna['correo']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Numero Contacto' class='form-control' name='V6' value='".$columna['numero']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='date' class='form-control' name='V7' value='".$columna['cumpleaños']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Carrera' class='form-control' name='V8' value='".$columna['carrera']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Primera Calificación' class='form-control' name='V9' value='".$columna['1p']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Segunda Calificación' class='form-control' name='V10' value='".$columna['2p']."'><br>";
        echo "</div>";
    echo "</div>";
echo "</center>";
echo "<input type='submit' name='Actualizar' class='btn' style='background-color: #694a24; color: white;' value='Actualizar'><br><br>";
echo "</form>";
echo "<br><br><a href='consultar.php' class='btn' style='background-color: #694a24; color: white;'>Ir a Consultas</a>";
}
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>