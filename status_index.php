<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="OSM" content="Order Service Manager">
  <meta name="José Teixeira, Sergio" content="SitePoint v2">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="css/style3.css">
  <!--<link rel="stylesheet" type="text/css" href="css/button.css"> -->
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
    <script type="text/javascript" src="js/status_functions.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/ajax2.js"></script>
		
</head>

<body>
<div class="container-fluid">  
<form id="contact" action="inserir2.php" method="post">
  <div class="row">
    <div class="col">
    	<h3>Registo de Clientes</h3>
		<fieldset>
		    <input placeholder="Nome" type="text" id="pesquisa"  name="nome">
		    <input placeholder="Telefone" type="text"  name="telefone">
		    <input placeholder="Email" type="text"  name="email">
		    <input placeholder="Morada" type="text" name="morada">
		</fieldset>

		<h3>Registo de Equipamento</h3>
		<fieldset> 
		    <input placeholder="Entrada" type="date"  name="entrada">
		    <input placeholder="Marca" type="text"  name="marca">
		    <input placeholder="Modelo" type="text"  name="modelo">
		    <input placeholder="Operadora" type="text"  name="operadora">
		    <input placeholder="Serial/Emai" type="text"  name="seria">
		    <input placeholder="Código de desbloqueio" type="text"  name="desbloqueio">
		    <input placeholder="Acessórios" type="text"  name="acessorios">
		    <input placeholder="Reclamação" type="text"  name="reclamacao">
		    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Registar</button>
		</fieldset>
    </div>
    <div class="col">
    	<h3>Observações</h3>
		<fieldset>
			<textarea rows="4" cols="500">Obs,</textarea>
		</fieldset>
    	<h3>Registo de Serviço</h3>
		<fieldset>
			<textarea rows="4" cols="500">Reg,</textarea>
		</fieldset>
	</div>
  </div>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
