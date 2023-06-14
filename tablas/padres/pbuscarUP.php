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

    $query="Delete From padres where IDPP=". $selected2 ;
    $resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
}
  
  if(isset($_POST['submit4'])){
    if(!empty($_POST['marca2'])){
      foreach($_POST['marca2'] as $selected2){
          //echo $selected."</br>";
      } 
  header("Location: pmodificarP.php?IDPP=".$selected2.$nom); 
}
  }

$consulta = "SELECT * FROM `padres` WHERE `nombre` LIKE '".$e."'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

$query="SELECT * FROM `padres` WHERE `nombre` LIKE '".$e."'";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");
    
echo "<form name='formulario' method='post' action='pbuscarUP.php'>";
    echo "<br><table border=1 style='width: 100%;'>";
    echo "<tr>";
    echo "<td bgcolor='#A9D0FF'>Marcar</td>";
    echo "<td bgcolor='#71BEFF'>ID</td>";
          echo "<td bgcolor='#A9D0FF'>Nombre</td>";
          echo "<td bgcolor='#A9D0FF'>Apellido Paterno</td>";
          echo "<td bgcolor='#71BEFF'>Apellido Materno</td>";
          echo "<td bgcolor='#71BEFF'>Coreo</td>";
          echo "<td bgcolor='#A9D0FF'>Número</td>";
          echo "</td>";
while ($columna = mysqli_fetch_array( $resul )){
    echo "<tr>";
    echo "<td><input type='checkbox' name='marca2[]' value='".$columna['IDPP']."'></td>";
    echo "<td>".$columna['IDPP']."</td>";
    echo "<td>".$columna['nombre']."</td>";
    echo "<td>".$columna['apellidoPaterno']."</td>";
    echo "<td>".$columna['apellidoMaterno']."</td>";
    echo "<td>".$columna['correo']."</td>";
    echo "<td>".$columna['numero']."</td>";
    echo "</td>";
}
echo "</table><br>";
echo "<input type='submit' name='submit3' class='btn btn-danger' value='Eliminar'>";
echo "&nbsp;&nbsp;";
echo "<input type='submit' name='submit4' class='btn btn-warning' value='Actualizar'>";
echo "</form>";
echo "<a href='pconsultar.php'>Ir a inicio</a>";

mysqli_close( $conexion );
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>