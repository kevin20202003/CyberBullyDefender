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
    <title>Delitos informaticos</title>
    <script src="https://kit.fontawesome.com/e9f58d382f.js" crossorigin="anonymous"></script>
    <style>
        /* Estilos generales */
        /* Estilos generales */
        #pantalla6 {
            height: auto;
        }

        .contenedores2 {
            display: flex;
            flex-wrap: wrap;
            /* Permite que los contenedores se envuelvan a la siguiente fila */
            justify-content: center;
            gap: 20px;
        }

        .contenedor2 {
            width: 200px;
            /* Tamaño fijo en píxeles */
            height: 180px;
            background: rgb(0, 111, 179);
            background: radial-gradient(circle, rgba(0, 111, 179, 1) 0%, rgba(2, 0, 62, 1) 96%);
            border-radius: 10%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 15px;
            text-align: justify;
            margin: 50px;
        }

        .contenedor2:hover {
            height: 100%;
            box-shadow: 0 0 2px #289bb8, 0 0 12px #289bb8, 0 0 25px #289bb8, 0 0 50px #289bb8;
            background: rgb(1, 125, 193);
            background: linear-gradient(0deg, rgba(1, 125, 193, 1) 0%, rgba(9, 11, 31, 1) 76%);
        }

        .contenedor2 p {
            text-align: center;
        }

        .overlay2 {
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            animation: abrirContenedorGrande2 0.5s ease;
            position: fixed;
            top: 20%;
            left: 20%;
            width: 60%;
            height: auto;
            z-index: 9999;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            display: justify;
            text-align: center;
        }

        .close-btn2 {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 45px;
            cursor: pointer;
            color: #ffffff;
        }

        @keyframes abrirContenedorGrande {
            from {
                opacity: 0;
                transform: scale(0.5);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }




        @keyframes cerrarContenedorGrande {
            from {
                opacity: 1;
                transform: scale(1);
            }

            to {
                opacity: 0;
                transform: scale(0.5);
            }
        }




        .sombraCapa2 {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(5px);
            /* Ajusta el valor de desenfoque según desees */
            z-index: 9998;
            display: none;
        }
        .comart1{
            padding: 25px;
        }

        .tituintimida{
        border-radius: 15px;
       margin-left: 33%;
       margin-right: 33%;
        /* Cambio el valor de 'width' a 'display' */
        padding: 20px;
        text-align: center;
        justify-content: center;
        align-items: center;
        background: #2277B2;
    }

        .ve li {
            color: white;
        }

        .art img {
            justify-content: center;
            height: 15vw;
            width: 25vw;
        }

        .tituloaart {
            margin-top: 100px;
            text-align: center;

        }

        @media screen and (max-width: 768px) {
            .contenedores2 {
                justify-content: center;
                text-align: center;
                align-items: center;
                flex-direction: column;
            }
        }
    </style>
</head>

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
    <div id="pantalla6">

        <div class="plantillaXD">

            <br>
            <div class="tituloaart">
                <h3 class="tituintimida">Articulos sobre delitos</h3>
            </div>
            <?php
            require("conexion.php");

            $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
            if (mysqli_connect_errno()) {
                echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
                exit();
            }


            // Consulta para obtener los títulos de la base de datos
            $consulta_titulos = "SELECT * FROM articulos";
            $resultados_titulos = mysqli_query($conexion, $consulta_titulos);
            ?>
           

            <div class="contenedores2">
                <?php
                $i = 1;
                while ($fila = mysqli_fetch_assoc($resultados_titulos)) {
                    $id = $fila['id'];
                    $titulo = $fila['titulo'];
                    $descripcion = $fila['descripcion'];
                    $ima = $fila['ima'];

                    echo "
            <div class='contenedor2' id='contenedorGrandee$i' onclick='mostrarContenedorGrande($i)'>
                <p>$titulo</p>
            </div>
            
            <div class='overlay2' id='contenedorGrande$i' style='display:none;'>
            <h2 style='color: #26888f;'>$titulo</h2>
            <p class='comart1' style='text-align: justify;'>$descripcion</p>
            <span class='close-btn2' onclick='cerrarContenedorGrande($i)'>&times;</span>
            <div class='art'>
<img src='$ima' alt=''>
</div>
            
        </div>

<div id='sombraCapa2' class='sombraCapa2' onclick='cerrarContenedorGrande()'></div>";

                    if ($i % 3 === 0) {
                        // Cerrar la fila y comenzar una nueva
                        echo "</div><div class='contenedores2'>";
                    }

                    $i++;
                }
                ?>
                <div style="text-align: justify; margin-left: 15%;
        margin-right: 15%;">
                    <h3><b>Nosotros te ayudamos</b></h3>
                    <p>En SEGUT, estamos comprometidos a ayudarte a abordar los delitos
                        informáticos. Entendemos que enfrentar estas situaciones puede ser abrumador, pero no tienes que
                        pasar por ellas solo. Nuestro equipo está aquí para proporcionarte apoyo y recursos para
                        proteger tus derechos y tu bienestar en línea. En SEGUT, nuestra misión es
                        crear un entorno en línea más seguro y amigable para todos. No dudes en ponerte en contacto con
                        nosotros si necesitas ayuda o tienes preguntas. Juntos, podemos trabajar para combatir los
                        delitos informáticos y promover un internet más seguro y respetuoso. Tu bienestar es nuestra
                        prioridad.</p>
                </div>
            </div>

            <?php
            mysqli_close($conexion);
            ?>




        </div>

        <br><br><br><br><br><br>

        <?php
        include 'contactos.php';
        ?>
    </div>
    <script src="menu.js"></script>
    <script>
        function mostrarContenedorGrande(i) {
            const contenedorGrande = document.getElementById(`contenedorGrande${i}`);
            const sombraCapa2 = document.getElementById('sombraCapa2');
            contenedorGrande.style.position = 'absolute';
            contenedorGrande.style.display = "block";
            sombraCapa2.style.display = 'block';
        }

        function cerrarContenedorGrande(i) {
            var contenedorGrande = document.getElementById(`contenedorGrande${i}`);
            var sombraCapa2 = document.getElementById('sombraCapa2');

            contenedorGrande.style.animation = 'cerrarContenedorGrande 0.5s ease';
            sombraCapa2.style.animation = 'cerrarContenedorGrande 0.5s ease';

            setTimeout(function () {
                contenedorGrande.style.display = 'none';
                sombraCapa2.style.display = 'none';
                contenedorGrande.style.animation = '';
                sombraCapa2.style.animation = '';
            }, 500);
        }





    </script>
</body>

</html>