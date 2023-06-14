<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<?php
include "../../encabezado.php";
?>
<body class="formulario-inicio" style="background-color: black;">
    <img src="../../IMG/logocircular.png" height="250">
<!--conexion a bases de datos-->
<form name="formulario" method="post" action="tconsultar.php">
    <h2 style="color: white;">Introdusca Su Nombre:</h2><br>
<center>
    <div class="col-md-4 col-sm-6">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" name="n1">
      </div>
    </div>
</center>
    <input type="submit" class="btn" style="background-color: #694a24; color: white;" name="boton" value="Acceder">
</form>
<?php
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>