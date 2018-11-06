<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
	<link rel="stylesheet" href="style/css/style.css">
	<link rel="stylesheet" href="style/css/contador.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="lightbox/dist/css/lightbox.css">

	<title>P&C</title>
</head>

<body class="fadeIn">
	<section id="home">
		<nav class="navbar navbar-expand-md  bg-opacidade">

			<a class="navbar-brand ml-5" href="#">Carol e Paulo</a>	
			
			 <div class="container1">
       
        <div class="count">
          <div class="countd">
            <span id="days">00</span>
            Dias
          </div>

          <div class="countd">
            <span id="hours">00</span>
            Hr
          </div>

          <div class="countd">
            <span id="minutes">00</span>
            Min
          </div>

          <div class="countd">
            <span id="seconds">00</span>
            Sec
          </div>
        </div>
    </div>

			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarmobile">
        		<i class="fa fa-bars black" aria-hidden="true"></i>
			</button>

			<div class="collapse navbar-collapse text-center justify-content-end mr-5" id="navbarmobile">
				<ul class="navbar-nav nav">
					<li class="nav-item">
						<a class="nav-link " href="index.php">
              				Home
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#galeria">
							Galeria
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cerimonia.php">
							Cerimônia
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
               				Fornecedores
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php#contato">
              				 Contato<i class=" ml-2 fa d-inline fa-lg fa-envelope-o"></i>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</section>
	
	<section id="bannerCerimonia">
	
		<img class="bannerCerimonia"src="fotos/carousel/cerimonia.jpg">
	
	</section>
	<section id="mensagemBoasVindas">
	<div>

		<div class="row">

			<div class="col-12 teste">

				<div class="col-12 text-center mensagem">
					<h1 class="display-4">Cerimônia / Festa</h1>
					<br>
					
					<h1>_________</h1>
					<br>
					<br>
					<br>
					<h3 class="lead-3">Não percam nossa linda e emocionante cerimônia. Contamos com você para ser ainda mais especial! </h3>
					<br>
					<br>
					<p>Local: Chácara das Grevilhas</p>
					<p>As 19:00hrs</p>
					

				</div>

			</div>

		</div>

	</div>
</section>
	<section id="imagensChacara">
	
		<div class="row text-center">
		
			<div class="col-12">
			
				<img  class="imgChacara"src="fotos/carousel/gre1.jpg">
				<img  class="imgChacara"src="fotos/carousel/gre2.jpg">
				<img  class="imgChacara"src="fotos/carousel/gre3.jpg">
			
			</div>
		
		</div>
	
	</section>

	<section id="mapa">
	
		<div class="text-center mapa mt-5">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.7981505360084!2d-53.33440854265072!3d-23.77615488438745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f2d69a67aa8573%3A0x24d64b785ea07ef5!2sR.+A%2C+2160+-+Parque+Dom+Pedro+II%2C+Umuarama+-+PR%2C+87503-050!5e0!3m2!1spt-BR!2sbr!4v1532001606310" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
	
	<section id="mapa2">
	
		<div class="container text-center mapa2">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.7981505360084!2d-53.33440854265072!3d-23.77615488438745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f2d69a67aa8573%3A0x24d64b785ea07ef5!2sR.+A%2C+2160+-+Parque+Dom+Pedro+II%2C+Umuarama+-+PR%2C+87503-050!5e0!3m2!1spt-BR!2sbr!4v1532001606310" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
	


	<br>
	<br>
	<section id="footer">
	
		  <div class="py-5 bg-dark text-white" >
			<div class="container">
			 
			  <div class="row">
				<div class="col-md-12 mt-3 text-center">
				  <p>© Copyright 2018 NextKode</p>
				</div>
			  </div>
			</div>
		  </div>
	
	</section>
	
	<!-- Botao de voltar ao topo-->

	<div class="btn-voltar text-center">
		<a href="#home"><i class="fa fa-angle-up fa-3x imgTop" aria-hidden="true"><br><p>Topo</p></i></a>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
	<script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>

	<script>
	$('.nav a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 100
	}, 1800);
});
		
		$('.btn-voltar a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 100
	}, 1300);
});

		$('.btn-voltar').hide();
		
		$(window).scroll(function(){
			if($(this).scrollTop()>0){
				$('.btn-voltar').fadeIn()
			}else{
				$('.btn-voltar').fadeOut()
			}
		});
	</script>
	
	<script type="text/javascript">

  var count = new Date("dec 30,2018 00:00:00").getTime();
  var x = setInterval(function() {
    var now = new Date().getTime();
    var d = count - now;

    var days = Math.floor(d/(1000*60*60*24));
    var hours = Math.floor((d%(1000*60*60*24))/(1000*60*60));
    var minutes = Math.floor((d%(1000*60*60))/(1000*60));
    var seconds = Math.floor((d%(1000*60))/1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if(d <= 0){
      clearInterval(x);
    }
  },1000);
</script>
</body>

</html>
