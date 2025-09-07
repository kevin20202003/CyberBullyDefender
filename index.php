<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="imagenes/logo prueba.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/e9f58d382f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="imagenes/bx-menu.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Enlace a Bootstrap CSS -->
    <title>SEGUT</title>
</head>

<style>
    .promoto {
        margin-left: 3%;
    }

    .image-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; /* Centrar horizontalmente */
    }

    .container35 {
        flex: 0 0 calc(26% - 20px);
        display: flex;
        flex-direction: column;
        align-items: center; /* Centrar verticalmente */
    }

    @media screen and (max-width: 768px) {
        .container35 {
            flex: 0 0 100%; /* Elimina la propiedad 'flex' */
        }
    }
</style>

<?php
// Llamada al archivo HTML utilizando la función include o require
include 'estilos.html';
?>

<body>


    <div class="vi">
        <video autoplay loop muted>
            <source src="imagenes/planeta.mp4" type="video/mp4">
        </video>
    </div>

    <section class="ojala">

    <img src="imagenes/l.png" alt="" class="logo">
        <div class="cyber">
             <h1>SEGUT</h1>
           
        </div>

        <div class="subcyber">
            <p class="copy" style="text-align: center">"Tu seguridad total, es nuestra máxima prioridad."</p>
        </div>

    </section>
    <!--Anuncio-->

    <div class="overlay">
        <div class="advertisement">

            <div id="Div1" runat="server">
                <div class="content-container">

                    <?php
                    require("conexion.php");
                    $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
                    if (mysqli_connect_errno()) {
                        echo "Fallo al conectar con la base de datos";
                        exit();
                    }

                    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra en la base de datos");
                    mysqli_set_charset($conexion, "utf8");
                    $consulta = "SELECT * FROM misvideos";
                    $resultados = mysqli_query($conexion, $consulta);

                    while ($fila = mysqli_fetch_array($resultados)) {
                        $url = $fila['url'];

                        // Verificar el tipo de contenido por la extensión de la URL o por otro criterio
                        if (preg_match('/\.(mp4|avi|mov|flv)$/i', $url)) {
                            // Si es una URL de video, muestra el video
                            echo "<video id='anuncio-video' src='$url' controls='controls' width='800px' height='450px' autoplay></video>
                            ";
                        } elseif (preg_match('/\.(jpg|jpeg|png|gif)$/i', $url)) {
                            // Si es una URL de imagen, muestra la imagen
                            echo "<img src='$url' class='imganuncio' alt='Imagen' width='970px' height='450px'>";
                        } else {
                            // Si no es un video ni una imagen, asume que es texto
                            echo "<div class='text-container text-center'>$url</div>";
                        }
                    }

                    mysqli_close($conexion);
                    ?>
                </div>
                <span class="close-btn">&times;</span>
            </div>
        </div>
    </div>





    <!-- Contenido de la pantalla 1 -->

    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'menu.html';
    ?>

    <div class="container1">
        <div class="row">
            <div class="col-md-6">
                <div class="concepto1">
                    <div class="aaa">
                        <div style="justify-content: center;">
                            <img src="imagenes/acoso1.jpg" class="formimg" alt="Imagen">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ci1">
                    <div class="description" style="text-align: justify; margin-right: 10%;">
                        <h2>Cyberbullying-bullying</h2>
                        <p>
                            El acoso, conocido como bullying, abarca comportamientos dañinos y repetitivos que pueden
                            incluir agresiones físicas, amenazas, burlas y difusión de rumores, causando daño emocional
                            o psicológico. A diferencia del cyberbullying, que se refiere al acoso en línea, el bullying
                            puede ocurrir en diversos entornos, como la escuela o el trabajo. Sus efectos son
                            perjudiciales, especialmente para adolescentes y jóvenes. Es crucial abordar tanto el
                            bullying como el cyberbullying para promover entornos seguros y saludables.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="concepto2">
                    <div class="aaa">
                        <div style="justify-content: center;">
                            <img src="imagenes/seguridad.jpg" class="formimg" alt="Imagen">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ci2">
                    <div class="description" style="text-align: justify; margin-right: 10%;">
                        <h2>Ciberseguridad</h2>
                        <p>
                            La ciberseguridad se refiere a la protección de sistemas informáticos, redes y
                            dispositivos electrónicos contra ataques, daños o accesos no autorizados. En un mundo cada
                            vez más
                            digitalizado, la ciberseguridad se ha vuelto crucial para garantizar la confidencialidad,
                            integridad y
                            disponibilidad de la información sensible. Esto implica el uso de medidas preventivas y
                            técnicas
                            avanzadas para detectar y responder a posibles amenazas, como virus, malware, ransomware y
                            otras
                            formas de ataques cibernéticos que podrían comprometer la seguridad de los datos y la
                            privacidad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div style="text-align: center;">
                    <div class="description" style="width: 90%; margin: 20px; padding: 20px;">
                        <h2>Visión de la empresa</h2>
                        <br>
                        <p style="text-align: justify;">
                            "Nuestra visión es construir un mundo digital seguro y respetuoso, donde todas las personas
                            puedan
                            disfrutar de una experiencia en línea libre de temor al acoso y la intimidación. Aspiramos a
                            ser
                            líderes en la lucha contra el cyberbullying y la ciberseguridad, brindando soluciones
                            innovadoras y
                            efectivas que protejan a individuos y comunidades en el entorno virtual".
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="text-align: center;">
                    <div class="description" style="width: 90%; margin: 20px; padding: 20px;">
                        <h2>Misión de la empresa</h2>
                        <br>
                        <p style="text-align: justify;">
                            "En nuestra empresa, nos comprometemos a abordar el cyberbullying y la ciberseguridad desde
                            diversos
                            ángulos. Nuestra misión es educar y concienciar sobre los riesgos del acoso en línea,
                            proporcionar
                            herramientas y recursos para prevenir y mitigar situaciones de ciberacoso, y ofrecer
                            servicios de
                            ciberseguridad avanzados para proteger a nuestros clientes contra posibles amenazas
                            cibernéticas. A
                            través de la innovación tecnológica y la colaboración con expertos, trabajamos
                            incansablemente para
                            crear un entorno digital más seguro y empoderador para todos".
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="promoto">
            <h3>Promotores</h3>
        </div>
<br>
        <?php
        require("conexion.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
            exit();
        }

        // Consulta para obtener los títulos de la base de datos
        $consulta_titulos = "SELECT * FROM auspiciantes";
        $resultados_titulos = mysqli_query($conexion, $consulta_titulos);
        ?>

        <div class="image-container">
            <?php
            while ($fila = mysqli_fetch_assoc($resultados_titulos)) {
                $id = $fila['id'];
                $url = $fila['url'];
                $img = $fila['img'];
                ?>

                <div class="container35">
                    <div class="auspici">
                        <div class="imgausp">
                            <a href="<?php echo $url; ?>"><img style="margin-bottom:10%;" src="<?php echo $img; ?>" alt=""></a>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>

        <?php
        mysqli_close($conexion);
        ?>


       
        </div>
        
        <div>
            <!--Contactos-->
            <?php
            include 'contactos.php';
            ?>
        </div>


</body>
<!--<script src="anuncio.js"></script>-->
        <script>

            // Llamar a la función después de mostrar la pantalla 5


            // Obtener el elemento de cierre del anuncio
            var closeBtn = document.querySelector('.close-btn');

            // Agregar un evento de clic al elemento de cierre
            closeBtn.addEventListener('click', function () {
                // Obtener el elemento del anuncio
                var advertisement = document.querySelector('.advertisement');

                // Ocultar el anuncio estableciendo la propiedad "display" en "none"
                advertisement.style.display = 'none';

                // Obtener el elemento del overlay
                var overlay = document.querySelector('.overlay');

                // Eliminar la clase "overlay" del elemento
                overlay.classList.remove('overlay');
            });

            function reproducirVideo(ruta) {
                var video = document.getElementById("videoPlayer");
                video.src = ruta;
                video.load();
                video.play();
            }

        </script>
        <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Obtén una referencia al elemento de cierre
        var closeBtn = document.querySelector(".close-btn");
        // Obtén una referencia al video
        var video = document.getElementById("anuncio-video");

        // Agrega un evento de clic al elemento de cierre
        closeBtn.addEventListener("click", function () {
            // Detén el video
            video.pause();
            // Oculta el anuncio
            document.querySelector(".overlay").style.display = "none";
        });
    });
</script>

        <script src="js.js"></script>

</html>