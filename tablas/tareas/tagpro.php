<?php
include "../../encabezado.php";
?>
<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->
<body class="formulario-inicio" style="background-color: black;">
    <img src="../../IMG/logocircular.png" height="300">
<!--conexion a bases de datos-->
<form name="formulario" method="post" action="tagprolog.php">
    <h2>Agregar Usuario</h2><br>
<center>
    <div class="col-md-4 col-sm-6">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Nombre Tarea" aria-label="Username" aria-describedby="basic-addon1" name="n0">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Tarea 1" value="0" aria-label="Username" aria-describedby="basic-addon1" name="n1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Tarea 2" value="0" aria-label="Username" aria-describedby="basic-addon1" name="n2">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Tarea 3" value="0" aria-label="Username" aria-describedby="basic-addon1" name="n3">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Tarea 4" value="0" aria-label="Username" aria-describedby="basic-addon1" name="n4">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Tarea 5" value="0" aria-label="Username" aria-describedby="basic-addon1" name="n5">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Tarea 6" value="0" aria-label="Username" aria-describedby="basic-addon1" name="n6">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Tarea 7" value="0" aria-label="Username" aria-describedby="basic-addon1" name="n7">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Tarea 8" value="0" aria-label="Username" aria-describedby="basic-addon1" name="n8">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Tarea 9" value="0" aria-label="Username" aria-describedby="basic-addon1" name="n9">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Tarea 10" value="0" aria-label="Username" aria-describedby="basic-addon1" name="n10">
      </div>
    </div>
</center>
    <input type="submit" class="btn" style="background-color: #694a24; color: white;" name="boton" value="Agregar">
</form>
<?php
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>