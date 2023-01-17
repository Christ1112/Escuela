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
                <a href="principal.html"><img src="IMG/empresa.jpg" width="65" alt=""></a>
                <div class="col-sm-8 col-md-7 py-1">
                    <h4 class="text-white">Christian Ganzo ®</h4>
                    
                </div>
                <div class="col-sm-2 col-md-3 py-1">
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
  <?php
$n1 = @$_POST["n1"];

  $usuario = "root";
	$password = "";
	$servidor = "127.0.0.1";
	$basededatos = "tarea1s";

	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
  
    if(isset($_POST['submit3'])){
      if(!empty($_POST['marca2'])){
              foreach($_POST['marca2'] as $selected2){
                 // echo $selected."</br>";
              }
          }

      $query="Delete From inventario where IDP=". $selected2 ;
      $resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  }
    
    if(isset($_POST['submit4'])){
      if(!empty($_POST['marca2'])){
        foreach($_POST['marca2'] as $selected2){
            //echo $selected."</br>";
        } 
    header("Location: modificarP.php?IDP=".$selected2.$nom); 
  }
    }

echo "<hr>"; ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "Bienvenido<h2> ".$n1."</h2>";

$query="Select * From inventario";
    $resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos");
  
    echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<div class='col'>";
    echo "</div>";
    echo "<div class='col-12'>";

    echo "<br><form name='formulario' method='post' action='buscarUP.php'>";
    echo "<div class='input-group mb-3'>
    <div class='input-group-prepend'>
      <span class='input-group-text' id='basic-addon1'>➝</span>
    </div>
    <input type='text' class='form-control' style='text-align: center;' placeholder='Buscar Usuario (Nombre)' aria-label='Username' aria-describedby='basic-addon1' name='e'>
   </div>";
   echo "&nbsp;&nbsp;<input type='submit' class='btn btn-secondary' name='boton' value='Buscar'></form>";

  echo "<form name='formulario' method='post' action='consultar.php'>";
  echo "<br><table style='width: 100%;' border='1'>";
  echo "<tr>";
  echo "<td bgcolor='#A9D0FF'>Marcar</td>";
  echo "<td bgcolor='#71BEFF'>ID</td>";
        echo "<td bgcolor='#A9D0FF'>Nombre</td>";
        echo "<td bgcolor='#71BEFF'>Correo</td>";
        echo "<td bgcolor='#A9D0FF'>Número</td>";
        echo "<td bgcolor='#71BEFF'>Cumpleaños</td>";
        echo "</td>";
  
 while ($columna = mysqli_fetch_array( $resul )){

     echo "<tr>";
        echo "<td><input type='checkbox' name='marca2[]' value='".$columna['IDP']."'></td>";
        echo "<td>".$columna['IDP']."</td>";
        echo "<td>".$columna['nombre']."</td>";
        echo "<td>".$columna['correo']."</td>";
        echo "<td>".$columna['numero']."</td>";
        echo "<td>".$columna['cumpleaños']."</td>";
        echo "</td>";
 }
 echo "</table><br>";
 echo "<input type='submit' name='submit3' class='btn btn-danger' value='Eliminar'>";
echo "&nbsp;&nbsp;";
 echo "<input type='submit' name='submit4' class='btn btn-warning' value='Actualizar'>";
 echo "</form>";
 echo "<br>";
 echo "<a href='agpro.php' type='button' class='btn btn-primary' >Agregar Usuario</a>";

    echo "</div>";
    echo "<div class='col'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
 
mysqli_close( $conexion );
  ?>
<br><br>
<footer class="container">
    <p>© 2018-2022 Christian A. Ramirez Ganzo 
      <a href="#">Privacy</a> · <a href="#">Terms</a>
    </p>
  </footer>
</body>
</html>