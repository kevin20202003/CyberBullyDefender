<?php
if (isset($_GET['id'])) {
    // Obtiene el ID del SuperUser a eliminar desde el parámetro de la URL
    $idToDelete = $_GET['id'];

    // Conecta a la base de datos y ejecuta la consulta de eliminación
    require("conexion.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la base de datos";
        exit();
    }
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra en la base de datos");
    mysqli_set_charset($conexion, "utf8");

    $consultaEliminar = "DELETE FROM superadmins WHERE id = $idToDelete";
    $resultadoEliminar = mysqli_query($conexion, $consultaEliminar);

    if ($resultadoEliminar) {
        // Redirige de nuevo a la página después de eliminar
        header("Location: eliminar_superuser.php");
        exit();
    } else {
        echo "Error al eliminar el SuperUser.";
    }

    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar SuperUser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Remove SuperUsers</h1>
        <br><br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mail</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí debes agregar código PHP para obtener los SuperUsers de la base de datos y mostrarlos en la tabla -->
                <?php
                // Conecta a la base de datos y recupera los SuperUsers
                require("conexion.php");
                $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
                if (mysqli_connect_errno()) {
                    echo "Fallo al conectar con la base de datos";
                    exit();
                }
                mysqli_select_db($conexion, $db_nombre) or die("No se encuentra en la base de datos");
                mysqli_set_charset($conexion, "utf8");

                $consulta = "SELECT id, name, correo, pass FROM superadmins";
                $resultados = mysqli_query($conexion, $consulta);

                while ($fila = mysqli_fetch_array($resultados)) {
                    $id = $fila['id'];
                    $nombre = $fila['name'];
                    $correo = $fila['correo'];
                    $contra = $fila['pass'];
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$nombre</td>";
                    echo "<td>$correo</td>";
                    echo "<td>$contra</td>";
                    echo "<td><a href='javascript:void(0);' class='btn btn-danger' onclick='confirmarEliminacion($id)'>Eliminate</a></td>";
                    echo "</tr>";
                }

                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
        <br><br><br>
        <div class="text-center">
        <a href="indexadmin.php" class="btn btn-success">Go Back</a>
        </div>
    </div>
    <script>
    function confirmarEliminacion(id) {
        var confirmacion = confirm("¿Estás seguro de que deseas eliminar este SuperUser?");
        if (confirmacion) {
            window.location.href = "eliminar_superuser.php?id=" + id;
        }
    }
</script>

</body>
</html>

