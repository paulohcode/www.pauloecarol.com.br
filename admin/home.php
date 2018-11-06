<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" href="../style/css/adm.css">
	<link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.css">


	<title>P&C</title>
</head>

<body>
	<div class="row">

		<div class="col-12">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="home.php">
	  	Site casamento
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="menu">
    	<ul class="navbar-nav ml-auto">
    		<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		         <i class="fa fa-cogs" aria-hidden="true"></i> Configurações
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="home.php?op=cadastro&pg=banner">Banner</a>

		          <a class="dropdown-item" href="home.php?op=cadastro&pg=galeria">Galeria</a>

		          <a class="dropdown-item" href="home.php?op=cadastro&pg=paralax">Paralax</a>

		          <a class="dropdown-item" href="home.php?op=cadastro&pg=texto">Texto</a>
		        </div>
		   	</li>
			<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cadastro
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          

		          <a class="dropdown-item" href="home.php?op=cadastro&pg=usuario">Usuário</a>
		        </div>
		   	</li>

		   	<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <i class="fa fa-list" aria-hidden="true"></i> Listar
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="home.php?op=listas&pg=usuario">Usuários</a>
		       	</div>
		    </li>

		   	<li class="nav-item">
		        <a class="nav-link" href="sair.php">	
		        	<i class="fa fa-power-off"></i> Sair
		        </a>
		    </li>
		</ul>
	  </div>
	</nav>
			

		</div>
		<div class="container">

			<?php

			$op = $pg = "";
			//recuperar o op
			if ( isset ( $_GET["op"] ) ) {
				$op = trim ( $_GET["op"] );
			}
			if ( isset ( $_GET["pg"] ) ) {
				$pg = trim ( $_GET["pg"] );
			}

			//echo "Conteudo do op e do pg: $op $pg";

			if ( empty ( $pg ) ) {
				$pagina = "dashboard.php";
			} else {
				$pagina = $op."/".$pg.".php";
			}

			//verificar se o arquivo existe
			if ( file_exists( $pagina ) ) {
				include $pagina;
			} else {
				include "erro.php";
			}

		?>

		</div>

	</div>




<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/popper.js/dist/umd/popper.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>
