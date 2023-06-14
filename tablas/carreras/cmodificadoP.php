<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<body class="formulario-inicio" style="background-color: black;">
  <?php
  include "../../encabezado.php";
    if(isset($_POST['Actualizar
    '])){
        if(!empty($_POST['marca'])){
            foreach($_POST['marca'] as $selected){
                //echo $selected."</br>";
            }
        }
    }

    $V1 = @$_POST['V1'];
    $V2 = @$_POST['V2'];
    $V3 = @$_POST['V3'];
    $V4 = @$_POST['V4'];
    $V5 = @$_POST['V5'];
    $V6 = @$_POST['V6'];
    $V7 = @$_POST['V7'];
    $V8 = @$_POST['V8'];

    $usuario = "root";
    $password = "";
    $servidor = "127.0.0.1";
    $basededatos = "escuela";
    
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de Datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );


$query="UPDATE `carreras` SET `nombre` = '".$V2."',`maestro` = '".$V3."',`rvoe` = '".$V4."', `duracion` = '".$V5."' WHERE `carreras`.`IDC` = ".$V1.";";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

$query="SELECT * FROM `carreras`;";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<div class='col'>";
    echo "</div>";
    echo "<div class='col-12'>";

echo "<br><br><table style='width: 100%;' border='1'>";
echo "<tr>";
echo "<td bgcolor='#A9D0FF'>Marcar</td>";
      echo "<td bgcolor='#71BEFF'>ID</td>";
      echo "<td bgcolor='#A9D0FF'>Nombre</td>";
      echo "<td bgcolor='#71BEFF'>No. Impartidores</td>";
      echo "<td bgcolor='#A9D0FF'>R.V.O.E.</td>";
      echo "<td bgcolor='#71BEFF'>Duración</td>";
      echo "</td>";

      while ($columna = mysqli_fetch_array( $resul )){

        echo "<tr>";
           echo "<td><input type='checkbox' name='marca[]' value='".$columna['IDC']."'></td>";
           echo "<td style='color: #fff;'>".$columna['IDC']."</td>";
           echo "<td style='color: #fff;'>".$columna['nombre']."</td>";
           echo "<td style='color: #fff;'>".$columna['maestro']."</td>";
           echo "<td style='color: #fff;'>".$columna['rvoe']."</td>";
           echo "<td style='color: #fff;'>".$columna['duracion']."</td>";
           echo "</td>";
    }
echo "</table>";
echo "<br><h2 style='color: #fff;'>¡Modificado con Éxito!</h2><br>";
echo "<a href='cconsultar.php' class='btn' style='background-color: #694a24; color: white;'>Ir a inicio</a>";

echo "</div>";
    echo "<div class='col'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

mysqli_close ( $conexion );
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>