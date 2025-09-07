<?php
session_start();
// login.php

require("conexion.php");
$conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
if (mysqli_connect_errno()) {
  echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
  exit();
}

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verificar si se ha enviado el formulario de inicio de sesión
  if (isset($_POST['login'])) {
    // Obtener los valores enviados por el formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar las credenciales del administrador
    $consultaAdmin = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    $resultadoAdmin = mysqli_query($conexion, $consultaAdmin);

    $consultaSuperadmin = "SELECT * FROM superadmins WHERE correo = '$email' AND pass = '$password'";
    $resultadoSuperadmin = mysqli_query($conexion, $consultaSuperadmin);

    // Verificar si la consulta fue exitosa
    if ($resultadoAdmin) {
      // Verificar si se encontró un registro de administrador en la base de datos
      if (mysqli_num_rows($resultadoAdmin) > 0) {
        // Inicio de sesión como administrador exitoso
        $rowAdmin = mysqli_fetch_assoc($resultadoAdmin);
        $_SESSION['id'] = $rowAdmin['id'];
        $_SESSION['nombre'] = $rowAdmin['nombre'];
        $_SESSION['email'] = $rowAdmin['email'];

        // Redirigir a indexadmin.php
        header("Location: indexadmin.php");
        exit();
      } 
    } else {
      // Hubo un error en la consulta para administrador, muestra el mensaje de error
      echo "Error en la consulta: " . mysqli_error($conexion);
    }

    // Consulta para verificar las credenciales del superadmin
    

    // Verificar si la consulta fue exitosa
    if ($resultadoSuperadmin) {
      // Verificar si se encontró un registro de superadmin en la base de datos
      if (mysqli_num_rows($resultadoSuperadmin) > 0) {
        // Inicio de sesión como superadmin exitoso
        $rowSuperadmin = mysqli_fetch_assoc($resultadoSuperadmin);
        $_SESSION['id'] = $rowSuperadmin['id'];
        $_SESSION['nombre'] = $rowSuperadmin['name'];
        $_SESSION['email'] = $rowSuperadmin['correo'];

        // Redirigir a indexpagemaster.php
        header("Location: indexpagemaster.php");
        exit();
      } else {
        // Credenciales incorrectas para superadmin, mostrar mensaje de error
        echo "<div class='alert alert-danger'>Error: Credenciales incorrectas</div>";
      }
    } else {
      // Hubo un error en la consulta para superadmin, muestra el mensaje de error
      echo "Error en la consulta: " . mysqli_error($conexion);
    }
  }
}

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="imagenes/logo prueba.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Login</title>

</head>
<style>
  @import url(https://fonts.googleapis.com/css?family=Poppins:300);

  html {
    height: 100%;
  }

  body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(#30142b, #2772a1);
  }

  .login-page {
    width: 400px;
    padding: 8% 0 0;
    margin: auto;
  }

  .form {
    position: relative;
    z-index: 1;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0, 0, 0, .5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
    border-radius: 10px;
  }

  .form input {
    width: 100%;
    padding: 10px 0;
    font-size: 13px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;

  }

  h2 {
    color: white;
  }


  .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
  }

  .form .message a {
    color: #289bb8;
    text-decoration: none;
  }

  .form .register-form {
    display: none;
  }

  .btn {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #289bb8;
    font-size: 16px;
    text-decoration: none;
    overflow: hidden;
    transition: .5s;
    margin-top: 15px;
    letter-spacing: 2px
  }

  .btn:hover {
    background: #289bb8;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px #289bb8,
      0 0 25px #289bb8,
      0 0 50px #289bb8,
      0 0 100px #289bb8;
  }

  .btn span {
    position: absolute;
    display: block;
  }

  .btn span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #289bb8);
    animation: btn-anim1 1s linear infinite;
  }

  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }

    50%,
    100% {
      left: 100%;
    }
  }

  .btn span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #289bb8);
    animation: btn-anim2 1s linear infinite;
    animation-delay: .25s
  }

  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }

    50%,
    100% {
      top: 100%;
    }
  }

  .btn span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, #289bb8);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s
  }

  @keyframes btn-anim3 {
    0% {
      right: -100%;
    }

    50%,
    100% {
      right: 100%;
    }
  }

  .btn span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, #289bb8);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s
  }

  @keyframes btn-anim4 {
    0% {
      bottom: -100%;
    }

    50%,
    100% {
      bottom: 100%;
    }
  }
</style>
<body style="display:flex; align-items:center; justify-content:center;">
  <div class="login-page">
    <div class="form">
      <form class="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit" class="btn" name="login">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Sign in
        </button>
        <p class="message"><a href="opcion.php">Did you forget your password?</a></p>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $('.message a').click(function () {
      $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
    });
  </script>
</body>

</html>