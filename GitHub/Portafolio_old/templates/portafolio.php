<<!DOCTYPE html>
<html lang="es">
<head>
	<title>Portafolio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet"  href="../static/css/normalize.css">
	<link rel="stylesheet"  href="../static/css/portafolio.css">
</head>
<body>
	<header class="yo">
		<nav class="MainMenu">
			<ul class="MainMenu-list">
				<li class="MainMenu-item">
					<a class="MainMenu-link" href="../../sobremi/templates/sobremi.html#sobremi">Sobre mí</a>
				</li>
				<li class="MainMenu-item">
					<a class="MainMenu-link" href="#perfil">Perfil</a>
				</li>
				<li class="MainMenu-item">
					<a class="MainMenu-link" href="#trabajo">Trabajo</a>
				</li>
				<li class="MainMenu-item">
					<a class="MainMenu-link" href="#contacto">Contacto</a>
				</li>
			</ul>
		</nav>
		<figure class="Header-imageContainer">
			<img class="Work-image" src="../static/images/avatar.jpg" alt="Imagen personal" class="Header-image" />
			<figcaption class="Work-description">
				<a class="Header-link" href="http://twitter.com/tassor80" target="_black">@tassor80</a>
			</figcaption>
			<p class="Header-name"> Sergio Moya González </p>
		</figure>

	</header>

	<section id="perfil" class="Perfil">
		<h2 class="Perfil-title"> Mi perfil </h2>
		<p class="Perfil-description">
			Hola! Si llegastes hasta aquí puedes ver mi portafolio y contactarme
		</p>	
		<a class="Perfil-link" href="http://twitter.com/@tassor80/" target="_black">@tassor80</a>
		<a class="Perfil-link" href="https://github.com/Tassor80/" target="_black">Mi GitHub</a>
	</section>
	
	<section id="trabajo" class="trabajo">
		<h2 class="Work-title">Mi trabajo</h2>
		<article class="Work-item">
			<figure class="Work-imageContainer">
				<a href="../../jose/templates/jose.html"target="_black"><img class="Work-image2" src="../static/images/redbility.jpg" alt="Es la descripcion de mi imagen"></a>
				<figcaption class="Work-description">HTML5, CSS3, responsive Design</figcaption>
			</figure>
		</article>
		<article class="Work-item">
			<figure class="Work-imageContainer">
				<a href="../../jose2/templates/jose2.html"target="_black"><img class="Work-image2" src="../static/images/redbility2.jpg" alt="Es la descripcion de mi imagen"></a>
				<figcaption class="Work-description">HTML5, CSS3</figcaption>
			</figure>
		</article>	
		<article class="Work-item">
			<figure class="Work-imageContainer">
				<a href="../../wozzeck/index.html"target="_black"><img class="Work-image2" src="../static/images/woz.jpg" alt="Es la descripcion de mi imagen"></a>
				<figcaption class="Work-description">HTML5, CSS3</figcaption>
			</figure>
		</article>	
		<article class="Work-item">
			<figure class="Work-imageContainer">
				<a href="../../fanontour/templates/fanontour.html"target="_black"><img class="Work-image2" src="../static/images/fanontour.jpg" alt="Es la descripcion de mi imagen"></a>
				<figcaption class="Work-description">HTML5, CSS3, responsive Design</figcaption>
			</figure>
		</article>	
		<article class="Work-item">
			<figure class="Work-imageContainer">
				<a href="../../sergio bq/templates/bq.html"target="_black"><img class="Work-image2" src="../static/images/bq.jpg" alt="Es la descripcion de mi imagen"></a>
				<figcaption class="Work-description">HTML5, CSS3, responsive Design</figcaption>
			</figure>
		</article>	
		<article class="Work-item">
			<figure class="Work-imageContainer">
				<a href="../../marcadores/templates/marcadores.html"target="_black"><img class="Work-image2" src="../static/images/f1.jpg" alt="Es la descripcion de mi imagen"></a>
				<figcaption class="Work-description">HTML5, CSS3, responsive Design</figcaption>
			</figure>
		</article>		
	</section>
	
	<footer id="contacto" class="contacto">
		<div class="Footer1">		
			<h3 class="Footer-title">Contacto</h3>
			<p class="Footer-description">Si tienes una sugerencia o quieres trabajar conmigo ponte en contacto con este formulario</p>
		</div>	
		<form class="footer-form" action="../contacto/envio.php" method="post">
			<input name="nombre" class="Footer-formInput" type="text" placeholder="Nombre"/>
			<input name="email" class="Footer-formInput" type="email" placeholder="Email"/>
			<textarea name="motivo" class="Footer-textarea"placeholder="Motivo"></textarea>
			<button class="Footer-buttom" type="submit">Contactarme</button>
		
			<?php if(isset($_GET["envio"])){
				if($_GET["envio"] == "exito"){
					?> <p class="msj_respuesta exito">El email fué enviado con éxito</p>
				<?php }else{ ?>
					<p class="msj_respuesta fallo">Error: No se pudo enviar el email </p>
				<?php } 
			} ?>
		</form>
		

	</footer>
</body>
</html>