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

    $usuario = "root";
    $password = "";
    $servidor = "127.0.0.1";
    $basededatos = "tarea1s";
    
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de Datos");
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );


$query="UPDATE `inventario` SET `nombre` = '".$V2."', `correo` = '".$V3."', `numero` = '".$V4."', `cumpleaños` = '".$V5."' WHERE `inventario`.`IDP` = ".$V1.";";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

$query="SELECT * FROM `inventario`;";
$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

echo "<br><br><table style='width: 100%;' border='1'>";
echo "<tr>";
echo "<td bgcolor='#A9D0FF'>Marcar</td>";
      echo "<td bgcolor='#71BEFF'>ID</td>";
      echo "<td bgcolor='#A9D0FF'>Nombre</td>";
      echo "<td bgcolor='#71BEFF'>Correo</td>";
      echo "<td bgcolor='#A9D0FF'>Numero</td>";
      echo "<td bgcolor='#71BEFF'>Cumpleaños</td>";
      echo "</td>";

      while ($columna = mysqli_fetch_array( $resul )){

        echo "<tr>";
           echo "<td><input type='checkbox' name='marca[]' value='".$columna['IDP']."'></td>";
           echo "<td>".$columna['IDP']."</td>";
           echo "<td>".$columna['nombre']."</td>";
           echo "<td>".$columna['correo']."</td>";
           echo "<td>".$columna['numero']."</td>";
           echo "<td>".$columna['cumpleaños']."</td>";
           echo "</td>";
    }
echo "</table>";
echo "<br><h2>¡Modificado con Éxito!</h2><br>";
echo "<a href='consultar.php'>Ir a inicio</a>";
mysqli_close ( $conexion );
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="container">
    <p>© 2018-2022 Christian A. Ramirez Ganzo 
      <a href="#">Privacy</a> · <a href="#">Terms</a>
    </p>
  </footer>
</body>
</html>