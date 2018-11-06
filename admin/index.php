<html>
<head>
	
	<title>Site Paulo e Carol</title>
	<meta charset="utf-8"/>
	
	<link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/compiler/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../node_modules/font-awesome/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="../style/css/style.css"/>
	
	<script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="../node_modules/parsley/parsley.min.js"></script>
</head>
	
<body id="bg">

	<div id="login" class="container">
	
		<img src="imagens/brand.png" id="logoLogin">
		<form name="form1" method="post" action="verificar.php" data-parley-validate>
		
			<label for="login">Login:</label>
			<input type="text" name="login" required class="form-control" data-parsley-required-message="Por favor preencha o Login"/>
			<hr />
			
			<label for="senha">Senha:</label>
			<input type="text" name="senha" required class="form-control" data-parsley-required-message="Por favor preencha a senha"/>
			<hr />
			
			<button type="submit" class="btn btn-success">Logar-se</button>
		
		</form>
	
	</div>
	
</body>
</html>