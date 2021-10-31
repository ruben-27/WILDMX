<?php
    $doc = new DOMDocument();
    $doc->load("../XML/datos3.xml");
    $datos = $doc->getElementsByTagName("gafasfox1");
?>
<!DOCTYPE>
<!--Rubén Torres-->
<html>
	<head>
    <meta charset="utf-8">
    <meta name="description" content="wildmx" />
    <meta name="keywords" content="wild, mx, motocross, moto, deporte," />
    <title>WILD MX® | FOX VUE DUSC</title>
    <link rel="shortcut icon" href="../imagenes/logo/CascoDorado2.ico" />
    <link rel="stylesheet" href="../CSS/detalle.css" type="text/css">
</head>

<body>
    <a name="arriba"></a>
    <div id="cabecera">
        <a href="../index.php"><img src="../imagenes/logo/WildMX_Horizontal2.png" alt="Logo" id="logo1" /></a>
    </div>
    <header>
        <nav>
            <a href="../index.php">INICIO</a>
            <a href="../motos.php">MOTOS</a>
            <a href="../equipo.php" id="seleccionado">EQUIPO</a>
            <a href="../competiciones.php">COMPETICIONES</a>
            <a href="../otros.php">OTROS</a>
            <span>
                <a href="../iniciosesion.html">INICIAR SESION</a>
                <a href="../registro.html">REGISTRARSE</a>
            </span>
        </nav>
    </header>
    <div id="principal">
        <table id="tabla1">
            <?php
                foreach( $datos as $gafasfox1 )
                    {
                        $titulo = $gafasfox1->getElementsByTagName( "titulo" )->item(0)->nodeValue;

                        echo
                        "						
                            <caption>$titulo</caption>
                        "
                        ;
                    }
			?>
            <tr>
                <td id="imagentabla">
                    <?php
                        foreach( $datos as $gafasfox1 )
                            {
                                $portada = $gafasfox1->getElementsByTagName( "portada" )->item(0)->nodeValue;

                                echo
                                "						
                                    <img src=$portada>
                                "
                                ;
                            }
                    ?>
                </td>
                <td>
                    <table id="subtabla">
                        <tr>
                            <td id="precio1" class="precio">PRECIO</td>
                        </tr>
                        <tr>
                            <td id="precio2" class="precio">
                                <?php
                                    foreach( $datos as $gafasfox1 )
                                        {
                                            $precio = $gafasfox1->getElementsByTagName( "precio" )->item(0)->nodeValue;

                                            echo
                                            "						
                                                $precio €
                                            "
                                            ;
                                        }
                                ?> 
                            </td>
                        </tr>
                        <tr>
                            <td id="hr"><hr></td>
                        </tr>
                        <tr>
                            <td class="valoracion">Valoración:</td>
                        </tr>
                        <tr>
                            <td class="valoracion">
                                <?php
                                     foreach( $datos as $gafasfox1 )
                                        {
                                            $valoracion = $gafasfox1->getElementsByTagName( 'valoracion' )->item(0)->nodeValue;

                                            echo
                                            "		
                                                <img src=$valoracion>
                                            "
                                            ;
                                        }
                                ?> 
                            </td>
                        </tr>
                        <tr>
                            <td id="comprarcenter">
                                <a href="https://www.motocrosscenter.com/shop/es/gafas/380638-gafas-fox-vue-dusc-2020-multicolor-lente-espejo-spark-24711-922-os.html?extraParams=[object%20Object]" target="_blank">
                                    <div>
                                        <img src="../imagenes/logo/motocrosscenter.png" alt="" />
                                        <span>Comprar en MotocrossCenter</span>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div id="secundario">
            <h1>Productos relacionados</h1>
            <table id="relacionado">
                <tr>
                    <td>
                        <?php
                             foreach( $datos as $gafasfox1 )
                                {
                                    $imagenpr1 = $gafasfox1->getElementsByTagName( 'imagenpr1' )->item(0)->nodeValue;
                                    $titulo1 = $gafasfox1->getElementsByTagName( 'titulo1' )->item(0)->nodeValue;
                                    $link1 = $gafasfox1->getElementsByTagName( 'link1' )->item(0)->nodeValue;

                                    echo
                                    "	 
                                        <a href=$link1>
                                            <img src=$imagenpr1>
                                            <p>$titulo1</p>
                                        </a>
                                    "
                                    ;
                                }
                        ?>
                    </td>
                    <td>
                        <?php
                             foreach( $datos as $gafasfox1 )
                                {
                                    $imagenpr2 = $gafasfox1->getElementsByTagName( 'imagenpr2' )->item(0)->nodeValue;
                                    $titulo2 = $gafasfox1->getElementsByTagName( 'titulo2' )->item(0)->nodeValue;
                                    $link2 = $gafasfox1->getElementsByTagName( 'link2' )->item(0)->nodeValue;

                                    echo
                                    "	 
                                        <a href=$link2>
                                            <img src=$imagenpr2>
                                            <p>$titulo2</p>
                                        </a>
                                    "
                                    ;
                                }
                        ?>
                    </td>
                    <td>
                        <?php
                             foreach( $datos as $gafasfox1 )
                                {
                                    $imagenpr3 = $gafasfox1->getElementsByTagName( 'imagenpr3' )->item(0)->nodeValue;
                                    $titulo3 = $gafasfox1->getElementsByTagName( 'titulo3' )->item(0)->nodeValue;
                                    $link3 = $gafasfox1->getElementsByTagName( 'link3' )->item(0)->nodeValue;

                                    echo
                                    "	 
                                        <a href=$link3>
                                            <img src=$imagenpr3>
                                            <p>$titulo3</p>
                                        </a>
                                    "
                                    ;
                                }
                        ?>
                    </td>
                    <td>
                        <?php
                             foreach( $datos as $gafasfox1 )
                                {
                                    $imagenpr4 = $gafasfox1->getElementsByTagName( 'imagenpr4' )->item(0)->nodeValue;
                                    $titulo4 = $gafasfox1->getElementsByTagName( 'titulo4' )->item(0)->nodeValue;
                                    $link4 = $gafasfox1->getElementsByTagName( 'link4' )->item(0)->nodeValue;

                                    echo
                                    "	 
                                        <a href=$link4>
                                            <img src=$imagenpr4>
                                            <p>$titulo4</p>
                                        </a>
                                    "
                                    ;
                                }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <h1>Descripción:</h1>
            <table id="tabla3">
                <tr>
                    <td>
                        <?php
                        foreach( $datos as $gafasfox1 )
                            {
                                $descripcion = $gafasfox1->getElementsByTagName( "descripcion" )->item(0)->nodeValue;

                                echo
                                "						
                                    <p>$descripcion</p>
                                "
                                ;
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <footer>
        <hr />
        <a href="#arriba"><img src="../imagenes/logo/WildMX.png" alt="Logo" id="logofooter" /></a>
        <h1>REDES SOCIALES</h1>
        <div class="div1">
            <a href="https://es-es.facebook.com/" target="blank"><img src="../imagenes/contacto/facebook.gif" alt="Facebook" /></a>
            <a href="https://twitter.com/login" target="blank"><img src="../imagenes/contacto/twitter.gif" alt="Twitter" /></a>
            <a href="https://www.instagram.com/" target="blank"><img src="../imagenes/contacto/instagram.gif" alt="Instagram" /></a>
            <a href="https://www.youtube.com/" target="blank"><img src="../imagenes/contacto/youtube.gif" alt="Youtube" /></a>
        </div>
        <h1>CONTACTO</h1>
        <div class="div1">
            <a href="https://www.google.es/maps/place/Wall+St,
				+New+York,+NY,+EE.+UU./@40.7060401,-74.0110143,1
				7z/data=!3m1!4b1!4m5!3m4!1s0x89c25a165bedccab:0x2
				cb2ddf003b5ae01!8m2!3d40.7060361!4d-74.0088256" target="blank">
                <img src="../imagenes/contacto/casa.gif" alt="Ubicacion" />
            </a>
            <a href="tel:+34689602082" target="blank"><img src="../imagenes/contacto/telefono.gif" alt="Telefono" /></a>
            <a href="../contacto.html"><img src="../imagenes/contacto/correo.gif" alt="Correo" /></a>
        </div>
        <div id="div2">
            <div id="div3">
                &copy;2020 Todos los derechos reservados | <a href="../index.php">WILD MX</a>
                <span>
                    <a href="../terminos.html" target="blank">Términos y condiciones</a> | <a href="http://politicadecookies.com/cookies.php" target="blank">Política de Cookies</a> | <a href="https://www.aepd.es/es/politica-de-privacidad-y-aviso-legal" target="blank">Política de Privacidad</a>
                </span>
            </div>
        </div>
    </footer>
</body></html>