<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<body class="formulario-inicio">
<?php
include "../../encabezado.php";

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

    $query="Delete From carreras where IDC=". $selected2 ;
    $resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
}
  
  if(isset($_POST['submit4'])){
    if(!empty($_POST['marca2'])){
      foreach($_POST['marca2'] as $selected2){
          //echo $selected."</br>";
      } 
  header("Location: cmodificarP.php?IDC=".$selected2.$nom); 
}
  }

$consulta = "SELECT * FROM `carreras` WHERE `nombre` LIKE '".$e."'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

$query="SELECT * FROM `carreras` WHERE `nombre` LIKE '".$e."'";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");
    
echo "<form name='formulario' method='post' action='cbuscarUP.php'>";
    echo "<br><table border=1 style='width: 100%;'>";
    echo "<tr>";
    echo "<td bgcolor='#A9D0FF'>Marcar</td>";
    echo "<td bgcolor='#71BEFF'>ID</td>";
          echo "<td bgcolor='#A9D0FF'>Nombre</td>";
          echo "<td bgcolor='#A9D0FF'>No. Impartidores</td>";
          echo "<td bgcolor='#71BEFF'>R.V.O.E.</td>";
          echo "<td bgcolor='#71BEFF'>Duración</td>";
          echo "</td>";
while ($columna = mysqli_fetch_array( $resul )){
    echo "<tr>";
    echo "<td><input type='checkbox' name='marca2[]' value='".$columna['IDC']."'></td>";
    echo "<td>".$columna['IDC']."</td>";
    echo "<td>".$columna['nombre']."</td>";
    echo "<td>".$columna['maestro']."</td>";
    echo "<td>".$columna['rvoe']."</td>";
    echo "<td>".$columna['duracion']."</td>";
    echo "</td>";
}
echo "</table><br>";
echo "<input type='submit' name='submit3' class='btn btn-danger' value='Eliminar'>";
echo "&nbsp;&nbsp;";
echo "<input type='submit' name='submit4' class='btn btn-warning' value='Actualizar'>";
echo "</form>";
echo "<a href='cconsultar.php'>Ir a inicio</a>";

mysqli_close( $conexion );
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>