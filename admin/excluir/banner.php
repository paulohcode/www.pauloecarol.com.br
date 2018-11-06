<?php

	if(!isset ($pagina)){
		echo "Acesso Negado";
		exit;
	}

	//recuperar o id
	$id = "";
	if ( isset ( $_GET["id"] ) ) {
		$id = trim ( $_GET["id"] );
	}

//verificar se o id esta em branco ou se e invalido
	$id = (int)$id;
	if($id==0){
		//mensagem de erro
		echo "<script>alert('Requisição Invalida');history.back();</script>";
		exit;
	}

	


	include "app/conecta.php";
	
	$sql = "delete  from carousel where id = ? limit 1";
	$consulta = $pdo->prepare($sql);
	$consulta->bindParam(1, $id);

	if($consulta->execute()){
		echo "<script>alert('Registro Excluido');history.back();</script>";
	}else {
		echo "<script>alert('Erro ao Excluir');history.back();</script>";
		exit;
	}