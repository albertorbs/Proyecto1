<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Coca Cola la bebida">
		<meta name="keywords" content="bebida, gaseosa, coca">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Inicio Coca Cola
		</title>
		<link rel="shortcut icon" href="img/favicon.png">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,500;0,700;1,100&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="style.css">
		<script src="https://kit.fontawesome.com/b07efc7767.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<a href="index.html">
					<img src="img/logo.svg" class="logo">
				</a>
				<nav>
					<a href="#inicio">Inicio</a>
					<a href="#nosotros">Nosotros</a>
					<a href="#servicios">Servicios</a>
					<a href="#galeria">Galeria</a>
					<a href="#contactenos">Contactenos</a>
				</nav>
				<a href="#" class="hamb"><i class="fas fa-bars"></i></a>
			</div>
		</header>
		<main>
			<section id="inicio">
				<img src="img/bannerprincipal.jpg">
				<div class="bloque-inicio">
					<h1>Bienvenidos a Coca Cola</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies vestibulum lacus, nec cursus ipsum tincidunt ut. 
					</p>
					<a href="#nosotros" class="boton boton-rojo">Ver mas</a>
				</div>
			</section>
			<section id="nosotros" class="seccion">
				<div class="container">
					<p>malesuada eget ante sit amet, interdum consectetur lorem. Donec odio purus, elementum vitae libero quis, vulputate gravida risus. Sed mi eros, fermentum quis lobortis ut, maximus quis neque.</p>
				</div>
			</section>
			<section id="servicios" class="seccion">
				<div class="container">
					<div class="row">
						<div class="columna columna-33 columna-mobile-100">
							<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio1.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 1</h3>
									<p>Cras luctus erat scelerisque ante viverra, vitae lacinia quam vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
									<a href="#" class="boton boton-blanco">Ver mas</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
								<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio2.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 2</h3>
									<p>Cras luctus erat scelerisque ante viverra, vitae lacinia quam vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
									<a href="#" class="boton boton boton-blanco">Ver mas</a>
								</div>
							</div>
						</div>
						<div class="columna columna-33 columna-mobile-100">
								<div class="bloque-servicio">
								<div class="bloque-img-servicio cuadrado-perfecto">
									<img src="img/servicio3.jpg">
								</div>
								<div class="bloque-contenido-servicio">
									<h3>Servicio 3</h3>
									<p>Cras luctus erat scelerisque ante viverra, vitae lacinia quam vulputate. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</p>
									<a href="#" class="boton boton boton-blanco">Ver mas</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="galeria">
				<div class="container-fluid">
					<div class="row">
						<div class="columna-33 columna-mobile-50">
							<div class="cuadrado-perfecto">
								<img src="img/servicio1.jpg">
								<h4>Imagen1</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
								<div class="cuadrado-perfecto">
								<img src="img/servicio2.jpg">
								<h4>Imagen2</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
								<div class="cuadrado-perfecto">
								<img src="img/servicio3.jpg">
								<h4>Imagen3</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
								<div class="cuadrado-perfecto">
								<img src="img/servicio1.jpg">
								<h4>Imagen4</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
								<div class="cuadrado-perfecto">
								<img src="img/servicio2.jpg">
								<h4>Imagen5</h4>
							</div>
						</div>
						<div class="columna-33 columna-mobile-50">
								<div class="cuadrado-perfecto">
								<img src="img/servicio3.jpg">
								<h4>Imagen6</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="contactenos" class="seccion">
				<iframe width="520" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=07970&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"></iframe>
				<div class="container-fluid">
					<div class="row">
						<div class="columna columna-41 columna-mobile-100 empujar-58 empujar-mobile-0 sinpadding-mobile">
							<form action="index.php" method="post">
								<div class="form-block">
									<input type="text" name="nombre" class="form-control" placeholder="Nombre">
								</div>
								<div class="form-block">
									<input type="email" name="email" class="form-control" placeholder="Email">
								</div>
									<div class="form-block">
									<textarea name="mensaje" placeholder="Mensaje"></textarea>
								</div>
									<div class="form-block bloque-ultimo">
									<input type="submit" class="boton boton-negro" value="Enviar">
								</div>
								<?php

									if($_SERVER["REQUEST_METHOD"] == "POST")
									{
										$nombre = $_POST["nombre"] ;
										$email = $_POST["email"] ;
										$mensaje = $_POST["mensaje"] ;

										if(isset($nombre))
										{
											if(isset($email))
											{
												if(isset($mensaje))
												{
													$para = "alberto.roblesortega@gmail.com"; 
													$asunto = "Esto es una prueba";
													$cuerpo = $nombre."\n".$email."\n".$mensaje;
													$adicional = "From: alberto@gmail.com";

													mail($para,$asunto,$cuerpo,$adicional);
												?>
													<p>Envio exitoso</p>
												<?php
												}
											}
										}
									}
								?>
							</form>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer class="seccion">
			<div class="container">
				<div class="row">
					<div class="columna columna-25 columna-mobile-100">
						<img src="img/logo-blanco.png" class="logo-footer">
						<p>Donec euismod ipsum ac elit dictum lacinia. Integer iaculis posuere orci a ornare. Pellentesque tempus fermentum sollicitudin.
						</p>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Temas relacionados.
						</h3>
						<ul>
							<li><a href="#">Tema 1</a></li>
							<li><a href="#">Tema 2</a></li>
							<li><a href="#">Tema 3</a></li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Datos de contacto
						</h3>
						<ul>
							<li>alberto.robles@gmail.com</li>
							<li>+525521045775</li>
							<li>Av 607<br> bosques de aragon</li>
						</ul>
					</div>
					<div class="columna columna-25 columna-mobile-100">
						<h3>
							Redes Sociales
						</h3>
						<ul class="redes">
     						<li>
     							<a href="#">
     							 	<i class="fab fa-facebook-f"></i>
     							</a>
     						</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="barra-footer">
				&copy; Derechos Reservados - 2021
			</div>
		</footer>
		<script src="js/jquery.js"></script>
		<script src="js/funciones.js"></script>
	</body>
</html>