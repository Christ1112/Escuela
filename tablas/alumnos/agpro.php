
<!--PARTE DE ARRIBA CARG------------------------------------------------------------------------------------------------------------------------->

<?php
include "../../encabezado.php";
?>
<body class="formulario-inicio" style="background-color: black;">
    <img src="../../IMG/logocircular.png" height="300">
<!--conexion a bases de datos-->
<form name="formulario" method="post" action="agprolog.php">
    <h2 style="color: white;">Agregar Usuario</h2><br>
<center>
    <div class="col-md-4 col-sm-6">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" name="n1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Username" aria-describedby="basic-addon1" name="n2">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Username" aria-describedby="basic-addon1" name="n3">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1" name="n4">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Numero" aria-label="Username" aria-describedby="basic-addon1" name="n5">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="date" class="form-control" placeholder="Cumpleaños" aria-label="Username" aria-describedby="basic-addon1" name="n6">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="carrera" aria-label="Username" aria-describedby="basic-addon1" name="n7">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Calificacion Primer Parcial" aria-label="Username" aria-describedby="basic-addon1" name="n8" value="0">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">➝</span>
        </div>
        <input type="text" class="form-control" placeholder="Calificacion Primer Parcial" aria-label="Username" aria-describedby="basic-addon1" name="n9" value="0">
      </div>
    </div>
</center>
    <input type="submit" class="btn" style="background-color: #694a24; color: white;" name="boton" value="Agregar">
</form>
<?php
//<!--FOOTHER------------------------------------------------------------------------------------------------------------------------------------->
include "../../foother.php";
?>