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
    <title>Delitos informaticos Admin</title>
</head>
<body>
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
            width: 20%;
            /* Tamaño fijo en píxeles */
            height: 100%;
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
        height: 60%;
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
        font-size: 20px;
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

    .ve li {
        color: white;
    }

    .art img {
        justify-content: center;
        height: 200px;
        width: 300px;
    }


    .contenedor-formulario {
        justify-items: center;
        text-align: center;
        justify-content: center;
        align-items: center;
    }

    .contenedor-formulario,
    h2 {
        color: white;
    }

    .formulario-columna {
        justify-items: center;
        text-align: center;
        justify-content: center;
        align-items: center;
    }
</style>
<?php
  // Llamada al archivo HTML utilizando la función include o require
  include 'estilos.html';
  ?>
   <?php
  // Llamada al archivo HTML utilizando la función include o require
  include 'menu3.html';
  ?>
<div id="pantalla6" style="background-image: url('imagenes/fondo.png'); background-size: cover;">

    <div class="plantillaXDadmin6">
  

        <?php
       require("conexion.php");
        
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnAgregar'])) {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $ima = $_POST['ima'];

            // Consulta para insertar el título en la base de datos
            $consulta = "INSERT INTO articulos (titulo, descripcion, ima) VALUES ('$titulo','$descripcion','$ima')";

            if (mysqli_query($conexion, $consulta)) {
                echo "¡Articulo agregado correctamente!";
            } else {
                echo "Error al agregar el título: " . mysqli_error($conexion);
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['eliminar'])) {
            $idEliminar = $_GET['eliminar'];

            // Consulta para eliminar el título de la base de datos
            $consulta_eliminar = "DELETE FROM articulos WHERE id = $idEliminar";

            if (mysqli_query($conexion, $consulta_eliminar)) {
                echo "¡Título eliminado correctamente!";
            } else {
                echo "Error al eliminar el título: " . mysqli_error($conexion);
            }
        }

        // Consulta para obtener los títulos de la base de datos
        $consulta_titulos = "SELECT * FROM articulos";
        $resultados_titulos = mysqli_query($conexion, $consulta_titulos);
        ?>
        <br><br><br><br>

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
            <p style='text-align: justify;'>$descripcion</p>
            <span class='close-btn2' onclick='cerrarContenedorGrande($i)'>&times;</span>
            <div class='art'>
<img src='$ima' alt=''>
</div>

        </div>
        <i class='fas fa-trash-alt icono-eliminar' onclick='eliminarContenedora($id)'></i>

<div id='sombraCapa2' class='sombraCapa2' onclick='cerrarContenedorGrande()'></div>";

                if ($i % 3 === 0) {
                    // Cerrar la fila y comenzar una nueva
                    echo "</div><div class='contenedores2'>";
                }

                $i++;
            }
            ?>
        </div>

        <?php
        mysqli_close($conexion);
        ?>

        <script>
            function eliminarContenedora(id) {
                if (confirm("¿Estás seguro de que deseas eliminar este contenedor?")) {
                    window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>?eliminar=" + id;
                }
            }
        </script>


        <br><br>

        <div class="contenedor-formulario">
            <h2>Agregar Articulos</h2>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="formulario-columna">
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" required
                        placeholder="Ingrese el título principal del Artículo">

                    <label for="descripcion">descripcion:</label>
                    <input type="text" id="descripcion" name="descripcion" required
                        placeholder="Ingrese la descripción completa del artículo">

                    <label for="ima">imagen:</label>
                    <input type="text" id="ima" name="ima" required
                        placeholder="Ingrese la ruta de la imagen en la carpeta imagenes/ejemploimg.jpg">
                </div>
                <div class="botoness">
                <button type="submit" name="btnAgregar"><i class="fas fa-plus"></i> Agregar</button>
                </div>
            </form>
            <br>
        </div>

    </div>



    <?php
        include 'contactos.php';
        ?>
</div>
<script>    // Deshabilitar el mensaje de confirmación de reenvío de formulario
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    
    </script>
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