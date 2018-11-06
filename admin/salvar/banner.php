<?php
	//verifica se existe a variavel $pagina
	//$pagina esta sendo configurada no home.php
	if ( !isset ( $pagina ) ) {
		echo "Acesso negado";
		exit;
	}

	//adicionar vazio as variaveis
	$id = $nome = $imagem = "";

	if ( isset ( $_POST["id"] ) ) {
		$id = trim ( $_POST["id"] ); 	
	}
	if ( isset ( $_POST["nome"] ) ) {
		$nome = trim ( $_POST["nome"] ); 	
	}
	
	//verificar se os campos estão branco
	if ( empty ( $nome ) ) {
		echo "<script>alert('Preencha o nome');history.back();</script>";
		exit;
	} else {

		//salvar os dados - insert ou update
		include "app/conecta.php"; //conecta no banco

		//iniciar a transacao
		$pdo->beginTransaction();

		//se o id estiver vazio - INSERT
		if ( empty ($id) ) {
			//criar um sql para insert
			$sql = "insert into carousel 
				(id,nome)
				values
				(NULL, ?)";
			//utilizar o pdo para peparar o sql
			$consulta = $pdo->prepare($sql);
			//passar os 3 parametros: nome, cargo e curriculo
			$consulta->bindParam(1, $nome);
		} else {
			//criar um update
			$sql = "update carousel set
				nome = ?
				where id = ? 
				limit 1";
			$consulta = $pdo->prepare($sql);
			$consulta->bindParam(1, $nome);
			$consulta->bindParam(2, $id);
		}

		//verificar se os comandos são executado
		if ( $consulta->execute() ) {

			//verificar se existe imagem
			if ( !empty ( $_FILES["imagem"]["name"] ) ){
				//copiar o arquivo para a pasta ../fotos
				if ( copy ( $_FILES["imagem"]["tmp_name"], "../fotos/carousel/".$_FILES["imagem"]["name"] ) ) {					
					//mudar o tamanho e renomear
					if ( empty ( $id ) ) {
						$id = $pdo->lastInsertId();
					}
					
					//incluir o arquivo da imagem
					include "app/imagem.php";

					//chamar a função para alterar a imagem
					LoadImg("../fotos/carousel/".$_FILES["imagem"]["name"],
						$id,
						"../fotos/carousel/");

					//foto = nome da foto - id do registro
					$foto = $id;

					$sql = "update carousel set foto = ? where id = ? limit 1";
					$consulta = $pdo->prepare($sql);
					$consulta->bindParam(1,$foto);
					$consulta->bindParam(2,$id);
					//executar
					$consulta->execute();

				} else {
					$pdo->rollBack();
					//se der erro - mensagem de erro
					echo "<script>alert('Erro ao copiar arquivo');history.back();</script>";
					//sair da programação
					exit;
				}


			}
			$pdo->commit();
			echo "<script>alert('Registro salvo');location.href='../index.html';</script>";



			//$pdo->commit();

		} else {
			//recuperar erro - array
			$erro = $consulta->errorInfo()[2];
			// 0 - codigo 2 - mensagem de erro [2]
			echo $erro;

			echo "<script>alert('Não foi possível salvar');</script>";
			//rollBack - voltar a transacao
			$pdo->rollBack();
			exit;

		}


	}


