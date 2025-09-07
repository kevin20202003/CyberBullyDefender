<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    /* Estilos CSS para centrar el mensaje y aumentar el tamaño del texto */
    .message-container {
        text-align: center;
        margin-top: 20px; /* Espacio superior para separar el mensaje del contenido anterior */
    }

    .message {
        font-size: 24px; /* Tamaño de fuente más grande */
    }
</style>
<?php
session_start();

require("conexion.php");
$conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
    exit();
}

if (isset($_POST['validate_email'])) {
    $email = $_POST['email'];

    // Consulta para verificar si el correo existe en la base de datos
    $consultaEmail = "SELECT * FROM superadmins WHERE correo = '$email'";
    $resultadoEmail = mysqli_query($conexion, $consultaEmail);

    if ($resultadoEmail && mysqli_num_rows($resultadoEmail) > 0) {
        // El correo existe en la base de datos, redirige a change_password.php
        $_SESSION['reset_email'] = $email; // Almacena el correo en una variable de sesión
        echo "<div class='message-container alert alert-success'><h1 class='message text-success'>Email verified successfully</h1></div>";
        // Agrega un retraso de 3 segundos antes de redirigir
        echo "<script>setTimeout(function() { window.location.href = 'change_password2.php'; }, 3000);</script>";
        exit();
    } else {
        // El correo no existe en la base de datos, muestra un mensaje de error
        echo "<div class='message-container alert alert-danger'><h1 class='message text-danger'>Error: Email not found</h1></div>";
         // Agrega un retraso de 3 segundos antes de redirigir
         echo "<script>setTimeout(function() { window.location.href = 'recover_password2.php'; }, 3000);</script>";
    }
} elseif (isset($_POST['change_password'])) {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password === $confirm_password) {
        // Obtiene el correo de la variable de sesión
        $reset_email = $_SESSION['reset_email'];

        // Actualiza la contraseña en la base de datos
        $updatePasswordQuery = "UPDATE superadmins SET pass = '$new_password' WHERE correo = '$reset_email'";
        $result = mysqli_query($conexion, $updatePasswordQuery);

        if ($result) {
            // Contraseña cambiada con éxito, muestra un mensaje de éxito y redirige a login.php
            echo "<div class='message-container alert alert-success'><h1 class='message text-success'>Password changed successfully</h1></div>";
            // Agrega un retraso de 3 segundos antes de redirigir
            echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 3000);</script>";
            exit();
        } else {
            // Error al cambiar la contraseña, muestra un mensaje de error
            echo "<div class='message-container alert alert-danger'><h1 class='message text-danger'>Error: Password change failed</h1></div>";
             // Agrega un retraso de 3 segundos antes de redirigir
        echo "<script>setTimeout(function() { window.location.href = 'change_password2.php'; }, 3000);</script>";
        }
    } else {
        // Muestra un mensaje de error si las contraseñas no coinciden
        echo "<div class='message-container alert alert-danger'><h1 class='message text-danger'>Error: Passwords do not match</h1></div>";
         // Agrega un retraso de 3 segundos antes de redirigir
         echo "<script>setTimeout(function() { window.location.href = 'change_password2.php'; }, 3000);</script>";
    }
}

mysqli_close($conexion);
?>
