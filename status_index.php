<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="Order Service Manager">
  <meta name="José Teixeira, Sergio" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <!--<link rel="stylesheet" type="text/css" href="css/button.css"> -->
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->

		
    <script type="text/javascript" src="js/status_functions.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/ajax2.js"></script>
		
		
	
	</head>

<body>
<div class=login-page>

<div id="Pesquisar">
	<input type="text" placeholder="Nome do Cliente" name="txtnome" id="txtnome"/> 
    <input type="button" name="btnPesquisar" value="Pesquisar" onclick="getDados(), getDados2();" />
	<a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>

	<button class="css3button2" onclick="myFunction0()">Registar<br> Cliente</button>
	<button class="css3button2" onclick="myFunction1()">Modificar<br> Cliente</button>
	<button class="css3button2" onclick="myFunction2()">Eliminar<br> Cliente</button>
	<button class="css3button2" onclick="myFunction3()">Registar<br> Equipamento</button>
	<button class="css3button2" onclick="myFunction4()">Modificar <br> Equipamento</button>
	<button class="css3button2" onclick="myFunction5()">Eliminar <br> Equipamento</button>


<br></br>
    
</div>

<div id="Resultado"></div>
  <br>
<div id="Resultado2"></div>

</div>

</body>
</html>
