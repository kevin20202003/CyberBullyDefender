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
  <title>EmpresasAdmin</title>
</head>
<body>
<script src="https://kit.fontawesome.com/e9f58d382f.js" crossorigin="anonymous"></script>
<?php
// Llamada al archivo HTML utilizando la función include o require
include 'estilos.html';
?>
<style>
  .msinfo:hover {
    color: cadetblue;
  }

  #pantalla2 {
    height: auto;
  }


  .blog {
    background-color: #1f2124;


  }
  .container2 {
    /* border: 1px solid black; */
    /* Comentado para eliminar los bordes en este ejemplo */
    /* margin-bottom: 10px; */
    /* Comentado para eliminar los márgenes inferiores en este ejemplo */
    cursor: pointer;
    /* background-color: black; */
    /* Comentado para eliminar los fondos negros en este ejemplo */
    /* color: #333; */
    /* Comentado para eliminar el color del texto en este ejemplo */
    /* Comentado para eliminar las transiciones en este ejemplo */
    flex: 1;
    /* Distribuir el espacio disponible entre los contenedores */
    max-width: 100%;
    /* Establecer un ancho máximo para los contenedores (puedes ajustar este valor según tus necesidades) */
    padding: 35px;


  }

  .infoblog:hover {
    /* Increase the height on hover to expand the container */
    height: auto;
    width: 100%;
    /* Add a box shadow with multiple layers for a glowing effect */
    box-shadow: 0 0 2px #289bb8, 0 0 12px #289bb8, 0 0 25px #289bb8, 0 0 50px #289bb8;
    background: rgb(1, 125, 193);
    background: linear-gradient(0deg, rgba(1, 125, 193, 1) 0%, rgba(9, 11, 31, 1) 76%);
  }



  .infoblog {
    width: calc(20% - 100%); /* Ancho para tres contenedores en una fila, considerando el espacio entre ellos */

    display: flex;
    margin-right: 10px;
    /* Espacio horizontal entre los contenedores */
    width: 100%;

  }

  .blog-image {
    width: 100%;
    height: auto;
  }

  .blog-details3 {
    text-align: center;
    color: white;
    margin: 14px;
  }

  .separator {
    border-top: 2px solid #ff0000;
    /* Color y grosor del separador */
    margin: 10px 0;
    /* Margen superior e inferior del separador */
  }

  .blogdate {
    text-align: right;
    margin-right: 5px;
  }

  .separator2 {
    border-top: 1px solid #ffffff;
    /* Color y grosor del separador */
    margin: 10px 0;
    /* Margen superior e inferior del separador */
  }

  .leermas {
    text-align: center;
  }

  .leermas a {
    color: white;
  }

  .container-grid {
    text-align: center;
    display: flex;
    /* Utilizamos flexbox para los contenedores */
    justify-content: space-between;
    /* Distribuir los contenedores con espacio entre ellos */
  }





  .hidden {
    display: none;
  }

  .info p {
    color: white;
  }

  .redes2 p {


    font-size: 15px;
  }


  .redes2 {
    /* margin-top: 300px; */
    /* Comentado para eliminar el margen superior */
    background-color: #000;
    height: 250px;
    position: sticky;
    /* Añadir posicionamiento fijo */
    bottom: 20px;
    /* Colocar la sección a 20px del borde inferior */
    left: 0;
    /* Alinear a la izquierda */
    right: 0;
    /* Alinear a la derecha */
    top: 1000px;
    /* Ajustar el valor para el espaciado deseado */
  }

  .tituloblog h2 {
    font-size: 22px;
  }

  .sombraCapa {
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

  @keyframes abrircontenedorGrandeempre {
    from {
      opacity: 0;
      transform: scale(0.5);
    }

    to {
      opacity: 1;
      transform: scale(1);
    }
  }

 

  .close-btn2 {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
    color: #ffffff;
  }

  #contenedorGrandeempre {
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
    animation: abrircontenedorGrandeempre 0.5s ease;
    position: fixed;
    top: 20%;
    left: 20%;
    width: 60%;
    height: 70%;
    z-index: 9999;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
  }

  

  .msinfo {
    margin-left: 10px;
    color: white;
    text-decoration: ;
  }



  .imgblog img {
    height: 180px;
    width: 270px;
  }

  .art img {
    height: 180px;
    width: 270px;
  }

  .icono-eliminar {
    color: white;
    text-align: center;
    display: block;
  }

  .overlay3{
    background-color: rgba(0, 0, 0, 0.5);
        display: none;
        animation: abrircontenedorGrandeempre 0.5s ease;
        position: fixed;
        top: 20%;
        left: 20%;
        width: 60%;
        height: 60%;
        z-index: 9999;
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        display: justify;

  }

  .contenedor-formulario label{
color: white;
  }

  .contenedor-formulario {
text-align: center;
  }
  
  .formulario-columna{

align-items: center;

  }

  .contenedor-formulario input{
    width: 500px;
    height: 50px;
  }

  .formulario-columna {
  display: flex;
  flex-direction: column;
}

.formulario-columna label,
.formulario-columna input {
  margin-bottom: 10px;
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
<div id="pantalla2" style="background-image: url('imagenes/fondo.png'); background-size: cover;">


  <br><br><br>

  <section class="info">
    <div class="container-grid">


      <?php
     require("conexion.php");
      
      $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
      if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
        exit();
      }

      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnAgregar2'])) {
        $titulo = $_POST['titulo'];
        $imagen = $_POST['imagen'];
        $descripcion = $_POST['descripcion'];
        $descri2 = $_POST['descri2'];
        $ima2 = $_POST['ima2'];

        // Consulta para insertar el título en la base de datos
        $consulta = "INSERT INTO infoblogs (titulo, imagen, descripcion, descri2, ima2) VALUES ('$titulo','$imagen','$descripcion','$descri2','$ima2')";

        if (mysqli_query($conexion, $consulta)) {
          echo "¡Articulo agregado correctamente!";
        } else {
          echo "Error al agregar el título: " . mysqli_error($conexion);
        }
      }

      if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['eliminar'])) {
        $idEliminar = $_GET['eliminar'];

        // Consulta para eliminar el título de la base de datos
        $consulta_eliminar = "DELETE FROM infoblogs WHERE id = $idEliminar";

        if (mysqli_query($conexion, $consulta_eliminar)) {
          echo "¡Título eliminado correctamente!";
        } else {
          echo "Error al eliminar el título: " . mysqli_error($conexion);
        }
      }

      // Consulta para obtener los títulos de la base de datos
      $consulta_titulos = "SELECT * FROM infoblogs";
      $resultados_titulos = mysqli_query($conexion, $consulta_titulos);
      ?>


<div class="contenedores2">
    <?php
    $i = 1;
    while ($fila = mysqli_fetch_assoc($resultados_titulos)) {
      $id = $fila['id'];
        $titulo = $fila['titulo'];
        $imagen = $fila['imagen'];
        $descripcion = $fila['descripcion'];
        $descri2 = $fila['descri2'];
        $ima2 = $fila['ima2'];

        // Abrir una nueva fila después de cada 3 contenedores
        if (($i - 1) % 3 === 0) {
            echo '<div class="row">';
        }

        echo '<div class="col-md-4">';
        echo "<div class='container2'>
                <div class='infoblog'>
                    <div class='blog-details3'>
                        <!-- Contenido del tercer contenedor -->
                        <div class='tituloblog'>
                            <h2><a href='#f' style='color: white; text-decoration: none;'>$titulo</a></h2>
                        </div>
                       
                        <div id='text$i' class='hidden'>
                        </div>
                            <!-- Agrega el contenido desplegable aquí si es necesario -->
                            
                            
                        <br>
                        <div class='imgblog'>
                            <img src='$imagen' alt=''></img>
                        </div>
                        <br>
                        <div class='blogdescripcion'>
                            <p style='text-align: left;'>$descripcion
                                <a class='msinfo' href='#' onclick='mostrarContenedorGrande1($i)'>mas info</a>
                            </p>
                        </div>
                       
                        
                        <br>
                  
                        <br>
                    </div>
                </div>
                <i class='fas fa-trash-alt icono-eliminar' onclick='eliminarContenedor($id)'></i>
            </div>
            
            <!-- Contenedor grande -->
            <div id='contenedorGrandeempre$i' class='overlay3' onclick='cerrarContenedorGrande1($i)' style='text-align:justify; height: auto; display:none; text-align: center; justify-content: center;'>
                <div class='advertisement2'>
                    <h2 style='color: #26888f;'>$titulo</h2>
                    <p>$descri2</p>
                    <span class='close-btn2' onclick='cerrarContenedorGrande1($i)'>&times;</span>
                    <div class='art'>
                        <img src='$ima2' alt=''>
                    </div>
                </div>
            </div>
            <div id='sombraCapa' class='sombraCapa' onclick='cerrarContenedorGrande()'></div>";
        echo '</div>';

        // Cerrar la fila después de cada 3 contenedores
        if ($i % 3 === 0) {
            echo '</div>'; // Cerrar la fila
        }

        $i++;
    }

    // Si el ciclo no termina en un múltiplo de 3, cierra la última fila
    if (($i - 1) % 3 !== 0) {
        echo '</div>'; // Cerrar la última fila
    }
    ?>
</div>

      <?php
      mysqli_close($conexion);
      ?>

      <script>
        function eliminarContenedor(id) {
          if (confirm("¿Estás seguro de que deseas eliminar este contenedor?")) {
            window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>?eliminar=" + id;
          }
        }
      </script>


    </div>
    <div class="contenedor-formulario">
      <h2>Agregar infoblog</h2>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm();">
        <div class="formulario-columna">
          <label for="titulo">Título:</label>
          <input type="text" id="titulo" name="titulo" required placeholder="Ingrese el título principal del infoblog">

          <label for="imagen">Imagen:</label>
          <input type="text" id="image" name="imagen" required
            placeholder="Ingrese la ruta de la imagen desde la carpeta imagenes/ejemplo.jpg">

          <label for="descripcion">Descripción:</label>
          <input type="text" id="descripcion" name="descripcion" required
            placeholder="Ingrese una descripción corta de no más de 100 palabras">
          <span id="descLengthWarning" style="color: red;"></span>

          <label for="descri2">Descripción 2:</label>
          <input type="text" id="descri2" name="descri2" required
            placeholder="Ingrese la descripción completa para este infoblog">

          <label for="ima2">Imagen 2:</label>
          <input type="text" id="ima2" name="ima2" required
            placeholder="Ingrese la imagen con la ruta y la carpeta imagenes/ejemplo2.jpg">

        </div>
        <div class="botoness">
        <button type="submit" name="btnAgregar2"><i class="fas fa-plus"></i> Agregar Infoblog</button>
        </div>
      </form>
    </div>


    <!--
      <div class="container2">
        <div class="infoblog">
          <div class="blog-details4">
             Contenido del tercer contenedor 
            <div class="tituloblog">
              <h2><a href="#f" style="color: white;">GESTION DE RIESGOS
                </a></h2>
            </div>
            <div class="separator"></div>
            <div id="text1" class="hidden">
              <div class="blogdate">Fecha: 20/06/2023</div>
              <br>
              <div class="imgblog">
                <img src="imagenes/riesgos.png"></img>

              </div>
              <br>
              <div class="blogdescripcion">
                <p style="text-align: left;">
                  La gestión de riesgos implica identificar, analizar y abordar posibles eventos que puedan afectar los
                  objetivos de una organización.<a class="msinfo" href="#" onclick="mostrarContenedorGrande8(8)">mas
                    info</a>
                </p>
              </div>
              <div class="separator2"></div>
              Separador 
            </div>
            <br>
            <div class="leermas">
              <a href="#f" onclick="toggleText(1)" id="toggleLink1">Ver mas</a>
            </div>
            <br>
          </div>
        </div>
        <i class="fas fa-trash-alt icono-eliminar" onclick="eliminarContenedor(this)"></i>
      </div>

      <div class="container2">
        <div class="infoblog">
          <div class="blog-details5">
           Contenido del tercer contenedor 
            <div class="tituloblog">
              <h2><a href="#f" style="color: white;">PISHING
                </a></h2>
            </div>
            <div class="separator"></div>
            <div id="text2" class="hidden">
              <div class="blogdate">Fecha: 20/06/2023</div>
              <br>
              <div class="imgblog">
                <img src="imagenes/phishing.jpg"></img>

              </div>
              <br>
              <div class="blogdescripcion">
                <p style="text-align: left;">
                  El phishing es una forma de ciberataque en la que los atacantes se hacen pasar por entidades
                  legítimas, como bancos o empresas, para engañar a las personas y robar información confidencial, como
                  contraseñas o datos financieros.<a class="msinfo" href="#" onclick="mostrarContenedorGrande7(7)">mas
                    info</a>
                </p>
              </div>
              <div class="separator2"></div>
              Separador 
            </div>
            <br>
            <div class="leermas">
              <a href="#f" onclick="toggleText(2)" id="toggleLink2">Ver mas</a>
            </div>
            <br>
          </div>
        </div>
        <i class="fas fa-trash-alt icono-eliminar" onclick="eliminarContenedor(this)"></i>
      </div>

      <div class="container2">
        <div class="infoblog">
          <div class="blog-details6">
           Contenido del tercer contenedor 
            <div class="tituloblog">
              <h2><a href="#f" style="color: white;">CIBERSEGURIDAD
                </a></h2>
            </div>
            <div class="separator"></div>
            <div id="text3" class="hidden">
              <div class="blogdate">Fecha: 20/06/2023</div>
              <br>
              <div class="imgblog">
                <img src="imagenes/ciber1.jpg"></img>

              </div>
              <br>
              <div class="blogdescripcion">
                <p style="text-align: left;">
                  La ciberseguridad es el conjunto de prácticas y medidas diseñadas para proteger sistemas, redes y
                  datos de amenazas cibernéticas. Incluye la prevención, detección y respuesta a ataques informáticos,
                  como malware, phishing y ataques de denegación de servicio.<a class="msinfo" href="#"
                    onclick="mostrarContenedorGrande1(1)">mas info</a>
                </p>

              </div>
              <div class="separator2"></div>
               Separador
            </div>
            <br>
            <div class="leermas">
              <a href="#f" onclick="toggleText(3)" id="toggleLink3">Ver mas</a>
            </div>
            <br>
          </div>
        </div>
        <i class="fas fa-trash-alt icono-eliminar" onclick="eliminarContenedor(this)"></i>
      </div>
    </div>

 ... Existing code ... 
    <div class="info2">
      <div class="container2">
        <div class="infoblog">
          <div class="blog-details7">
            Contenido del cuarto contenedor 
            <div class="tituloblog">
              <h2><a href="#f" style="color: white;">AUDITORIA Y HACKING</a></h2>
            </div>
            <div class="separator"></div>
            <div id="text4" class="hidden">
              <div class="blogdate" style="color: white;">Fecha: 20/06/2023</div>
              <br>
              <div class="imgblog">
                <img src="imagenes/audi1.jpg"></img>

              </div>
              <br>
              <div class="blogdescripcion">
                <p style="text-align: left;">
                  La auditoría se centra en evaluar y mejorar los sistemas de seguridad, mientras que el hacking
                  involucra explorar las debilidades de los sistemas, con intenciones tanto positivas (éticas) como
                  negativas (maliciosas).<a class="msinfo" href="#" onclick="mostrarContenedorGrande9(9)">mas info</a>
                </p>

              </div>
              <div class="separator2"></div>
               Separador
            </div>
            <br>
            <div class="leermas">
              <a href="#f" onclick="toggleText(4)" id="toggleLink4">Ver mas</a>
            </div>
            <br>
          </div>
        </div>
        <i class="fas fa-trash-alt icono-eliminar" onclick="eliminarContenedor(this)"></i>
      </div>

      <div class="container2">
        <div class="infoblog">
          <div class="blog-details8">
             Contenido del quinto contenedor 
            <div class="tituloblog">
              <h2><a href="#f" style="color: white;">LEY DE PROTECCION DE DATOS PERSONALES</a></h2>
            </div>
            <div class="separator"></div>
            <div id="text5" class="hidden">
              <div class="blogdate" style="color: white;">Fecha: 20/06/2023</div>
              <br>
              <div class="imgblog">
                <img src="imagenes/ley1.jpg"></img>

              </div>
              <br>
              <div class="blogdescripcion">
                <p style="text-align: left;">
                  La Ley de Protección de Datos Personales es una normativa legal diseñada para salvaguardar la
                  privacidad y seguridad de la información personal de los individuos. Su objetivo principal es regular
                  la recopilación, uso, almacenamiento y procesamiento de datos personales por parte de organizaciones,
                  gobiernos y entidades, con el fin de garantizar que se respeten los derechos y la intimidad de las
                  personas.<a class="msinfo" href="#" onclick="mostrarContenedorGrande10(10)">mas info</a>
                </p>

              </div>
              <div class="separator2"></div>
               Separador 
            </div>
            <br>
            <div class="leermas">
              <a href="#f" onclick="toggleText(5)" id="toggleLink5">Ver mas</a>
            </div>
            <br>

          </div>
        </div>
        <i class="fas fa-trash-alt icono-eliminar" onclick="eliminarContenedor(this)"></i>
      </div>

    </div>

     ... Rest of the code ... -->


  </section>


  <!-- Ejemplo de botón para agregar un nuevo contenedor -->


  <?php
  // Llamada al archivo HTML utilizando la función include o require
  include 'contactos.php';
  ?>
</div>


<!-- Contenedor grande 
<div id="contenedorGrandeempre" class="overlay" onclick="cerrarContenedorGrande1()"
  style="text-align:justify; height: auto;">
  <div class="advertisement2">
    <h2 style="color: #26888f;">GESTION DE RIESGOS</h2>
    <p>La gestión de riesgos es un proceso fundamental en diversas áreas, desde los negocios hasta la ingeniería y la
      salud. Consiste en la identificación, evaluación y control de eventos o situaciones que podrían afectar
      negativamente los objetivos de una organización o proyecto, así como en el aprovechamiento de posibles
      oportunidades.

      Este proceso consta de varias etapas. En primer lugar, se realiza la identificación de riesgos, que implica
      identificar todas las posibles situaciones que podrían tener un impacto en los objetivos. Luego, se procede a la
      evaluación, donde se analiza la probabilidad de que ocurran dichos eventos y su posible impacto. Posteriormente,
      se clasifican los riesgos en función de su prioridad y se decide cómo abordarlos.

      La planificación de respuestas es una parte crucial de la gestión de riesgos. Aquí, se definen estrategias para
      mitigar los riesgos, transferirlos a terceros, aceptarlos o incluso aprovechar las oportunidades que presentan.
      Estas estrategias pueden incluir la implementación de medidas preventivas, la adquisición de seguros o la
      realización de planes de contingencia.</p>
    <span class="close-btn2" onclick="cerrarContenedorGrande1()">&times;</span>
    <div class="art">
      <img src="imagenes/riesgos2.jpg" alt="">
    </div>
  </div>

</div>

<div id="contenedorGrandeempre2" class="overlay" style="text-align:justify; height: auto;"
  onclick="cerrarContenedorGrande7()">
  <div class="advertisement2">
    <h2 style="color: #26888f;">PISHING</h2>
    <p>El phishing es una forma de ciberataque ampliamente utilizada por delincuentes cibernéticos para obtener acceso a
      información confidencial, como contraseñas, datos financieros y detalles personales. En este tipo de ataque, los
      malintencionados se hacen pasar por entidades legítimas y confiables, como bancos, redes sociales o empresas
      reconocidas, para engañar a las víctimas y manipularlas para que revelen información sensible.

      Los atacantes emplean diversas técnicas, como el envío de correos electrónicos falsos que parecen provenir de
      organizaciones legítimas, o la creación de sitios web falsificados que imitan la apariencia de plataformas
      auténticas. Estos mensajes y sitios web suelen contener enlaces maliciosos o solicitudes engañosas, buscando que
      las víctimas compartan información como contraseñas, números de tarjetas de crédito o datos personales.

      La educación es un componente crucial en la prevención del phishing. Los usuarios deben aprender a identificar
      señales de advertencia, como direcciones de correo electrónico sospechosas, URLs que difieren ligeramente de las
      legítimas o solicitudes inusuales de información. Es importante verificar la autenticidad de los mensajes y
      enlaces antes de proporcionar cualquier dato personal.</p>
    <span class="close-btn2" onclick="cerrarContenedorGrande7()">&times;</span>
    <div class="art">
      <img src="imagenes/phishing2.jpg" alt="">
    </div>
  </div>

</div>

<div id="contenedorGrandeempre3" class="overlay" style="text-align:justify; height: auto;"
  onclick="cerrarContenedorGrande8()">
  <div class="advertisement2">
    <h2 style="color: #26888f;">CIBERSEGURIDAD</h2>
    <p>La ciberseguridad es un campo crítico en la era digital, enfocado en salvaguardar sistemas, redes, dispositivos y
      datos contra una amplia gama de amenazas cibernéticas. Estas amenazas incluyen ataques maliciosos como el malware,
      el phishing, el ransomware y los ataques de denegación de servicio (DDoS), entre otros. El objetivo central de la
      ciberseguridad es garantizar la confidencialidad, integridad y disponibilidad de la información en un entorno en
      línea cada vez más interconectado.

      Las medidas de ciberseguridad abarcan varios aspectos. El uso de autenticación sólida, como contraseñas robustas y
      autenticación de dos factores (2FA), ayuda a prevenir accesos no autorizados. El cifrado de datos en tránsito y en
      reposo añade una capa adicional de protección para que la información confidencial no sea interceptada o
      comprometida.

      La prevención es clave, pero también lo es la detección y respuesta. La monitorización constante de las redes y
      sistemas ayuda a identificar actividad inusual o posibles intrusiones. La respuesta eficaz implica contar con
      planes de contingencia y protocolos para contener y mitigar daños en caso de un incidente de seguridad.</p>
    <span class="close-btn2" onclick="cerrarContenedorGrande8()">&times;</span>
    <div class="art">
      <img src="imagenes/ciber2.jpg" alt="">
    </div>
  </div>

</div>

<div id="contenedorGrandeempre4" class="overlay" style="text-align:justify; height: auto;"
  onclick="cerrarContenedorGrande9()">
  <div class="advertisement2">
    <h2 style="color: #26888f;">AUDITORIA Y HACKING</h2>
    <p><b> Auditoría:</b>
      La auditoría en seguridad informática es un proceso sistemático de evaluación y análisis de los sistemas, redes y
      procedimientos de una organización para determinar la eficacia de sus controles de seguridad. El objetivo es
      identificar vulnerabilidades y debilidades en la infraestructura tecnológica, así como evaluar la conformidad con
      estándares y regulaciones. Las auditorías pueden ser internas o realizadas por terceros y buscan garantizar la
      integridad, confidencialidad y disponibilidad de los activos digitales de una empresa.

      <b>Hacking:</b>
      El hacking es la acción de buscar debilidades en sistemas informáticos con el objetivo de acceder, manipular o
      comprometer información de manera no autorizada. Existen dos enfoques principales: hacking ético y hacking
      malicioso. El hacking ético, también conocido como "ethical hacking", implica la búsqueda de vulnerabilidades con
      el consentimiento de los propietarios de los sistemas, con el fin de fortalecer la seguridad. Por otro lado, el
      hacking malicioso involucra actividades ilegales y dañinas, como el robo de datos o la interrupción de servicios.
    </p>
    <span class="close-btn2" onclick="cerrarContenedorGrande9()">&times;</span>
    <div class="art">
      <img src="imagenes/audi2.jpg" alt="">
    </div>
  </div>

</div>

<div id="contenedorGrandeempre5" class="overlay" style="text-align:justify; height: auto;"
  onclick="cerrarContenedorGrande10()">
  <div class="advertisement2">
    <h2 style="color: #26888f;">LEY DE PROTECCION DE DATOS PERSONALES</h2>
    <p>Las leyes de protección de datos personales varían de un país a otro, pero en general reflejan la preocupación
      global por la privacidad en la era digital, donde la información personal puede ser fácilmente recopilada y
      compartida. Ejemplos notables son el Reglamento General de Protección de Datos (GDPR) en la Unión Europea y la Ley
      de Privacidad del Consumidor de California (CCPA) en Estados Unidos. Estas leyes tienen un impacto significativo
      en cómo las organizaciones manejan los datos personales y refuerzan la importancia de la transparencia y la
      seguridad en la gestión de la información de los individuos.</p>
    <span class="close-btn2" onclick="cerrarContenedorGrande10()">&times;</span>
    <div class="art">
      <img src="imagenes/ley2.jpg" alt="">
    </div>
  </div>

</div>-->
<script>    // Deshabilitar el mensaje de confirmación de reenvío de formulario
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    
    </script>
<script>

  function validateForm() {
    var fields = ['titulo', 'fecha', 'image', 'descripcion', 'descri2', 'ima2'];
    var filled = true;

    for (var i = 0; i < fields.length; i++) {
      var field = document.getElementById(fields[i]);
      if (field.value.trim() === '') {
        filled = false;
        break;
      }
    }

    if (!filled) {
      alert('Por favor, llene todo el formulario.');
      return false;
    }

    return true;
  }

  document.getElementById('descripcion').addEventListener('input', function () {
    var maxLength = 100;
    var currentLength = this.value.split(/\s+/).length;
    document.getElementById('descLengthWarning').textContent = currentLength > maxLength ? "Por favor, ingrese una descripción más corta." : "";
  });

  function mostrarContenedorGrande1(i) {
    const contenedorGrandeempre = document.getElementById(`contenedorGrandeempre${i}`);
    const sombraCapa = document.getElementById('sombraCapa');
    contenedorGrandeempre.style.position = 'absolute';
    contenedorGrandeempre.style.display = "block";
    sombraCapa.style.display = 'block';
  }

  function cerrarContenedorGrande1(i) {
    var contenedorGrandeempre = document.getElementById(`contenedorGrandeempre${i}`);
    var sombraCapa = document.getElementById('sombraCapa');

    contenedorGrandeempre.style.animation = 'cerrarContenedorGrande1 0.5s ease';
    sombraCapa.style.animation = 'cerrarContenedorGrande1 0.5s ease';

    setTimeout(function () {
      contenedorGrandeempre.style.display = 'none';
      sombraCapa.style.display = 'none';
      contenedorGrandeempre.style.animation = '';
      sombraCapa.style.animation = '';
    }, 500);
  }

  function toggleText(i) {
    var text = document.getElementById('text' + i);
    var link = document.getElementById('toggleLink' + i);


    // Toggle the 'hidden' class to show/hide the content
    text.classList.toggle('hidden');

    // Check if the content is hidden or visible and update link text accordingly
    if (text.classList.contains('hidden' + i)) {
      link.innerHTML = 'Ver mas'; // Change the link text to "Ver mas" when content is hidden
    } else {
      link.innerHTML = 'Ver menos'; // Change the link text to "Ver menos" when content is shown
    }
  }

  //contenedor1
  /*
  function mostrarContenedorGrande1(contenedor) {
    var contenedorGrandeempre = document.getElementById('contenedorGrandeempre');
    var sombraCapa1 = document.getElementById('sombraCapa1');

    contenedorGrandeempre.style.display = 'flex';
    sombraCapa1.style.display = 'block';
  }

  function cerrarContenedorGrande1() {
    var contenedorGrandeempre = document.getElementById('contenedorGrandeempre');
    var sombraCapa1 = document.getElementById('sombraCapa1');

    contenedorGrandeempre.style.animation = 'cerrarContenedorGrande 0.5s ease';
    sombraCapa1.style.animation = 'cerrarContenedorGrande 0.5s ease';

    setTimeout(function () {
      contenedorGrandeempre.style.display = 'none';
      sombraCapa1.style.display = 'none';
      contenedorGrandeempre.style.animation = '';
      sombraCapa1.style.animation = '';
    }, 500);
  }

  //contendor7
  function mostrarContenedorGrande7(contenedor) {
    var contenedorGrandeempre2 = document.getElementById('contenedorGrandeempre2');
    var sombraCapa1 = document.getElementById('sombraCapa1');

    contenedorGrandeempre2.style.display = 'flex';
    sombraCapa1.style.display = 'block';
  }

  function cerrarContenedorGrande7() {
    var contenedorGrandeempre2 = document.getElementById('contenedorGrandeempre2');
    var sombraCapa1 = document.getElementById('sombraCapa1');

    contenedorGrandeempre2.style.animation = 'cerrarContenedorGrande2 0.5s ease';
    sombraCapa1.style.animation = 'cerrarContenedorGrande2 0.5s ease';

    setTimeout(function () {
      contenedorGrandeempre2.style.display = 'none';
      sombraCapa1.style.display = 'none';
      contenedorGrandeempre2.style.animation = '';
      sombraCapa1.style.animation = '';
    }, 500);
  }


  //contenedor8
  function mostrarContenedorGrande8(contenedor) {
    var contenedorGrandeempre3 = document.getElementById('contenedorGrandeempre3');
    var sombraCapa1 = document.getElementById('sombraCapa1');

    contenedorGrandeempre3.style.display = 'flex';
    sombraCapa1.style.display = 'block';
  }

  function cerrarContenedorGrande8() {
    var contenedorGrandeempre3 = document.getElementById('contenedorGrandeempre3');
    var sombraCapa1 = document.getElementById('sombraCapa1');

    contenedorGrandeempre3.style.animation = 'cerrarContenedorGrande3 0.5s ease';
    sombraCapa1.style.animation = 'cerrarContenedorGrande3 0.5s ease';

    setTimeout(function () {
      contenedorGrandeempre3.style.display = 'none';
      sombraCapa1.style.display = 'none';
      contenedorGrandeempre3.style.animation = '';
      sombraCapa1.style.animation = '';
    }, 500);
  }

  //contenedor9
  function mostrarContenedorGrande9(contenedor) {
    var contenedorGrandeempre4 = document.getElementById('contenedorGrandeempre4');
    var sombraCapa1 = document.getElementById('sombraCapa1');

    contenedorGrandeempre4.style.display = 'flex';
    sombraCapa1.style.display = 'block';
  }

  function cerrarContenedorGrande9() {
    var contenedorGrandeempre4 = document.getElementById('contenedorGrandeempre4');
    var sombraCapa1 = document.getElementById('sombraCapa1');

    contenedorGrandeempre4.style.animation = 'cerrarContenedorGrande4 0.5s ease';
    sombraCapa1.style.animation = 'cerrarContenedorGrande4 0.5s ease';

    setTimeout(function () {
      contenedorGrandeempre4.style.display = 'none';
      sombraCapa1.style.display = 'none';
      contenedorGrandeempre4.style.animation = '';
      sombraCapa1.style.animation = '';
    }, 500);
  }

  //contenedor10
  function mostrarContenedorGrande10(contenedor) {
    var contenedorGrandeempre5 = document.getElementById('contenedorGrandeempre5');
    var sombraCapa1 = document.getElementById('sombraCapa1');

    contenedorGrandeempre5.style.display = 'flex';
    sombraCapa1.style.display = 'block';
  }

  function cerrarContenedorGrande10() {
    var contenedorGrandeempre5 = document.getElementById('contenedorGrandeempre5');
    var sombraCapa1 = document.getElementById('sombraCapa1');

    contenedorGrandeempre5.style.animation = 'cerrarContenedorGrande5 0.5s ease';
    sombraCapa1.style.animation = 'cerrarContenedorGrande5 0.5s ease';

    setTimeout(function () {
      contenedorGrandeempre5.style.display = 'none';
      sombraCapa1.style.display = 'none';
      contenedorGrandeempre5.style.animation = '';
      sombraCapa1.style.animation = '';
    }, 500);
  }*/
</script>
</body>
</html>