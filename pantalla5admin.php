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
    <title>Cuentanos tu caso Admin</title>
</head>
<body>
<style>
    .tablafor {
        margin-top: 100px;
        text-align: center;
        align-items: center;
        justify-content: center;
        border-collapse: collapse;
        /* Esto elimina el espacio entre las celdas */
        width: 100%;
        /* Ancho de la tabla al 100% */
        border: 1px solid #ccc;
        /* Borde alrededor de la tabla */
    }


    th,
    td,
    tr {
        color: #ccc;
        padding: 8px;
        /* Espacio interno en celdas */
        text-align: center;
        /* Alineación del texto en las celdas */
        border: 1px solid #ccc;
        /* Borde alrededor de las celdas */
    }

    .btnimpri{
margin-left: 700px;
        margin-top: 60px;
    }

    @media print {
    /* Estilos para la vista previa de impresión */
    body * {
        visibility: hidden;
    }

    .tablafor,
    .tablafor * {
        visibility: visible;
    }

    .tablafor {
        position: absolute;
        left: 0;
        top: 0;
    }
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
<div id="pantalla5"
    style=" width: 100%; background-image: url('imagenes/fondo.png'); background-size: cover;">
    <div class="plantillaXD">

        <div class="video-container">
            <?php
            require("conexion.php");
            $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
            if (mysqli_connect_errno()) {
                echo "Fallo al conectar con la base de datos";
                exit();
            }

            mysqli_select_db($conexion, $db_nombre) or die("No se encuentra en la base de datos");
            mysqli_set_charset($conexion, "utf8");
            $consulta = "SELECT * FROM formulario";
            $resultados = mysqli_query($conexion, $consulta);
            ?>

            <table class="tablafor">
                <tr>
                    <th><h6><b>Nombre</b></h6></th>
                    <th>Correo</th>
                    <th>Contacto</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Fecha Suceso</th>
                    <th>Nivel Académico</th>
                    <th>Experiencia</th>
                    <th>Rol</th>
                    <th>Género</th>
                    <th>Ley de datos personales</th>
                </tr>
                <?php
                while ($fila = mysqli_fetch_array($resultados)) {
                    echo "<tr>";
                    echo "<td>" . $fila['nombre'] . "</td>";
                    echo "<td>" . $fila['correo'] . "</td>";
                    echo "<td>" . $fila['contacto'] . "</td>";
                    echo "<td>" . $fila['fecha_nacimiento'] . "</td>";
                    echo "<td>" . $fila['fecha_suceso'] . "</td>";
                    echo "<td>" . $fila['nivel_academico'] . "</td>";
                    echo "<td>" . $fila['experiencia'] . "</td>";
                    echo "<td>" . $fila['rol'] . "</td>";
                    echo "<td>" . $fila['genero'] . "</td>";
                    echo "<td>" . $fila['ley_datos_personales'] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($conexion);
                ?>
                <br><br><br>
                

            </table>
        </div>
        <button class="btnimpri" id="imprimirButton">Imprimir</button>
        <br><br><br><br><br><br><br><br><br><br>
        <?php include 'contactos.php'; ?>
    </div>
</div>

<script src="menu.js"></script>
<script>
document.getElementById("imprimirButton").addEventListener("click", function() {
    // Pide al usuario que ingrese el rol o roles que desea imprimir
    const rol = prompt("Ingrese el rol o roles a imprimir (separados por comas si son muchos roles):");
    
    if (rol !== null && rol.trim() !== "") {
        // Divide los roles ingresados por comas y elimina espacios en blanco
        const roles = rol.split(",").map(rol => rol.trim());
        
        // Selecciona todas las filas de la tabla
        const filas = document.querySelectorAll(".tablafor tbody tr");
        
        // Oculta todas las filas
        filas.forEach(fila => {
            fila.style.display = "none";
        });

        // Filtra y muestra solo las filas que coincidan con los roles ingresados
        filas.forEach(fila => {
            const rolCell = fila.querySelector("td:nth-child(8)"); // Cambia el índice según la columna del rol
            if (rolCell) {
                const rolTexto = rolCell.textContent.trim(); // Agrega trim() aquí
                if (roles.includes(rolTexto)) {
                    fila.style.display = "table-row";
                }
            }
        });

        // Abre una ventana de impresión y muestra la vista previa
        window.print();

        // Restaura la visualización de todas las filas
        filas.forEach(fila => {
            fila.style.display = "table-row";
        });
    }
});
</script>




</body>
</html>