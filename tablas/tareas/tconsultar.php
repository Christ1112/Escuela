<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../CSS/Style.css">
    <link rel="shortcut icon" href="../../IMG/logocircular.png">
    <title>StudyPlus</title>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #694a24;">
  <a class="navbar-brand text-white" href="#">StudyPlus ®</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="../../tablas.html">Tablas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Seleccion Directa
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="../alumnos/consultar.php">Alumnos</a>
          <a class="dropdown-item" href="../maestros/mconsultar.php">Maestros</a>
          <a class="dropdown-item" href="../padres/pconsultar.php">Padres</a>
          <a class="dropdown-item" href="../carreras/cconsultar.php">Licenciaturas</a>
          <a class="dropdown-item" href="../tareas/tconsultar.php">Tareas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../../acceso.html">Inicio</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Deshabilitado</a>

<script>
  function changeLang(sel) {
  var lang = sel.value;
  var url = window.location.href;
  if (url.indexOf("?") > -1) {
    url = url.substr(0, url.indexOf("?"));
  }
  window.location.href = url + "?lang=" + lang;
}

</script>
      </li>
    </ul>
    <form name="formulario" method="post" action="../../acceso.html">
      <input type="submit" class="btn" style="background-color: black; color: white;" name="boton" value="Pagina Principal">
      <button id="searchButton" class="btn" style="background-color: black; color: white;" type="submit" onclick="location.reload()">Actualizar Página</button>
    </form>
  </div>
</nav>
</header>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<style>
		.highlight {
			background-color: yellow;
			font-weight: bold;
			text-decoration: underline;
		}
	</style>
	<!--<input type="text" id="searchBox" placeholder="Busqueda universal" class="btn btn-outline-success my-2 my-sm-0">
	<button id="searchButton" class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>-->
	<br>
	<div id="content">
	</div>
<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<body class="formulario-inicio" style="background-color: black;">
  <?php
$n1 = @$_POST["n1"];

  $usuario = "root";
	$password = "";
	$servidor = "127.0.0.1";
	$basededatos = "escuela";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
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
    header("Location: tmodificarP.php?IDT=".$selected2); 
  }
    }

echo "<hr>"; ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h3 style='color: white;'>Bienvenido</h3><h2 style='color: white;'> ".$n1." </h2style='color: white;'>a la tabla <h2style='color: white;'>Tareas</h2>";

$query="Select * From tareas";
    $resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  
    echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<div class='col'>";
    echo "</div>";
    echo "<div class='col-12'>";

    echo "<br><form name='formulario' method='post' action='tbuscarUP.php'>";
    echo "<div class='input-group mb-3'>
    <div class='input-group-prepend'>
      <span class='input-group-text' id='basic-addon1'>➝</span>
    </div>
    <input type='text' class='form-control' style='text-align: center;' placeholder='Buscar Parcial (Nombre)' aria-label='Username' aria-describedby='basic-addon1' name='e'>
   </div>";
   echo "&nbsp;&nbsp;<input type='submit' class='btn' style='background-color: #694a24; color: white;' name='boton' value='Buscar'></form>";

  echo "<form name='formulario' method='post' action='tconsultar.php'>";
  echo "<br><table style='width: 100%;' border='1'>";
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
     echo "<td><input type='checkbox' name='marca2[]' value='".$columna['IDT']."'></td>";
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
 echo "</table><br>";
 echo "<input type='submit' name='submit3' class='btn btn-danger' value='Eliminar'>";
echo "&nbsp;&nbsp;";
 echo "<input type='submit' name='submit4' class='btn btn-warning' value='Actualizar'>";
 echo "</form>";
 echo "<br>";
 echo "<a href='tagpro.php' type='button' class='btn' style='background-color: #694a24; color: white;'>Agregar Tarea</a>";
 echo "&nbsp;&nbsp;";
 echo "<a href='../../tablas.html' type='button' class='btn' style='background-color: #694a24; color: white;'>ir a tablas</a>";

    echo "</div>";
    echo "<div class='col'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
 
mysqli_close( $conexion );
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>