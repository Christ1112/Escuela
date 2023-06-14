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
    <link rel="shortcut icon" href="../../IMG/logo.png">
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
          <a class="dropdown-item" href="../../extras/pagos/pagos.php">Pagos</a>
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
	<!--<script>
		$(document).ready(function() {
			$("#searchButton").click(function() {
				var word = $("#searchBox").val();
				$("#content").load("#", function() {
					$("#content").html(function(_, html) {
						return html.replace(new RegExp('\\b' + word + '\\b', 'ig'), '<span class="highlight">$&</span>');
					});
				});
			});
		});
	</script>-->