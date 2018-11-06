<?php
	//verifica se existe a variavel $pagina
	//$pagina esta sendo configurada no home.php
	if ( !isset ( $pagina ) ) {
		echo "Acesso negado";
		exit;
	}
?>


<br>
<h1 class="text-center">Cadastrar Banners</h1>
<br>
<form name="form1" method="post" action="home.php?op=salvar&pg=banner" data-parsley-validate enctype="multipart/form-data">
	<div class="row">
		<div class="col-1">
			<label for="id">ID:</label>
			<input type="text" name="id" class="form-control" readonly>
		</div>
		<div class="col-4">
			<label for="nome">Nome da Imagem (1920x1080)</label>
			<input type="text" name="nome" class="form-control" required data-parsley-required-message="Preencha o nome ">
		</div>
		<div class="col-4">
			<label for="foto">Selecione uma Foto</label>
			<input type="file" name="imagem" class="form-control" onchange="previewImagem()" required data-parsley-required-message="Por favor, seleciona uma imagem JPG"><br><br>
		</div>
	</div>
	<div class="row">
		<div class="col-12">

			<img style="width: 1024px; height: 300px;"><br><br>
		</div>

	</div>
	<button type="submit" class="btn btn-success">
				Gravar/Alterar Carousel
			</button>

	<br>
	<br>


</form>

<br>
	<h1 class="text-center">Banners Atuais</h1>
<br>

<section class="galeria">
	
		<div class='row container'>
			
				<?php

				include "app/conecta.php";

				//selecionar as imagens para o carousel
				$sql = "select * from carousel order by id";
				$consulta = $pdo->prepare($sql);
				$consulta->execute();

				//listar todas as imagens
				while($dados=$consulta->fetch(PDO::FETCH_OBJ)){
					//separ os dados
					$id=$dados->id;
					$nome=$dados->nome;
					$foto=$dados->foto;

					$foto = "../fotos/carousel/".$foto.".jpg";


					echo "
								
								<div class='text-center'>
									<img src='$foto' width='256px' class='ml-5 mb-3 img-thumbnail'>
									<br>
									<a href=\"javascript:excluir($id)\" class='btn btn-danger ml-5'>
										<i class='fa fa-trash'></i>
									</a>
								</div>
								
								
							"; 

						}

					?>

	</div>
	
</section>

<script type="text/javascript">
	//funcao para perguntar se deseja excluir
	function excluir(id) {
		//pergunta e confirmar
		if ( confirm( "Deseja realmente excluir esse banner ? ") ) {
			//mandar excluir
			link = "home.php?pg=banner&op=excluir&id="+id;
			//chamar o link
			location.href = link;
		}
	}
</script>

<script>
	function previewImagem() {
		var imagem = document.querySelector('input[name=imagem]').files[0];
		var preview = document.querySelector('img');

		var reader = new FileReader();

		reader.onloadend = function() {
			preview.src = reader.result;
		}

		if (imagem) {
			reader.readAsDataURL(imagem);
		} else {
			preview.src = "";
		}
	}
</script>

	