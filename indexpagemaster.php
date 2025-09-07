<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


    <title>Proyecto</title>
</head>
<style>
    .icono-eliminar5{
        color: white;
    }
</style>
<?php
// Llamada al archivo HTML utilizando la función include o require
include 'estilos.html';
?>

<body>

    <div id="pantalla1" class="videofondo">
        <div class="vi">
            <video autoplay loop muted>
                <source src="imagenes/planeta.mp4" type="video/mp4">
            </video>
        </div>

        <section class="ojala">
        <?php
            if (isset($_SESSION['nombre'])) {
                echo "<br><br><h1 style='margin: 100px;'>Bienvenido: " . $_SESSION['nombre'] . "</h1> </br>";
            }
            ?>
            <div class="cyber">
                <h1 class="titulo" style="font-size: 100px;">SEGUT</h1>
                <br>
            </div>

            <div class="subcyber">
            <p class="copy" style="text-align: center">"Tu seguridad total, es nuestra máxima prioridad."</p>
            </div>
            <!--<button id="activarButton">Activar Anuncio</button>-->
        </section>
        <!--Anuncio-->

        <div class="overlay">
            <!--<button id="desactivarButton">Desactivar Anuncio</button>-->
            <div class="advertisement2">
                <h2 style="color: #26888f;">Anuncio</h2>
                <p>Siguientes capacitaciones</p>
                <p><a href="#" style="color: #26888f;">Haz clic aquí para obtener más información sobre nuestras
                        capacitaciones</a></p>
                <form id="videoForm" method="POST">
                    <div id="mst" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="text" id="videoURL" name="videoURL" placeholder="Ingrese la ruta del video">
                        <input class="1" type="submit" name="guardar" value="Guardar">
                        <input class="1" type="submit" name="actualizar" value="Actualizar">
                        <input class="1" type="submit" name="eliminar" value="Eliminar mp4/img/text">
                    </div>
                </form>
                <?php
                require("conexion.php");
                $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
                if (mysqli_connect_errno()) {
                    echo "fallo al conectar con la base de datos";
                    exit();
                }

                mysqli_select_db($conexion, $db_nombre) or die("no se encuentra en la base de datos");
                mysqli_set_charset($conexion, "utf8");

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['guardar'])) {
                        $videoURL = $_POST['videoURL'];

                        // Verificar si la URL no está vacía antes de insertarla
                        if (!empty($videoURL)) {
                            // Escapa los caracteres especiales en la URL del video
                            $videoURL = mysqli_real_escape_string($conexion, $videoURL);

                            // Guarda la URL del video en la base de datos
                            $consulta = "INSERT INTO misvideos (nombre, sinopsis, url) VALUES ('', '', '$videoURL')";
                            $result = mysqli_query($conexion, $consulta);

                            // Verifica si se realizó la inserción exitosamente
                            if ($result) {
                                // Redirige al index.php utilizando JavaScript
                                echo "<script>window.location.href = 'indexadmin.php';</script>";
                                exit();
                            } else {
                                echo "error";
                            }
                        }
                    } elseif (isset($_POST['actualizar'])) {
                        // Aquí se ejecuta el código para eliminar los registros
                        $consulta = "DELETE FROM misvideos";
                        $result = mysqli_query($conexion, $consulta);
                        $videoURL2 = $_POST['videoURL'];

                        if ($result) {
                            if (!empty($videoURL2)) {
                                // Escapa los caracteres especiales en la URL del video
                                $videoURL2 = mysqli_real_escape_string($conexion, $videoURL2);

                                // Guarda la URL del video en la base de datos
                                $consulta2 = "INSERT INTO misvideos (nombre, sinopsis, url) VALUES ('', '', '$videoURL2')";
                                $result2 = mysqli_query($conexion, $consulta2);

                                // Verifica si se realizó la inserción exitosamente
                                if ($result2) {
                                    // Redirige al index.php utilizando JavaScript
                                    echo "<script>window.location.href = 'indexadmin.php';</script>";
                                    exit();
                                } else {
                                    echo "error";
                                }
                            }
                            if ($result2) {
                                echo "Registros eliminados y consulta adicional ejecutada correctamente";
                            } else {
                                echo "Error al ejecutar la consulta adicional";
                            }
                        } else {
                            echo "Error al eliminar los registros";
                        }
                        // Verifica si se realizó la eliminación exitosamente
                    } else {
                        echo "Error al eliminar los registros";
                    }


                    // Aquí puedes agregar las condiciones y el código correspondiente para el botón "Eliminar Video"
                }


                mysqli_close($conexion);
                ?>
                <?php
                require("conexion.php");
                $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
                if (mysqli_connect_errno()) {
                    echo "fallo al conectar con la base de datos";
                    exit();
                }

                mysqli_select_db($conexion, $db_nombre) or die("no se encuentra en la base de datos");
                mysqli_set_charset($conexion, "utf8");


                if (isset($_POST['eliminar'])) {



                    // Guarda la URL del video en la base de datos
                    $consulta3 = "DELETE FROM misvideos";
                    $result3 = mysqli_query($conexion, $consulta3);

                    // Verifica si se realizó la inserción exitosamente
                    if ($result3) {
                        // Redirige al index.php utilizando JavaScript
                        echo "<script>window.location.href = 'indexadmin.php';</script>";
                        exit();
                    } else {
                        echo "error";
                    }
                }


                mysqli_close($conexion);
                ?>
                <br>
                <br>
                <br>
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
                                echo "<video src='$url' controls='controls' width='850' height='250'></video>";
                            } elseif (preg_match('/\.(jpg|jpeg|png|gif)$/i', $url)) {
                                // Si es una URL de imagen, muestra la imagen
                                echo "<img src='$url' alt='Imagen' width='350' height='200'>";
                            } else {
                                // Si no es un video ni una imagen, asume que es texto
                                echo "<p>$url</p>";
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
        include 'menu3.html';
        ?>

        <div class="container1">

            <div class="row">

                <div class="col-5">
                    <div class="aaa"
                        style="box-shadow: 0 0 10px #00d4ff; width: 90%; margin: 20px; padding: 20px; margin-left: 40px; ">
                        <div style="justify-content: center;">
                            <img src="imagenes/acoso1.jpg" class="formimg" alt="Imagen">
                        </div>
                        <br>
                        <br>
                        <div>
                            <img src="imagenes/seguridad.jpg" class="formimg" alt="Imagen">
                        </div>
                        <br>
                    </div>
                </div>

                <div class="col-6">
                    <br>
                    <br>
                    <br>
                    <div class="ci">
                        <div class="description" style="text-align: justify;">
                            <h2>Cyberbullying</h2>
                            <p>
                                El cyberbullying, también conocido como ciberacoso, se refiere al uso de la tecnología
                                de la
                                información y las redes sociales para hostigar, intimidar, humillar o difamar a otras
                                personas.
                                Esta
                                forma de acoso puede incluir mensajes ofensivos, amenazas, difusión de rumores falsos,
                                divulgación
                                de información privada o cualquier otra conducta que cause daño emocional o psicológico
                                a la
                                víctima. El cyberbullying puede tener consecuencias devastadoras para la salud mental y
                                el
                                bienestar
                                de las personas afectadas, especialmente en adolescentes y jóvenes que son más
                                vulnerables a
                                este
                                tipo de agresiones.
                            </p>
                        </div>
                    </div>

                    <br>
                    <br>

                    <div class="description" style="text-align: justify;">
                        <h2>Ciberseguridad</h2>
                        <p>
                            La ciberseguridad se refiere a la protección de sistemas informáticos, redes y
                            dispositivos
                            electrónicos contra ataques, daños o accesos no autorizados. En un mundo cada vez más
                            digitalizado,
                            la ciberseguridad se ha vuelto crucial para garantizar la confidencialidad, integridad y
                            disponibilidad de la información sensible. Esto implica el uso de medidas preventivas y
                            técnicas
                            avanzadas para detectar y responder a posibles amenazas, como virus, malware, ransomware
                            y
                            otras
                            formas de ataques cibernéticos que podrían comprometer la seguridad de los datos y la
                            privacidad.
                        </p>
                    </div>
                </div>
                <div class="row">


                    <div class="col-6">
                        <div style="text-align: center;">
                            <div class="description" style="width: 90%; margin: 20px; padding: 20px;">
                                <h2>Visión de la empresa</h2>
                                <br>
                                <p style="text-align: justify;">
                                    "Nuestra visión es construir un mundo digital seguro y respetuoso, donde todas las
                                    personas puedan
                                    disfrutar de una experiencia en línea libre de temor al acoso y la intimidación.
                                    Aspiramos a ser
                                    líderes en la lucha contra el cyberbullying y la ciberseguridad, brindando
                                    soluciones innovadoras y
                                    efectivas que protejan a individuos y comunidades en el entorno virtual".
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div style="text-align: center;">
                            <div class="description" style="width: 90%; margin: 20px; padding: 20px;">
                                <h2>Misión de la empresa</h2>
                                <br>
                                <p style="text-align: justify;">
                                    "En nuestra empresa, nos comprometemos a abordar el cyberbullying y la
                                    ciberseguridad desde diversos
                                    ángulos. Nuestra misión es educar y concienciar sobre los riesgos del acoso en
                                    línea, proporcionar
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
            </div>
            <div class="contenedor-formulario">
        <h2>Agregar promotores</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm();">
            <div class="formulario-columna">
                <label for="url">Ingrese url del promotor:</label>
                <input type="text" id="url" name="url" required>

                <label for="img">Ingrese la imagen del promotor:</label>
                <input type="text" id="img" name="img" required>

            </div>
            <div class="botoness">
                <button type="submit" name="btnAgregar3"><i class="fas fa-plus"></i> Agregar promotor</button>
            </div>
        </form>
    </div>
            <?php
        require("conexion.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnAgregar3'])) {
            $url = $_POST['url'];
            $img = $_POST['img'];

            // Consulta para insertar el título en la base de datos
            $consulta = "INSERT INTO auspiciantes (url, img) VALUES ('$url','$img')";

            if (mysqli_query($conexion, $consulta)) {
                echo "¡auspiciantes agregado correctamente!";
            } else {
                echo "Error al agregar el auspiciantes: " . mysqli_error($conexion);
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['eliminar'])) {
            $idEliminar = $_GET['eliminar'];

            // Consulta para eliminar el título de la base de datos
            $consulta_eliminar = "DELETE FROM auspiciantes WHERE id = $idEliminar";

            if (mysqli_query($conexion, $consulta_eliminar)) {
                echo "auspiciante eliminado correctamente!";
            } else {
                echo "Error al eliminar el auspiciantes: " . mysqli_error($conexion);
            }
        }

        // Consulta para obtener los títulos de la base de datos
        $consulta_titulos = "SELECT * FROM auspiciantes";
        $resultados_titulos = mysqli_query($conexion, $consulta_titulos);
        ?>


        <div class="contenedores225">
            <?php
            $i = 1;
            while ($fila = mysqli_fetch_assoc($resultados_titulos)) {
                $id = $fila['id'];
                $url = $fila['url'];
                $img = $fila['img'];

                // Abrir una nueva fila después de cada 3 contenedores
                if (($i - 1) % 3 === 0) {
                    echo '<div class="row mt-4">'; // Agregar un margen superior de 3 unidades
                }

                echo '<div class="col-md-4">';
                echo "<div class='container35'>
        <div class='auspici'>
            <br>
            <div class='imgausp'>
                <a href='$url'><img src='$img' width='300' height='150' alt=''></a>
            </div>
            <br>     
            <i class='fas fa-trash-alt icono-eliminar5' onclick='eliminarContenedorau($id)'></i>
        </div>";
                echo '</div>';
                echo '</div>'; // Cerrar col-md-4
            
                // Cerrar la fila después de cada 3 contenedores
                if ($i % 3 === 0) {
                    echo '</div>'; // Cerrar la fila
                }

                $i++;
            }

            // Si el ciclo no termina en un múltiplo de 3, cierra la última fila
            if (($i - 1) % 3 !== 0) {
                echo '</div>'; // Cerrar la última fila
            }
            ?>
        </div>


        <?php
        mysqli_close($conexion);
        ?>

        <script>
            function eliminarContenedorau(id) {
                if (confirm("¿Estás seguro de que deseas eliminar este contenedor?")) {
                    window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>?eliminar=" + id;
                }
            }
        </script>
        </div>


        <!--Section Header-->



        <!--Contactos-->
        <?php
        include 'contactos.php';
        ?>



    </div>


    <script src="menu.js"></script>
    <!--<script src="anuncio.js"></script>-->
    <script>    // Deshabilitar el mensaje de confirmación de reenvío de formulario
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

</script>

    <script>

        // Llamar a la función después de mostrar la pantalla 5


        // Obtener el elemento de cierre del anuncio
        var closeBtn = document.querySelector('.close-btn');

        // Agregar un evento de clic al elemento de cierre
        closeBtn.addEventListener('click', function () {
            // Obtener el elemento del anuncio
            var advertisement = document.querySelector('.advertisement2');

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


        /*function mostrarPantalla1() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "block";
            document.getElementById("pantalla2").style.display = "none";
            document.getElementById("pantalla3").style.display = "none";
            document.getElementById("pantalla4").style.display = "none";
            document.getElementById("pantalla5").style.display = "none";
            document.getElementById("pantalla6").style.display = "none";
            resetActiveButtons();
            document.getElementById("btnPantalla1").classList.add("active");
            document.body.style.backgroundColor = "#1f2124";
        }

        function mostrarPantalla2() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "none";
            document.getElementById("pantalla2").style.display = "block";
            document.getElementById("pantalla3").style.display = "none";
            document.getElementById("pantalla4").style.display = "none";
            document.getElementById("pantalla5").style.display = "none";
            document.getElementById("pantalla6").style.display = "none";
            resetActiveButtons();
            document.getElementById("btnPantalla2").classList.add("active");
            document.body.style.backgroundColor = "#1f2124";
        }

        function mostrarPantalla3() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "none";
            document.getElementById("pantalla2").style.display = "none";
            document.getElementById("pantalla3").style.display = "block";
            document.getElementById("pantalla4").style.display = "none";
            document.getElementById("pantalla5").style.display = "none";
            document.getElementById("pantalla6").style.display = "none";
            resetActiveButtons();
            document.getElementById("btnPantalla3").classList.add("active");
            document.body.style.backgroundColor = "#1f2124";
        }

        function mostrarPantalla4() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "none";
            document.getElementById("pantalla2").style.display = "none";
            document.getElementById("pantalla3").style.display = "none";
            document.getElementById("pantalla4").style.display = "block";
            document.getElementById("pantalla5").style.display = "none";
            document.getElementById("pantalla6").style.display = "none";
            resetActiveButtons();
            document.getElementById("btnPantalla4").classList.add("active");
            document.body.style.backgroundColor = "#1f2124";
        }

        function mostrarPantalla5() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "none";
            document.getElementById("pantalla2").style.display = "none";
            document.getElementById("pantalla3").style.display = "none";
            document.getElementById("pantalla4").style.display = "none";
            document.getElementById("pantalla5").style.display = "block";
            document.getElementById("pantalla6").style.display = "none";
            resetActiveButtons();
            document.getElementById("btnPantalla5").classList.add("active");
            document.body.style.backgroundColor = "#1f2124";
        }

        function mostrarPantalla6() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "none";
            document.getElementById("pantalla2").style.display = "none";
            document.getElementById("pantalla3").style.display = "none";
            document.getElementById("pantalla4").style.display = "none";
            document.getElementById("pantalla5").style.display = "none";
            document.getElementById("pantalla6").style.display = "block";
            resetActiveButtons();
            document.getElementById("btnPantalla6").classList.add("active");
            document.body.style.backgroundColor = "#1f2124";
        }*/

        // Función para restablecer la clase "active" de todos los botones
        function resetActiveButtons() {
            const buttons = document.querySelectorAll(".dropbtn");
            buttons.forEach((button) => {
                button.classList.remove("active");
            });
        }

        // Función para ocultar todas las pantallas
        function ocultarPantallas() {
            const pantallas = document.querySelectorAll(".pantalla");
            pantallas.forEach((pantalla) => {
                pantalla.style.display = "none";
            });
        }


    </script>




</body>


</html>