<?php 
require("conexion.php");
$conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre); // Añadir $db_nombre para especificar la base de datos
if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la base de datos: " . mysqli_connect_error(); // Mostrar el error de conexión
    exit();
}

// No es necesario ejecutar la misma consulta dos veces, solo una vez es suficiente
$consulta = "SELECT titucapa FROM capacitaciones";
$resultados = mysqli_query($conexion, $consulta);

// Verificar si el formulario se ha enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recuperar los datos del formulario y validarlos
    $titucapa = mysqli_real_escape_string($conexion, $_POST['titucapa']);
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);

    // Insertar los datos en la tabla "registroscapa"
    $sql = "INSERT INTO registroscapa (capacitacion, nombre, correo, telefono) VALUES ('$titucapa', '$nombre', '$correo', '$telefono')";

    if (mysqli_query($conexion, $sql)) {
        echo "<div class='message-container alert alert-success'>Registro exitoso. Los datos se han guardado en la base de datos.</div>";
    } else {
        echo "Error al registrar los datos: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
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
        <title>Registro caoacitaciones</title>
</head>
<style>
    body {
        background: rgb(31, 129, 130);
        background: radial-gradient(circle, rgba(31, 129, 130, 1) 0%, rgba(33, 61, 116, 1) 100%);
    }

    .fbpp {
        margin-left: 15%;
        margin-right: 15%;
        margin-top: 7%;
    }

    h2 {
        text-align: center;
        margin-top: 3%;
    }
</style>

<body>
    <h2>Ingresa tus datos para inscribirte en alguna de nuestras capacitaciones</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post">
        <div class="fbpp">
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Selecciona la capacitación que deseas registrarte</label>
                <select id="disabledSelect" name="titucapa" class="form-select">
                <option value="..........">..........</option>
                    <?php
                    // Generar las opciones del select desde la base de datos
                    if ($resultados->num_rows > 0) {
                        while ($row = $resultados->fetch_assoc()) {
                            echo "<option value='" . $row["titucapa"] . "'>" . $row["titucapa"] . "</option>";
                        }
                    } else {
                        echo "<option>No hay opciones disponibles</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese su nombre</label>
                <input type="text" class="form-control" name="nombre" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Ejemplo: Juan">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese su correo electrónico</label>
                <input type="email" class="form-control" name="correo" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Ejemplo: a@gmail.com">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ingrese su numero telefónico</label>
                <input type="text" class="form-control" name="telefono" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Registrate en esta capacitación</button>
            <a href="pantalla3.php" class="btn btn-danger">Regresar</a>
        </div>
    </form>
</body>

</html>