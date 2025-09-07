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
    <title>EventosAdmin</title>
</head>
<body>
<style>
  .Formimg2 {
        display: flex;
        justify-content: center;
    }


    #galeria2 {
        margin: 200px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    #galeria2 img{
        margin-top: 150px;

    }

    #imagen2 {
        width: 400px;
        height: 250px;
        margin: 10px;
    }

    /* estilos.css */
    .icono-eliminar {
            cursor: pointer;
            color: white;
        }

#pantalla4{
    margin-top: -200px;
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
<div id="pantalla4" style="background-image: url('imagenes/fondo.png'); background-size: cover;">
    <div class="plantillaXD">

       
       <div id="galeria2">
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
                $consulta_eliminar = "DELETE FROM eventos WHERE id = $idEliminar";

                if (mysqli_query($conexion, $consulta_eliminar)) {
                    echo "¡Título eliminado correctamente!";
                } else {
                    echo "Error al eliminar el título: " . mysqli_error($conexion);
                }
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['guardar2'])) {
                    // Aquí manejas la acción de "Guardar"
                    $newURL = $_POST['imageURL2'];
    
                    // Verificar si la URL no está vacía antes de guardarla
                    if (!empty($newURL)) {
                        // Escapa los caracteres especiales en la URL de la imagen
                        $newURL = mysqli_real_escape_string($conexion, $newURL);
    
                        // Insertar la nueva URL en la base de datos
                        $consulta = "INSERT INTO eventos (url) VALUES ('$newURL')";
                        $result = mysqli_query($conexion, $consulta);
    
                        // Verificar si se realizó la inserción exitosamente
                        if ($result) {
                            // Recargar la página para mostrar la nueva imagen
                            echo "<script>window.location.href = '" . $_SERVER['PHP_SELF'] . "';</script>";
                            exit();
                        } else {
                            echo "Error al guardar la imagen";
                        }
                    }
                } 
            }


            $consulta = "SELECT * FROM eventos";
            $resultados = mysqli_query($conexion, $consulta);

            while ($fila = mysqli_fetch_array($resultados)) {
                $id = $fila['id'];
                $url = $fila['url'];
                echo ("<div class='text-center' id='imagen2'><img src='$url' width='400' height='250' />");
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
        <div class="Formimg2">
            <!-- Mostrar el formulario solo para el administrador -->
            <form id="imageForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" id="imageURL2" name="imageURL2" placeholder="Ingrese la URL de la imagen">
                <input class="1" type="submit" name="guardar2" value="Guardar">
            </form>
        </div>

       
        <br>
        <br><br><br><br>
       
        <!--Contactos-->
        <?php
    include 'contactos.php';
    ?>



    </div>
    <!-- Contenido de la pantalla 5 -->

</div>
<script>    // Deshabilitar el mensaje de confirmación de reenvío de formulario
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    
    </script>
<script src="menu.js"></script>
</body>
</html>