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
    $V9 = @$_POST['V9'];
    $V10 = @$_POST['V10'];

    $usuario = "root";
    $password = "";
    $servidor = "127.0.0.1";
    $basededatos = "escuela";
    
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de Datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );


$query="UPDATE `alumnos` SET `nombre` = '".$V2."',`apellidoMaterno` = '".$V3."',`apellidoPaterno` = '".$V4."', `correo` = '".$V5."', `numero` = '".$V6."', `cumpleaños` = '".$V7."', `carrera` = '".$V8."', `1p` = '".$V9."', `2p` = '".$V10."' WHERE `alumnos`.`IDP` = ".$V1.";";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

$query="SELECT * FROM `alumnos`;";
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
      echo "<td bgcolor='#71BEFF'>Apellido Paterno</td>";
      echo "<td bgcolor='#A9D0FF'>Apellido Materno</td>";
      echo "<td bgcolor='#71BEFF'>Correo</td>";
      echo "<td bgcolor='#A9D0FF'>Numero</td>";
      echo "<td bgcolor='#71BEFF'>Cumpleaños</td>";
      echo "<td bgcolor='#A9D0FF'>Carrera</td>";
      echo "<td bgcolor='#71BEFF'>Parcial 1</td>";
      echo "<td bgcolor='#A9D0FF'>Parcial 2</td>";
      echo "<td bgcolor='#71BEFF'>Calificacion Final</td>";
      echo "</td>";

      while ($columna = mysqli_fetch_array( $resul )){

        echo "<tr>";
           echo "<td><input type='checkbox' name='marca[]' value='".$columna['IDP']."'></td>";
           echo "<td style='color: #fff;'>".$columna['IDP']."</td>";
        echo "<td style='color: #fff;'>".$columna['nombre']."</td>";
        echo "<td style='color: #fff;'>".$columna['apellidoPaterno']."</td>";
        echo "<td style='color: #fff;'>".$columna['apellidoMaterno']."</td>";
        echo "<td style='color: #fff;'>".$columna['correo']."</td>";
        echo "<td style='color: #fff;'>".$columna['numero']."</td>";
        echo "<td style='color: #fff;'>".$columna['cumpleaños']."</td>";
        echo "<td style='color: #fff;'>".$columna['carrera']."</td>";
        echo "<td style='color: #fff;'>".$columna['1p']."</td>";
        echo "<td style='color: #fff;'>".$columna['2p']."</td>";
        $n1 = $columna['1p'] + $columna['2p'];
        $final = $n1/2;
        echo "<td style='color: #fff;'>".$final."</td>";
           echo "</td>";
    }
echo "</table>";
echo "<br><h2 style='color: #fff;'>¡Modificado con Éxito!</h2><br>";
echo "<a href='consultar.php' class='btn' style='background-color: #694a24; color: white;'>Ir a inicio</a>";

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