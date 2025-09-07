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
    <title>Cuentanos tu caso</title>
</head>
<style>
    .separator3 {
        border-top: 2px solid #00d4ff;
        width: 100%;
        /* Color y grosor del separador */

        /* Margen superior e inferior del separador */
    }

    .btn32 {
        background: rgb(0, 95, 217);
        background: linear-gradient(90deg, rgba(0, 95, 217, 1) 13%, rgba(8, 103, 140, 1) 61%, rgba(4, 191, 173, 1) 95%);
        border-radius: 100px;
        padding: 10px;
    }

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
        margin-top: 40px;
    }

    .form-control option {
        color: black;
    }

    .formulariocuenta {
        margin-top: -20px;
    }

    .men {
        width: 400px;
        margin-top: 100px;
        margin-left: 800px;
    }

    .leydatosp {
        font-size: 100%;
    }

    .men p {
        color: black;
    }

    .tituloformsc h3 {

        padding: 10px;
        text-align: center;
    }

    .form-control1 {
        width: 100%;
        height: 10vh;
        color: black;
    }

    /* Oculta el contenedor cuando el checkbox está marcado */
    #checkboxDeshabilitar:checked~#contenedorOculto {
        display: none;
    }


    @media (max-width: 768px) {
        .col-6 {
            flex-direction: column-reverse;
            /* Invierte el orden de las columnas */
        }
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
    <div id="pantalla5">

        <div class="plantillaXD">

            <?php
            // Establecer la conexión a la base de datos
            require("conexion.php");

            $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
            if (mysqli_connect_errno()) {
                echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
                exit();
            }

            // Verificar si se ha enviado el formulario
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Verificar si se ha enviado el formulario de registro
                if (isset($_POST['btn32'])) {
                    // Verificar si el checkbox está marcado
                    if (isset($_POST['checkboxDeshabilitar']) && $_POST['checkboxDeshabilitar'] == 'on') {
                        // El checkbox está marcado, establece valores predeterminados
                        $nombre = 'Anónimo';
                        $correo = 'Anónimo';
                        $contacto = '****'; // Establece asteriscos para el número
                        $fechaNacimiento = '0000-00-00';
                        $fechaSuceso = '0000-00-00';
                        $nivelAcademico = 'Anónimo';
                        $rol = 'Anónimo';
                        $experiencia = 'Anónimo'; // Establece un valor predeterminado para $experiencia
                        $genero = 'Anónimo'; // Establece un valor predeterminado para $genero
                    } else {
                        // El checkbox no está marcado, obtén los valores enviados por el formulario
                        $nombre = isset($_POST['txtNombres']) ? $_POST['txtNombres'] : 'Anónimo';
                        $correo = isset($_POST['txtCorreo']) ? $_POST['txtCorreo'] : 'Anónimo';
                        $contacto = isset($_POST['txtContacto']) ? $_POST['txtContacto'] : '**********';
                        $fechaNacimiento = isset($_POST['fechaNacimiento']) ? $_POST['fechaNacimiento'] : '0000-00-00';
                        $fechaSuceso = isset($_POST['fechaSuceso']) ? $_POST['fechaSuceso'] : '0000-00-00';
                        $nivelAcademico = isset($_POST['ddlRol']) ? $_POST['ddlRol'] : 'Anónimo';
                        $rol = isset($_POST['ddlRol2']) ? $_POST['ddlRol2'] : 'Anónimo';
                        $experiencia = isset($_POST['txtComentario']) ? $_POST['txtComentario'] : 'Anónimo';
                        $genero = isset($_POST['gender']) ? $_POST['gender'] : 'Anónimo';
                    }
            
                    // Verificar si el checkbox está marcado
                    $datosp = isset($_POST['ley_datos_personales']) ? "Si quiero que me ayuden utilizndo mis datos personales" : "No quiero que me ayuden ni utilizen mis datos personales ";
            
                    // Consulta para insertar los datos en la base de datos
                    $consulta = "INSERT INTO formulario (nombre, correo, contacto, fecha_nacimiento, fecha_suceso, nivel_academico, experiencia, rol, genero, ley_datos_personales) 
                     VALUES ('$nombre', '$correo', '$contacto', '$fechaNacimiento','$fechaSuceso', '$nivelAcademico', '$experiencia', '$rol', '$genero', '$datosp')";
            
                    // Ejecutar la consulta
                    if (mysqli_query($conexion, $consulta)) {
                        // Datos insertados correctamente, puedes redirigir a otra página o mostrar un mensaje de éxito
                        echo "<div class='men alert alert-success'><p>¡Formulario enviado correctamente!</p></div>";
                    } else {
                        // Error al insertar datos, mostrar mensaje de error
                        echo "Error al insertar datos: " . mysqli_error($conexion);
                    }
                }
            }
            
            mysqli_close($conexion);
            ?>
            <br><br><br><br><br>
            <section class="forms">

                <div class="tituloformsc">
                    <h3>Si deseas cuentanos tu caso de acoso</h3>
                </div>
                <div class="containerf">
                    <div class="row">
                        <!-- Columna para el contenedor del mensaje motivacional en el lado izquierdo -->
                        <div class="col-12 col-md-6 order-1 order-md-1">
                            <div class=""
                                style="box-shadow: 0 0 10px #00d4ff; width: 90%; margin: 20px; padding: 20px;">
                                <h3 style="text-align: justify; color: white;">¡Tu historia importa!</h3>
                                <br>
                                <p style="text-align: justify;">
                                    No estás solo en esta batalla. El bullying o ciberbullying puede hacerte sentir como si estuvieras
                                    atrapado
                                    en un laberinto oscuro, pero quiero recordarte que siempre habrá una luz que te guíe
                                    hacia la
                                    salida. Tienes una comunidad de personas dispuestas a escucharte, apoyarte y luchar
                                    junto a ti.
                                    Tu valentia en entornos ya sea académicos, tu hogar, con tus amigos o en otros
                                    lugares,
                                    para ayudarte.
                                    Juntos, podemos construir un mundo donde el
                                    respeto y la
                                    empatía sean los pilares fundamentales. No permitas que el bullying o ciberbullying
                                    defina quién
                                    eres.
                                </p>
                                <div style="display: flex; justify-content: center;">
                                    <img src="imagenes/b4.jpg" class="formimg" alt="">
                                </div>
                                <br>
                            </div>

                        </div>

                        <!-- Columna para el formulario en el lado derecho -->
                        <div class="col-12 col-md-6 order-2 order-md-2">
                            <div style="display: flex; margin: 20px;">
                                <form id="myForm" class="formulariocuenta" method="post"
                                    action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="form-group" style="text-align: center;">
                                        <h3 style="color: white; margin-top: 30px;">Ingrese el siguiente formulario</h3>
                                        <!-- Agrega aquí el texto que desees mostrar -->
                                    </div>
                                    <br>
                                    <input type="checkbox" id="checkboxDeshabilitar"> ¿Desea enviar el formulario como
                                    anonimo?
                                    <br>
                                    <br>

                                    <div class="row">
                                        <div class="col-12 col-md-4 order-1 order-md-1">
                                            <p>Nombre y apellido</p>
                                            <div class="form-group">
                                                <input type="text" class="form-control" aria-label="Nombre"
                                                    name="txtNombres" runat="server" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 order-2 order-md-2">
                                            <p>Correo electrónico</p>
                                            <div class="form-group">
                                                <input type="text" class="form-control" aria-label="Correo Electrónico"
                                                    name="txtCorreo" runat="server" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 order-3 order-md-3">
                                            <div class="form-group">
                                                <p>Número telefónico</p>
                                                <input type="number" class="form-control" aria-label="Teléfono"
                                                    name="txtContacto" runat="server" id="txtContacto" />
                                                <div id="phoneError" style="color: red;"></div>
                                            </div>

                                        </div>
                                    </div>

                                    <br>


                                    <div class="row flex-row align-items-center">
                                        <div class="col-6">
                                            <p>Selecciona tu fecha de nacimiento</p>
                                            <div class="form-group">
                                                <?php
                                                // Calcular la fecha máxima permitida (8 años atrás desde la fecha actual)
                                                $fechaMaxima = date('Y-m-d', strtotime('-8 years'));
                                                ?>
                                                <input type="date" class="form-control"
                                                    placeholder="Escoge tu fecha de nacimiento"
                                                    aria-label="Fecha de Nacimiento" name="fechaNacimiento"
                                                    runat="server" max="<?php echo $fechaMaxima; ?>">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <p>Selecciona la fecha del suceso</p>
                                            <div class="form-group">
                                                <input type="date" class="form-control"
                                                    placeholder="Escoge la fecha del suceso"
                                                    aria-label="Fecha de suceso" name="fechaSuceso" id="fechaSuceso"
                                                    runat="server">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row flex-row align-items-center">
                                        <div class="col-12 col-md-6 order-1 order-md-1">
                                            <div class="form-group">
                                                <p>Selecciona tu nivel académico</p>
                                                <select class="form-control" aria-label="Nivel Académico" name="ddlRol"
                                                    runat="server">
                                                    <option value="..........">..........</option>
                                                    <option value="Educacion_Basica">Educación Básica</option>
                                                    <option value="Colegio">Colegio</option>
                                                    <option value="Bachillerato">Bachillerato</option>
                                                    <option value="Educacion_Superior">Educación Superior</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 order-2 order-md-2">
                                            <div class="form-group">
                                                <p>Selecciona tu rol</p>
                                                <select class="form-control" aria-label="Rol" name="ddlRol2"
                                                    runat="server">
                                                    <option value="..........">..........</option>
                                                    <option value="Víctima">Víctima</option>
                                                    <option value="Testigo">Testigo</option>
                                                    <option value="Agresor">Agresor</option>
                                                    <option value="Apoyo">Apoyo</option>
                                                    <option value="Apoyo">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <p>Este apartado es para que cuentes tu caso de
                                                    bullying o ciberbullyng según tu
                                                    perspectiva.</p>
                                                <textarea class="form-control1" placeholder="Cuéntanos tu experiencia"
                                                    aria-label="Experiencia" name="txtComentario"
                                                    runat="server"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" style="justify-content: center;">
                                        <div style="margin-top: 15px;">
                                            <label style="color: white; text-align: left;"><b>Género:</b></label>
                                        </div>
                                        <div class="col-6">

                                            <br>
                                            <div class="radio-buttons">
                                                <label for="rbHombre">Hombre</label>
                                                <input type="radio" id="rbHombre" name="gender" value="Hombre"
                                                    runat="server">

                                                <label for="rbMujer">Mujer</label>
                                                <input type="radio" id="rbMujer" name="gender" value="Mujer"
                                                    runat="server">

                                                <label for="rbOtros">Otros</label>
                                                <input type="radio" id="rbOtros" name="gender" value="Otros"
                                                    runat="server">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row" id="contenedorOculto">
                                        <div class="col-12 col-md-12 order-1 order-md-1">
                                            <p class="leydatosp">Deseas que te ayude un profesional experto en el tema
                                                te ayude y se comunique
                                                contigo en tu caso utilizando tus datos personales?
                                                <input type="checkbox" class="ley" name="ley_datos_personales">
                                            </p>

                                        </div>

                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="x">


                                            <div class="col-12" style="display: flex; justify-content: center;">
                                                <div class="tooltip-text" id="buttonTooltip">Tu historia no se hará
                                                    pública
                                                    ni mucho menos, así que ten la libertad de sentirte seguro al
                                                    compartirla.</div>
                                                <input type="submit" class="btn32 btn-primary" name="btn32"
                                                    value="Enviar Formulario" onclick="return validateForm();"
                                                    onmouseover="showTooltip('buttonTooltip');"
                                                    onmouseout="hideTooltip('buttonTooltip');">
                                            </div>


                                        </div>
                                    </div>
                                </form>

                            </div>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </section>
            <!--Contactos-->
            <?php
            include 'contactos.php';
            ?>

        </div>
    </div>


</body>

<script src="menu.js"></script>
<script>
    // Obtén una referencia al checkbox y a los campos que deseas deshabilitar
    var checkbox = document.getElementById('checkboxDeshabilitar');
    var camposParaDeshabilitar = document.querySelectorAll('.form-control, select');
    var contenedorOculto = document.getElementById('contenedorOculto');

    // Agrega un event listener al checkbox para detectar los cambios
    checkbox.addEventListener('change', function () {
        // Verifica si el checkbox está marcado
        if (checkbox.checked) {
            // Deshabilita los campos
            camposParaDeshabilitar.forEach(function (campo) {
                campo.disabled = true;
                campo.style.backgroundColor = 'black';
                campo.style.color = 'black';
            });
            // Oculta el contenedor
            contenedorOculto.style.display = 'none';
        } else {
            // Habilita los campos
            camposParaDeshabilitar.forEach(function (campo) {
                campo.disabled = false;
                campo.style.backgroundColor = '';
                campo.style.color = ''; /* Restablece el color de fondo al valor predeterminado */
            });
            // Muestra el contenedor
            contenedorOculto.style.display = 'block';
        }
    });
</script>


<script>    // Deshabilitar el mensaje de confirmación de reenvío de formulario
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

</script>
<script>
    // Obtiene la fecha actual en el formato "YYYY-MM-DD"
    var fechaActual = new Date().toISOString().split('T')[0];

    // Asigna la fecha actual como la fecha máxima en el campo de fecha de suceso
    document.getElementById('fechaSuceso').setAttribute('max', fechaActual);
</script>

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

</html>