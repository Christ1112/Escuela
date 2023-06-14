<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<body class="formulario-inicio" style="background-color: black;">
<?php
include "../../encabezado.php";

$n1 = @$_POST["n1"];
$n2 = @$_POST["n2"];
$n3 = @$_POST["n3"];
$n4 = @$_POST["n4"];
$n5 = @$_POST["n5"];
$n6 = @$_POST["n6"];
$n7 = @$_POST["n7"];
$n8 = @$_POST["n8"];
$n9 = @$_POST["n9"];

$usuario = "root";
$password = "";
$servidor = "127.0.0.1";
$basededatos = "escuela";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de Datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$consulta = "INSERT INTO `alumnos` (`IDP`, `nombre`, `apellidoMaterno`, `apellidoPaterno`, `correo`, `numero`, `cumpleaños`, `carrera`, `1p`, `2p`) VALUES (NULL, '".$n1."', '".$n2."', '".$n3."', '".$n4."', '".$n5."', '".$n6."', '".$n7."', '".$n8."', '".$n9."');";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

$query="SELECT * FROM `alumnos`;";

$resul = mysqli_query( $conexion, $query ) or die ( "Algo ha ido mal en la consulta a la base de datos ");

echo "<center><br><br><h2 style='color: white;'>¡Agregado con exito!</h2><br><a href='consultar.php'>Regresar a Consulta</a></center>";
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>