<?php
include "../../encabezado.php";
?>
<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<body class="formulario-inicio">
<?php

$boton = @$_POST["boton"];
$e = @$_POST["e"];

$usuario = "root";
$password = "";
$servidor = "127.0.0.1";
$basededatos = "escuela";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de Datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

if(isset($_POST['submit3'])){
    if(!empty($_POST['marca2'])){
            foreach($_POST['marca2'] as $selected2){
               // echo $selected."</br>";
            }
        }

    $query="Delete From tareas where IDT=". $selected2 ;
    $resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
}
  
  if(isset($_POST['submit4'])){
    if(!empty($_POST['marca2'])){
      foreach($_POST['marca2'] as $selected2){
          //echo $selected."</br>";
      } 
  header("Location: tmodificarP.php?IDPP=".$selected2.$nom); 
}
  }

$consulta = "SELECT * FROM `tareas` WHERE `nombre` LIKE '".$e."'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

$query="SELECT * FROM `tareas` WHERE `tarea` LIKE '".$e."'";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");
    
echo "<form name='formulario' method='post' action='tbuscarUP.php'>";
    echo "<br><table border=1 style='width: 100%;'>";
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
          echo "</td>";
while ($columna = mysqli_fetch_array( $resul )){
    echo "<tr>";
    echo "<td><input type='checkbox' name='marca2[]' value='".$columna['IDT']."'></td>";
    echo "<td>".$columna['IDT']."</td>";
    echo "<td>".$columna['tarea']."</td>";
    echo "<td>".$columna['c1']."</td>";
    echo "<td>".$columna['c2']."</td>";
    echo "<td>".$columna['c3']."</td>";
    echo "<td>".$columna['c4']."</td>";
    echo "<td>".$columna['c5']."</td>";
    echo "<td>".$columna['c6']."</td>";
    echo "<td>".$columna['c7']."</td>";
    echo "<td>".$columna['c8']."</td>";
    echo "<td>".$columna['c9']."</td>";
    echo "<td>".$columna['c10']."</td>";
    echo "</td>";
}
echo "</table><br>";
echo "<input type='submit' name='submit3' class='btn btn-danger' value='Eliminar'>";
echo "&nbsp;&nbsp;";
echo "<input type='submit' name='submit4' class='btn btn-warning' value='Actualizar'>";
echo "</form>";
echo "<a href='tconsultar.php'>Ir a inicio</a>";

mysqli_close( $conexion );
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>