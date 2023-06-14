<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../estilosPrincipales.css">
    <link rel="shortcut icon" href="../../IMG/empresa.jpg">
    <title>StudyPlus</title>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light dorado">
  <a class="navbar-brand text-white" href="#">SudyPlus ®</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	<li class="nav-item active">
            <a class="nav-link negro" style="color: white;" href="../index.html"> ← </a>
          </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-info" href="../index.html">Pagina Principal</a>
      <button id="searchButton" class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="location.reload()">Actualizar Página</button>
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
	<style>
		.formsty {
			background-color: #FFFFFF;
			border: 2px solid #694a24;
			border-radius: 10px;
			box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
			margin: 0 auto;
			max-width: 500px;
			padding: 20px;
			width: 90%;
		}
		.labelsty {
			display: block;
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 5px;
		}
		.inputsty[type="text"], input[type="email"], input[type="password"], select {
			border: 2px solid #694a24;
			border-radius: 5px;
			font-size: 16px;
			padding: 10px;
			width: 100%;
		}
		.inputsty[type="submit"] {
			background-color: #694a24;
			border: none;
			border-radius: 5px;
			color: #FFFFFF;
			cursor: pointer;
			font-size: 20px;
			padding: 10px;
			margin-top: 10px;
			width: 100%;
		}
	</style>
</head>
<body class="negro">
	<h1 class="doradoTexto" style="text-align: center;">Portal de Pagos Universitarios</h1>
	<form action="https://formspree.io/f/mwkjngqv" class="form formsty" method="post">
		<label class="labelsty formInput" for="name">Nombre:</label>
		<input class="inputsty" type="text" id="name" name="nombre" required>
		<label class="labelsty formInput" for="email">Email:</label>
		<input class="inputsty" type="email" id="email" name="email" required>
		<label class="labelsty" for="student_id">ID Estudiante:</label>
		<input class="inputsty" type="text" id="student_id" name="student_id" required>
		<label class="labelsty" for="amount">Monto:</label>
		<input class="inputsty" type="text" id="amount" name="amount" required>
		<label class="labelsty" for="payment_method">Metodo de Pago:</label>
		<select id="payment_method" name="payment_method" required>
			<option value="">Seleccionar Metodo de Pago</option>
			<option value="credit_card">Tarjeta de Credito</option>
			<option value="debit_card">Tarjeta de Debito</option>
			<option value="paypal">PayPal</option>
		</select>
		<input class="inputsty form-cita" type="submit" value="Enviar">
	</form>
</body>
</html>