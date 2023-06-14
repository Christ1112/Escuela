<?php
include "../../encabezado.php";
?>
<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<body class="formulario-inicio" style="background-color: black;">
  <?php
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
    $V11 = @$_POST['V11'];
    $V12 = @$_POST['V12'];

    $usuario = "root";
    $password = "";
    $servidor = "127.0.0.1";
    $basededatos = "escuela";
    
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de Datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );


$query="UPDATE `tareas` SET `tarea` = '".$V2."',`c1` = '".$V3."',`c2` = '".$V4."', `c3` = '".$V5."', `c4` = '".$V6."',`c5` = '".$V7."',`c6` = '".$V8."', `c7` = '".$V9."', `c8` = '".$V10."', `c9` = '".$V11."', `c10` = '".$V12."' WHERE `tareas`.`IDT` = ".$V1.";";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

$query="SELECT * FROM `tareas`;";
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
  echo "<td bgcolor='#A9D0FF'>Actividades</td>";
  echo "<td bgcolor='#71BEFF'>Tarea 1</td>";
  echo "<td bgcolor='#A9D0FF'>Tarea 2</td>";
  echo "<td bgcolor='#71BEFF'>Tarea 3</td>";
  echo "<td bgcolor='#A9D0FF'>Tarea 4</td>";
  echo "<td bgcolor='#71BEFF'>Tarea 5</td>";
  echo "<td bgcolor='#A9D0FF'>Tarea 6</td>";
  echo "<td bgcolor='#71BEFF'>Tarea 7</td>";
  echo "<td bgcolor='#A9D0FF'>Tarea 8</td>";
  echo "<td bgcolor='#71BEFF'>Tarea 9</td>";
  echo "<td bgcolor='#A9D0FF'>Tarea 10</td>";
  echo "<td bgcolor='#9FF781'>Promedio Tareas</td>";
  echo "</td>";

      while ($columna = mysqli_fetch_array( $resul )){

        echo "<tr>";
           echo "<td><input type='checkbox' name='marca[]' value='".$columna['IDT']."'></td>";
           echo "<td style='color: #fff;'>".$columna['IDT']."</td>";
     echo "<td style='color: #fff;'>".$columna['tarea']."</td>";
     echo "<td style='color: #fff;'>".$columna['c1']."</td>";
     echo "<td style='color: #fff;'>".$columna['c2']."</td>";
     echo "<td style='color: #fff;'>".$columna['c3']."</td>";
     echo "<td style='color: #fff;'>".$columna['c4']."</td>";
     echo "<td style='color: #fff;'>".$columna['c5']."</td>";
     echo "<td style='color: #fff;'>".$columna['c6']."</td>";
     echo "<td style='color: #fff;'>".$columna['c7']."</td>";
     echo "<td style='color: #fff;'>".$columna['c8']."</td>";
     echo "<td style='color: #fff;'>".$columna['c9']."</td>";
     echo "<td style='color: #fff;'>".$columna['c10']."</td>";
           $n1 = $columna['c1'] + $columna['c2'] + $columna['c3'] + $columna['c4'] + $columna['c5'] + $columna['c6'] + $columna['c7'] + $columna['c8'] + $columna['c9'] + $columna['c10'];
              $final = $n1/10;
           echo "<td style='color: #fff;'>".$final."</td>";
           echo "</td>";
    }
echo "</table>";
echo "<br><h2 style='color: #fff;'>¡Modificado con Éxito!</h2><br>";
echo "<a href='tconsultar.php' class='btn' style='background-color: #694a24; color: white;'>Ir a inicio</a>";

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