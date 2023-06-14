<?php
include "../../encabezado.php";
?>
<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<body class="formulario-inicio" style="background-color: black;">
    <img src="../../IMG/logocircular.png" height="300">
<!--conexion a bases de datos-->
<?php
    $id=$_GET["IDT"];

$usuario = "root";
$password = "";
$servidor = "127.0.0.1";
$basededatos = "escuela";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de Datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$query="SELECT * FROM `tareas` WHERE `tareas`.`IDT` = ".$id.";";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

while ($columna = mysqli_fetch_array( $resul )){

    echo "<form name='formulario' method='post' action='tmodificadoP.php'>";
    echo "<h2 style='color: #fff;'>Actualizar Calificaciones de Tareas</h2><br>";
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
        echo "<br> <input type='text' placeholder='Nombre Tarea' class='form-control' name='V2' value='".$columna['tarea']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Tarea 1' class='form-control' name='V3' value='".$columna['c1']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Tarea 2' class='form-control' name='V4' value='".$columna['c2']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Tarea 3' class='form-control' name='V5' value='".$columna['c3']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Tarea 4' class='form-control' name='V6' value='".$columna['c4']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Tarea 5' class='form-control' name='V7' value='".$columna['c5']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Tarea 6' class='form-control' name='V8' value='".$columna['c6']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Tarea 7' class='form-control' name='V9' value='".$columna['c7']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Tarea 8' class='form-control' name='V10' value='".$columna['c8']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Tarea 9' class='form-control' name='V11' value='".$columna['c9']."'><br>";
        echo "</div>";
    echo "<div class='input-group mb-3'>";
    echo "<div class='input-group-prepend'>";
    echo "<span class='input-group-text' id='basic-addon1'>➝</span>";
    echo "</div>";
        echo "<br> <input type='text' placeholder='Tarea 10' class='form-control' name='V12' value='".$columna['c10']."'><br>";
        echo "</div>";
echo "</div>";
echo "</center>";
echo "<input type='submit' name='Actualizar' class='btn' style='background-color: #694a24; color: white;' value='Actualizar'><br><br>";
echo "</form>";
echo "<br><br><a href='tconsultar.php' class='btn' style='background-color: #694a24; color: white;'>Ir a Consultas</a>";
}
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>