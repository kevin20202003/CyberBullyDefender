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
    <title>CapacitacionesAdmin</title>
</head>

<body>
    <style>
        /* Estilos CSS */
        .redesC {
            margin-top: 200px;
            background-color: #000;
            height: 250px;
        }

        #pantalla3 {
            margin-top: -210px
        }

        .Formimg {
            display: flex;
            justify-content: center;
        }


        #galeria {

            margin: 200px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        #galeria img {
            margin-top: 150px;

        }

        #imagen {
            width: 400px;
            height: 250px;
            margin: 10px;
        }

        /* estilos.css */
        .icono-eliminar {
            cursor: pointer;
            color: white;
            text-align: center;
        }
    </style>
    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'estilos.html';
    ?>
    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'menu2.html';
    ?>
    <div id="pantalla3" class="pantalla"  style=" max-width: 100%; height: auto; background-repeat: no-repeat; background-image: url('imagenes/fondo.png'); background-size: cover; ">
        <div class="plantillaXD">


            <div id="galeria">
                <!-- Mostrar la galería de imágenes -->
                <?php
                require("conexion.php");

                $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
                if (mysqli_connect_errno()) {
                    echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
                    exit();
                }

                if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['eliminar'])) {
                    $idEliminar = $_GET['eliminar'];

                    // Consulta para eliminar el título de la base de datos
                    $consulta_eliminar = "DELETE FROM capacitaciones WHERE id = $idEliminar";

                    if (mysqli_query($conexion, $consulta_eliminar)) {
                        echo "¡Título eliminado correctamente!";
                    } else {
                        echo "Error al eliminar el título: " . mysqli_error($conexion);
                    }
                }

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar'])) {
                    $newURL = $_POST['imageURL'];
                    $titucapa = $_POST['titucapa'];

            
                    // Consulta para insertar el título en la base de datos
                    $consulta = "INSERT INTO capacitaciones (url, titucapa) VALUES ('$newURL','$titucapa')";
            
                    if (mysqli_query($conexion, $consulta)) {
                        echo "<script>window.location.href = '" . $_SERVER['PHP_SELF'] . "';</script>";
                    } else {
                      echo "Error al agregar el título: " . mysqli_error($conexion);
                    }
                  }


                $consulta = "SELECT * FROM capacitaciones";
                $resultados = mysqli_query($conexion, $consulta);

                while ($fila = mysqli_fetch_array($resultados)) {
                    $id = $fila['id'];
                    $url = $fila['url'];

                    echo "<div class='text-center' id='imagen'><img src='$url' width='400' height='250' />";
                    echo "<i class='fas fa-trash-alt icono-eliminar' onclick='deleteImage($id)'></i></div>";
                }



                ?>
            </div>
            <script>
                function deleteImage(id) {
                    if (confirm("¿Estás seguro de que deseas eliminar este contenedor?")) {
                        window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>?eliminar=" + id;
                    }
                }

            </script>



            <div class="Formimg">
                <!-- Mostrar el formulario solo para el administrador -->
                <form id="imageForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text" id="imageURL" name="imageURL" placeholder="Ingrese la URL de la imagen">
                    <input type="text" id="titucapa" name="titucapa" placeholder="Ingrese el título de la capacitación">
                    <input class="1" type="submit" name="guardar" value="Guardar">
                </form>
            </div>
<br><br><br><br>
            <?php
            include 'contactos.php';
            ?>

        </div>
        <!-- Contenido de la pantalla 4 -->

    </div>
    <script>    // Deshabilitar el mensaje de confirmación de reenvío de formulario
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    
    </script>
    <script src="menu.js"></script>
</body>

</html>