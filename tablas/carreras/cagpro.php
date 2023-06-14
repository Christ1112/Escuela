<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<?php
include "../../encabezado.php";
?>
<body class="formulario-inicio" style="background-color: black;">
    <img src="../../IMG/logocircular.png" height="300">
<!--conexion a bases de datos-->
<form name="formulario" method="post" action="cagprolog.php">
    <h2>Agregar Usuario</h2><br>
<center>
    <div class="col-md-4 col-sm-6">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Nombre Licenciatura" aria-label="Username" aria-describedby="basic-addon1" name="n1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="No. Impartidores" aria-label="Username" aria-describedby="basic-addon1" name="n2">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="R.V.O.E." aria-label="Username" aria-describedby="basic-addon1" name="n3">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Duración" aria-label="Username" aria-describedby="basic-addon1" name="n4">
      </div>
    </div>
</center>
    <input type="submit" class="btn" style="background-color: #694a24; color: white;" name="boton" value="Agregar">
</form>
<?php
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>