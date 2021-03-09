<!DOCTYPE>
<!--Rubén Torres-->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="wildmx"/>
		<meta name="keywords" content="wild, mx, motocross, moto, deporte,"/>
		<title>WILD MX® | Otros</title>
		<link rel="shortcut icon" href="imagenes/logo/CascoDorado2.ico"/>
		<link rel="stylesheet" href="CSS/tipoproductos.css" type="text/css">
	</head>
	<body>
		<a name="arriba"></a>
		<div id="cabecera">
			<a href="index.php"><img src="imagenes/logo/WildMX_Horizontal2.png" alt="Logo" id="logo1"/></a>
		</div>
		<header>
			<nav>
				<a href="index.php">INICIO</a>
				<a href="motos.php">MOTOS</a>
				<a href="equipo.php">EQUIPO</a>
				<a href="competiciones.php">COMPETICIONES</a>
				<a href="#" id="seleccionado">OTROS</a>
				<span>
					<a href="iniciosesion.html">INICIAR SESION</a>
					<a href="registro.html">REGISTRARSE</a>
				</span>
			</nav>
		</header>
		<img src="imagenes/banner/motocross5.jpg" alt="Motocross" id="banner"/>
		<div id="div_tiempo">
            <table id="tiempo">
                <?php
                    $doc = new DOMDocument();
                    $doc->load("http://xml.tutiempo.net/xml/7414.xml");
                    $datos = $doc->getElementsByTagName("datos");
                    foreach( $datos as $datos )
                    {
                        $nombre = $datos->getElementsByTagName( "nombre" )->item(0)->nodeValue;
                        $pais = $datos->getElementsByTagName( "pais" )->item(0)->nodeValue;
                        $fecha = $datos->getElementsByTagName( "fecha" )->item(0)->nodeValue;
                        $icono = $datos->getElementsByTagName( "icono" )->item(0)->nodeValue;
                        $temperatura = $datos->getElementsByTagName( "temperatura" )->item(0)->nodeValue;
                        $texto = $datos->getElementsByTagName( "texto" )->item(0)->nodeValue;

                        echo
                        "
                            <caption>$nombre, $pais <br> $fecha</caption>
                            <tr>
                                <td><img src=$icono></td>
                                <td>$texto</td>
                                <td id=temp>$temperatura ºC</td>
                            </tr>
                        "
                        ;
                    }
                ?>
            </table>
		</div>
		<div id="principal">
			<div id="div_productos">
				<h1>Otros</h1>
				<p class="p">
					¿Creías que el mundo del Motocross acababa aqui? ¿Con tan solo motos, equipo y 
					competiciones? NO, este es un mundo gigantesco sobre el cual se han hecho 
					referencias de él en otros ámbitos, como bien puedan ser patrocinadores, cine, e incluso videojuegos.
				</p>
				<a href="marcas.html" class="productos">
					<div>
						<img src="imagenes/productos/logos/patrocinadores.jpg" alt="Patrocinadores"/>
						<p>PATROCINADORES</p>
					</div>
				</a>
				<a href="juegos.html" class="productos">
					<div>
						<img src="imagenes/productos/logos/juegos.jpg" alt="Videojuegos"/>
						<p>VIDEOJUEGOS</p>
					</div>
				</a>
				<a href="peliculas.html" class="productos">
					<div>
						<img src="imagenes/productos/logos/peliculas.jpg" alt="Películas"/>
						<p>PELICULAS</p>
					</div>
				</a>
			</div>
		</div>
		<footer>
			<hr/>
			<a href="#arriba"><img src="imagenes/logo/WildMX.png" alt="Logo" id="logofooter"/></a>
			<h1>REDES SOCIALES</h1>
			<div class="div1">
				<a href="https://es-es.facebook.com/" target="blank"><img src="imagenes/contacto/facebook.gif" alt="Facebook"/></a>
				<a href="https://twitter.com/login" target="blank"><img src="imagenes/contacto/twitter.gif" alt="Twitter"/></a>
				<a href="https://www.instagram.com/" target="blank"><img src="imagenes/contacto/instagram.gif" alt="Instagram"/></a>
				<a href="https://www.youtube.com/" target="blank"><img src="imagenes/contacto/youtube.gif" alt="Youtube"/></a>
			</div>
			<h1>CONTACTO</h1>
			<div class="div1">
				<a href="https://www.google.es/maps/place/Wall+St,
				+New+York,+NY,+EE.+UU./@40.7060401,-74.0110143,1
				7z/data=!3m1!4b1!4m5!3m4!1s0x89c25a165bedccab:0x2
				cb2ddf003b5ae01!8m2!3d40.7060361!4d-74.0088256" target="blank">
					<img src="imagenes/contacto/casa.gif" alt="Ubicacion"/>
				</a>
				<a href="tel:+34689602082" target="blank"><img src="imagenes/contacto/telefono.gif" alt="Telefono"/></a>
				<a href="contacto.html"><img src="imagenes/contacto/correo.gif" alt="Correo"/></a>
			</div>
			<div id="div2">
				<div id="div3">
					&copy;2020 Todos los derechos reservados | <a href="index.php">WILD MX</a>
					<span>
						<a href="terminos.html" target="blank">Términos y condiciones</a> | <a href="http://politicadecookies.com/cookies.php" target="blank">Política de Cookies</a> | <a href="https://www.aepd.es/es/politica-de-privacidad-y-aviso-legal" target="blank">Política de Privacidad</a>
					</span>
				</div>
			</div>
		</footer>
	</body>
</html>