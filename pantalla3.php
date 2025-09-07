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
    <title>Capacitaciones</title>
</head>
<style>
    .tooltip {
        position: absolute;
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 10px;
        border-radius: 10px;
        transition: opacity 0.3s, transform 0.3s;
        opacity: 0;
        transform: translateY(-10px);
        z-index: 9999;
    }

    textarea:hover+.tooltip {
        opacity: 1;
        transform: translateY(0);
    }

    .tooltip-text {
        display: none;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 10px;
        border-radius: 10px;
        transition: opacity 0.3s, transform 0.3s;
        opacity: 0;
        transform: translateY(-10px);
        z-index: 9999;
        font-size: 13px;
    }

    .tooltip-text.active {
        opacity: 1;
        transform: translateY(0);
        display: block;
        margin-top: 10px;
    }

    /* Estilos CSS */
    .redesC {
        margin-top: 200px;
        background-color: #000;
        height: 250px;
    }

    .tituintimida{
        border-radius: 15px;
        margin-left: 15%;
        margin-right: 15%;
        display: inline-block;
        /* Cambio el valor de 'width' a 'display' */
        padding: 20px;
        text-align: center;
        background: #2277B2;
    }

    .Formimg {
        display: flex;
        justify-content: center;
    }


    #galeria {
        /* Estilos para centrar los elementos en pantallas pequeñas */
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    #imagen {
       margin-right: 48%;
        width: 40%;
        height: 70%;
        /* Estilos existentes (sin cambios) */
        padding: 15px;

    }


    /* estilos.css */
    .eliminar-link {
        color: white;
        margin-top: 110px;
    }

    .titulocaapa {
        margin-top: 60px;
        text-align: center;
    }

    @media screen and (max-width: 1180px) {
        #galeria {
            flex-direction: column;
            /* Colocar las imágenes en una columna */
            align-items: center;
            /* Centrar las imágenes horizontalmente */
            justify-content: center;
            text-align: center;
        }

        #imagen img {

            justify-content: center;
            text-align: center;
            align-items: center;
            /* Centrar las imágenes horizontalmente */
        
            /* Mantener la proporción de aspecto */
            margin: 10px 0;
            /* Espaciado entre las imágenes */



        }

    }

    .btnfake {

        background: rgb(80, 152, 153);
        background: radial-gradient(circle, rgba(80, 152, 153, 1) 0%, rgba(40, 115, 189, 1) 100%);
        color: white;
        border-radius: 5px;
        padding: 10px;
        font-size: 15px;
        text-decoration: none;

    }

    .lll {
        margin-top: -3%;
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
    <div id="pantalla3" class="pantalla">
        <div class="plantillaXD">



            <br>
            <br>



            <div class="titulocaapa">
                <h3 class="tituintimida">Cursos que nosotros ofrecemos </h3>
            </div>
            <div class="lll">
                <a href="registro.php" class="btnfake" onmouseover="showTooltip('buttonTooltip');"
                    onmouseout="hideTooltip('buttonTooltip');">Registrate aquí</a>
                <div class="tooltip-text" id="buttonTooltip">Aqui podras seleccionar y registrarte a una
                    capacitación
                </div>
            </div>
            <br>
            <div id="galeria">
                <!-- Mostrar la galería de imágenes -->
                <?php
                require("conexion.php");

                $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
                if (mysqli_connect_errno()) {
                    echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
                    exit();
                }

                $consulta = "SELECT * FROM capacitaciones";
                $resultados = mysqli_query($conexion, $consulta);

                while ($fila = mysqli_fetch_array($resultados)) {
                    $id = $fila['id'];
                    $url = $fila['url'];
                    echo ("<div id='imagen' class='text-center'><img src='$url' /></div>");
                    //echo ("<div class='eliminar-link'><b><a href='index.php?delete=$id' style='color: white;'>Eliminar</a></b></div>");
                
                }
                ?>
                <div>
                    <br><br>
                    <p>Si quieres mas información comunicate <br>al siguiente número telefónico: 0980006242</p>
                </div>
            </div>




        </div>

    </div>
    <!-- Contenido de la pantalla 4 -->
    <?php
    include 'contactos.php';
    ?>
    <script src="menu.js"></script>
    <script>
        function showTooltip(elementId) {
            var tooltip = document.getElementById(elementId);
            tooltip.classList.add("active");
            tooltip.classList.add("tooltip-below"); // Add this line to apply the new class
        }

        function hideTooltip(elementId) {
            var tooltip = document.getElementById(elementId);
            tooltip.classList.remove("active");
            tooltip.classList.remove("tooltip-below"); // Add this line to remove the new class
        }
    </script>
</body>

</html>