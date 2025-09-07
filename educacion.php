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
    <title>Educacion</title>
</head>
<style>
    .tituintimida {

        border-radius: 15px;
        margin-left: 30%;
        margin-right: 30%;
        padding: 10px;
        text-align: center;
        justify-content: center;
        align-items: center;
        background: #2277B2;
    }

    .imgblog img {
        height: 30vh;
        width: 70%;
        text-align: center;
        justify-content: center;
        align-items: center;
        justify-items: center;
        margin-left: 18%;
    }

    img {
        text-align: center;
        justify-content: center;
        align-items: center;
        justify-items: center;
    }

    .tituloblog {
        text-align: center;
    }
</style>

<body
    style="max-width: 100%; height: auto; background-repeat: no-repeat; background-image: url('imagenes/fondo.png'); background-size: cover;">
    <?php
  // Llamada al archivo HTML utilizando la función include o require
  include 'menu.html';
  ?>
    <br><br><br><br>
    <h5 class="tituintimida">Educación para:</h5>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <!-- Primer Contenedor: DOCENTES -->
            <div class="col-12 col-md-4 order-1 order-md-1">
                <div class="infoblog">
                    <div class="tituloblog">
                        <h5><a href="docentes.php" style="color: white; text-decoration: none;">DOCENTES</a></h5>
                    </div>
                    <div id="text1" class="hidden"></div>
                    <br>
                    <div class="imgblog">
                        <img src="imagenes/docente.jpg" alt="">
                    </div>
                    <br>
                    <div class="blogdescripcion">
                        <p style="text-align: justify; padding: 15px; color: white">
                            Esta área de educación se enfoca en proporcionar a los docentes las herramientas y
                            conocimientos necesarios para abordar el acoso, tanto en el entorno escolar como en línea.
                            También incluye la formación en seguridad informática para que los docentes puedan proteger
                            la información y la privacidad de los estudiantes en el entorno digital.
                        </p>
                    </div>
                    <br>
                    <br>
                </div>
            </div>

            <!-- Segundo Contenedor: PADRES DE FAMILIA -->
            <div class="col-12 col-md-4 order-2 order-md-2">
                <div class="infoblog">
                    <div class="tituloblog">
                        <h5><a href="padres.php" style="color: white; text-decoration: none;">PADRES DE FAMILIA</a></h5>
                    </div>
                    <div id="text2" class="hidden"></div>
                    <br>
                    <div class="imgblog">
                        <img src="imagenes/padres.jpg" alt="">
                    </div>
                    <br>
                    <div class="blogdescripcion">
                        <p style="text-align: justify; padding: 15px; color: white">
                            La educación para padres de familia se centra en informar y capacitar a los padres para
                            comprender y prevenir el acoso escolar y ciberacoso que pueden afectar a sus hijos. Además,
                            ofrece orientación sobre cómo proteger a sus hijos en línea y fomentar un uso seguro de la
                            tecnología, abordando temas relacionados con la seguridad informática.
                        </p>
                    </div>
                    <br>
                    <br>
                </div>
            </div>

            <!-- Tercer Contenedor: CIUDADANIA -->
            <div class="col-12 col-md-4 order-3 order-md-3">
                <div class="infoblog">
                    <div class="tituloblog">
                        <h5><a href="ciudadania.php" style="color: white; text-decoration: none;">CIUDADANIA</a></h5>
                    </div>
                    <div id="text3" class="hidden"></div>
                    <br>
                    <div class="imgblog">
                        <img src="imagenes/ciudadania.jpg" alt="">
                    </div>
                    <br>
                    <div class="blogdescripcion">
                        <p style="text-align: justify; padding: 15px; color: white">
                            La educación para la ciudadanía se dirige a la comunidad en general e incluye información
                            sobre el acoso y ciberacoso, así como la importancia de la seguridad en línea. Promueve la
                            responsabilidad cibernética y la concienciación sobre los peligros potenciales en el mundo
                            digital, incentivando un comportamiento en línea seguro y ético en la sociedad.
                        </p>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <?php
  // Llamada al archivo HTML utilizando la función include o require
  include 'contactos.php';
  ?>
</body>

</html>