<!DOCTYPE>
<!--Rubén Torres-->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="wildmx">
		<meta name="keywords" content="wild, mx, motocross, moto, deporte,">
		<title>WILD MX®</title>
		<link rel="shortcut icon" href="imagenes/logo/CascoDorado2.ico">
		<link rel="stylesheet" href="CSS/index.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<a name="arriba"></a>
		<div id="cabecera">
			<a href="#"><img src="imagenes/logo/WildMX_Horizontal2.png" alt="Logo" id="logo1"/></a>
		</div>
		<header>
			<nav>
				<a href="#" id="seleccionado">INICIO</a>
				<a href="motos.php">MOTOS</a>
				<a href="equipo.php">EQUIPO</a>
				<a href="competiciones.php">COMPETICIONES</a>
				<a href="otros.php">OTROS</a>
				<span>
					<a href="iniciosesion.html">INICIAR SESION</a>
					<a href="registro.html">REGISTRARSE</a>
				</span>
			</nav>
		</header>
		<img src="imagenes/banner/motocross.jpg" alt="Motocross" id="banner"/>
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
            <h1>Motocross</h1>
            <p>
                El Motocross es una forma de competición en todo terreno celebrada en circuitos cerrados. El deporte fue evolucionando desde las pruebas celebradas en el Reino Unido. El motocross es un deporte físicamente exigente que tiene lugar en todo tipo de condiciones.
                <br><br>
                Las primeras carreras de motocross surgieron en Reino Unido tales como Auto-Cycle Clubs en 1906 y el Scottish Six Days Trial que empezó en 1909. Cuando un delicado equilibrio y una estricta puntuación de los ensayos fueron dispensadas a favor de una carrera para ser el piloto más rápido en llegar a la meta, fue llamado scramble, dice que se originó en la frase, "una rara pelea vieja" que describe una de esas carreras tempranas.Originalmente conocido como carreras de scramble en el Reino Unido, como el deporte creció en popularidad, las competiciones se hicieron conocidas internacionalmente como carreras de motocross, mediante la combinación de la palabra francesa para motocyclette, moto abreviadamente, con “cross country” o "a campo traviesa" en español. La primera carrera de scramble tuvo lugar en Camberley, Surrey en 1924. Durante los años 30, este deporte obtuvo gran popularidad , especialmente en Gran Bretaña donde los equipos de Birmingham Small Arms Company (BSA), Norton, Matchless, Rudge, y AJS compitieron en los eventos. La intensa competencia sobre terreno accidentado condujo a las mejoras técnicas en motocicletas. Los marcos rígidos adquirieron suspensión en los años 30, y las horquillas y la suspensión trasera aparecieron en los 50, varios años antes de que se incorporaran a la mayoría de las motos de calle. El periodo después de la segunda guerra mundial fue dominado por BSA la cual se había convertido en la mayor compañía de motocicletas del mundo Los competidores de BSA dominaron las competencias en los cuarenta.
            </p>
            <div id="iframe">
                <iframe src="https://www.youtube.com/embed/qCyKSFyjDJQ?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h1>Lo más buscado</h1>
			<div id="div_productos">
				<a href="motos.php" class="productos">
					<div>
						<img src="imagenes/productos/logos/motos.jpg" alt="Motos"/>
						<p>MOTOS</p>
					</div>
				</a>
				<a href="equipo.html" class="productos">
					<div>
						<img src="imagenes/productos/logos/equipo.jpg" alt="Equipo"/>
						<p>EQUIPO</p>
					</div>
				</a>
				<a href="competiciones.html" class="productos">
					<div>
						<img src="imagenes/productos/logos/competiciones.jpg" alt="Competiciones"/>
						<p>COMPETICIONES</p>
					</div>
				</a>
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
            <div class="bottom">
                <h1>¿Quién somos?</h1>
                <p class="texto">
                    Somos una pequeña empresa estudiante que se introduce humildemente en el sector del 
                    desarrollo web y dentro de este del mundo del motor como lo es este gran deporte que 
                    amamos todos, el Motocross. Esta empresa, <span>Wild MX</span>, es tan solo un 
                    proyecto sin ningún tipo de ánimo de lucro, y está hecho por y exclusivamente diversión y aprendizaje.
                    <br><br>
                    <span>Wild MX</span> es una página de Motocross para que los más aficionados a este 
                    ámbito puedan disfrutar todo lo que rodea al mundo del Motocross, viendo todo tipo de productos 
                    y complementos, a parte de sus valoraciones y precios.
                </p>
                <h1>¿Qué hacemos?</h1>
                <p class="texto">
                    Como hemos comentado antes, <span>Wild MX</span> es una página que no pretende obtener 
                    ningún tipo de beneficio, así que, ¿por que añadir productos con valoraciones y sus respectivos 
                    precios? Simplemente para informar, esta es una página informativa la cuál no vende 
                    absolutamente nada pero ofrece el servicio de información sobre los productos del sector. 
                    <span>Wild MX</span> se encarga de incluir todo tipo de productos y complementos para 
                    que se valore si se desea comprar el producto en otra página, o al ser demasiado caro, es mejor 
                    quedarse mirándolo en nuestra página.
                </p>
                
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
					&copy;2020 Todos los derechos reservados | <a href="#">WILD MX</a>
					<span>
						<a href="terminos.html" target="blank">Términos y condiciones</a> | <a href="http://politicadecookies.com/cookies.php" target="blank">Política de Cookies</a> | <a href="https://www.aepd.es/es/politica-de-privacidad-y-aviso-legal" target="blank">Política de Privacidad</a>
					</span>
				</div>
			</div>
		</footer>
	</body>
</html>