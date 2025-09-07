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
    <title>Eventos</title>
</head>
<style>
    #galeria2 {

        height: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }


    .tituintimida {
        border-radius: 15px;
        margin-left: 15%;
        margin-right: 15%;
        display: inline-block;
        /* Cambio el valor de 'width' a 'display' */
        padding: 20px;
        text-align: center;
        background: #2277B2;
    }

    #imagen2 {
        width: 50%;
        height: 70%;
    }

    /* estilos.css */
    .eliminar-link2 {
        color: white;
        margin-top: 260px;
    }



    .tituloeven {

        margin-top: 80px;
        text-align: center;

    }

    @media screen and (max-width: 1180px) {
        #galeria2 {
            flex-direction: column;
            /* Colocar las imágenes en una columna */
            align-items: center;
            /* Centrar las imágenes horizontalmente */
            justify-content: center;
            text-align: center;
        }

        #imagen2 img {
            justify-content: center;
            text-align: center;
            align-items: center;
            /* Centrar las imágenes horizontalmente */
            /* Ocupar todo el ancho disponible */
            
            /* Limitar el ancho máximo */
            width: 100%;
        height: 100%;
            /* Mantener la proporción de aspecto */
            margin: 10px 0;
            /* Espaciado entre las imágenes */
        }

    }
</style>

<body
    style=" max-width: 100%; height: auto; background-repeat: no-repeat; background-image: url('imagenes/fondo.png'); background-size: cover; ">
    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'estilos.html';
    ?>
    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'menu.html';
    ?>
    <div id="pantalla4">

        <div class="plantillaXD">
            <br>
            <div class="tituloeven">
                <h3 class="tituintimida">Eventos de seguridad informática y acoso</h3>
                <br>
                <br>
                <p>Participa en nuestros eventos continuamente</p>
                <br>
            </div>

            <div id="galeria2">

                <!-- Mostrar la galería de imágenes -->


                <?php
                require("conexion.php");

                $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
                if (mysqli_connect_errno()) {
                    echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
                    exit();
                }

                $consulta = "SELECT * FROM eventos";
                $resultados = mysqli_query($conexion, $consulta);

                while ($fila = mysqli_fetch_array($resultados)) {
                    $id = $fila['id'];
                    $url = $fila['url'];
                    echo ("<div id='imagen2' class='text-center'><img src='$url' width='400' height='250' /></div>");


                }
                ?>
            </div>


            <br>
            <br>


            <!--Contactos-->
            <?php
            include 'contactos.php';
            ?>



        </div>
        <!-- Contenido de la pantalla 5 -->

    </div>
    <script src="menu.js"></script>
</body>

</html>