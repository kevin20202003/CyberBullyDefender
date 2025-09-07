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
    <title>Ciudadania</title>
</head>
<style>
    * {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        margin: 0;
        padding: 0;
    }


    #tareas {
        text-align: center;
        /* Centra horizontalmente el contenido */
        display: flex;
        flex-direction: column;
        align-items: center;
        /* Centra verticalmente el contenido */
        justify-content: center;
        /* Centra verticalmente el contenido */
        margin-left: 15%;
        margin-right: 15%;
        /* Agrega espacio de margen a la derecha */
        margin-top: 2%;
        text-align: justify;
    }

    #tareas ul li {
        line-height: 2;
    }

    #tareas h1 {
        text-align: center;
        font-size: 40px;
    }

    .int2 img {
        
        height: 230px;
        width: 330px;
    }

    .tituintimida {
        border-radius: 15px;
        margin-left: 15%;
        margin-right: 15%;
        display: inline-block;
        /* Cambio el valor de 'width' a 'display' */
        padding: 20px;
        text-align: center;
        background: #2277B2;
       
    }

    .tituintimida2 {
        border-radius: 15px;
        
        display: inline-block;
        /* Cambio el valor de 'width' a 'display' */
        padding: 20px;
        text-align: center;
        background: #2277B2;
    }

    @media screen and (max-width: 768px) {

        /* Aplica estos estilos cuando el ancho de la pantalla sea igual o menor a 768px */
        #tareas {
            margin-left: 10px;
            /* Reduzca aún más el margen izquierdo para pantallas más pequeñas */
            margin-right: 10px;
            /* Reduzca aún más el margen derecho para pantallas más pequeñas */
        }

        #tareas h1 {
            font-size: 24px;
            /* Reduzca aún más el tamaño del título para pantallas más pequeñas */
        }


    }

    #contenedoresN {
        margin-top: -5%;
        display: flex;
        flex-wrap: wrap;
        /* Permite que los contenedores se envuelvan en varias filas */
        justify-content: space-between;
        /* Distribuye los contenedores horizontalmente */
    }

    .contenedorN {
        width: 400px;
        /* Ancho para tres contenedores en una fila, considerando el espacio entre ellos */
        height: 200px;
        align-items: center;
        justify-content: center;
        text-align: justify;
        margin: 8%;
        /* Espacio entre contenedores */
    

    }

    .contenedorN img {
        width: 200px;
        height: 150px;
        display: block;
        /* Centrar la imagen */
        margin: 0 auto;
        /* Centrar la imagen horizontalmente */
    }



    .separator4 {
        border-top: 2px solid #00d4ff;
        width: 100%;
        /* Color y grosor del separador */
    }

    .contenedorN .icon-check {
        border-radius: 50%;
        background-color: #00d4ff;
        color: rgb(255, 255, 255);
        /* Color del ícono de check */
        font-size: 24px;
        /* Tamaño del ícono de check */
    }

    .clear {
        clear: both;
        /* Limpiar el flotador para evitar problemas de diseño */
    }

    .lim {
     
        text-align: center;
    }

    .asasasa .indicedoc ul li a{
        color: #2277B2;
        font-size:3vh;
        
    }
    .asasasa .indicedoc  ul{
        margin-left: 17%;
    }
    .asasasa h3{
        margin-left: 15%;
    }

    .c {
        text-decoration: none;
    }

    .c[href^="#"] {
        transition: all 0.11s ease;
    }

    .c {
        margin-top: 20px;
        border: none;
        position: relative;
        display: block;
        transition: 0.5s;
        color: white;
        cursor: pointer;
        font-size: 15px;

    }

    .c::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 3px;
        top: 100%;
        left: 0;
        transition: transform 0.5s;
        transform: scalex(0);
        transform-origin: right;
        background-color: #289bb8;
    }

    .c:hover {
        color: #289bb8;
    }


    .c:hover::after {
        transform: scaleX(1);
        transform-origin: left;
    }

    .si1{
width: 40%;
    }

    .si2{
        width: 24%;
    }

    .si3{
        width: 32%;
    }

    .si4{
        width: 44%;
    }

    .si5{
        width: 43%;
    }

    @media screen and (max-width: 768px) {
        #contenedoresN {
            text-align: center;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

    }

    @media screen and (max-width: 925px) {
    .contenedorN {
        margin-bottom: 25%; /* Cambiado a píxeles (px) */
    }
}

@media screen and (max-width: 710px) {
    .contenedorN {
        margin-bottom: 35%; /* Cambiado a píxeles (px) */
    }
}

@media screen and (max-width: 580px) {
    .contenedorN {
        margin-bottom: 45%; /* Cambiado a píxeles (px) */
    }
}

@media screen and (max-width: 425px) {
    .contenedorN {
        margin-bottom: 75%; /* Cambiado a píxeles (px) */
    }
}

@media screen and (max-width: 325px) {
    .contenedorN {
        margin-bottom: 95%; /* Cambiado a píxeles (px) */
    }
}

@media screen and (max-width: 440px) {
    .contenedorN {
        width: auto;
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
<br><br><br><br><br><br>
    <div class="asasasa" >
        <h3>Indice</h3>
        <div class="indicedoc">
            <ul>
                <div class="si1">
                    <li><a class="c" href="#lista">Lista de tareas para un internet seguro</a></li>
                </div>
                <div class="si4">
                    <li><a class="c" href="#carac">Características de la seguridad informática</a></li>
                </div>
                <div class="si2">
                    <li><a class="c" href="#segu">Seguridad informática</a></li>
                </div>
                <div class="si3">
                    <li><a class="c" href="#info">Tipos de seguridad informática</a></li>
                </div>
                
                <div class="si5">
                    <li><a class="c" href="#princi">Los principios de la seguridad informática</a></li>
                </div>
            </ul>
        </div>
    </div>
    <section id="tareas">
        <h3 class="tituintimida" id="lista">Lista de tareas para un internet seguro</h3>
        <br>
        <ul>
            <li><b>Mantén tus contraseñas seguras: </b>Utiliza contraseñas fuertes y únicas para todas tus cuentas en
                línea. Considera el uso de un administrador de contraseñas para gestionarlas.</li>
            <li><b>Habilita la autenticación de dos factores (2FA): </b>Activa la autenticación de dos factores siempre
                que sea posible. Esto proporciona una capa adicional de seguridad al requerir un segundo método de
                verificación además de la contraseña.</li>
            <li><b>Actualiza regularmente tus dispositivos y software: </b>Mantén tu sistema operativo, navegadores web
                y aplicaciones actualizados con las últimas actualizaciones de seguridad.</li>
            <li><b>Usa una conexión segura: </b>Al navegar en línea, asegúrate de estar en una red segura y utiliza
                conexiones HTTPS siempre que sea posible.</li>
            <li><b>Sé consciente de las estafas en línea: </b>Aprende a reconocer correos electrónicos de phishing,
                mensajes sospechosos y sitios web falsos. No hagas clic en enlaces ni descargues archivos adjuntos de
                fuentes no confiables.</li>
            <li><b>Configura cortafuegos y antivirus: </b>Instala y actualiza regularmente programas antivirus y utiliza
                un cortafuegos para proteger tu red y dispositivos.</li>
            <li><b>Controla tu información personal: </b>Limita la cantidad de información personal que compartes en
                línea y ajusta la configuración de privacidad en tus redes sociales y perfiles en línea.</li>
            <li><b>Utiliza una red VPN (Red Privada Virtual): </b>Considera el uso de una VPN para cifrar tu conexión a
                internet y proteger tus datos de posibles fisgones en línea.</li>
            <li><b>Educa a tus hijos sobre seguridad en línea: </b>Si tienes hijos, enséñales sobre los peligros en
                línea y supervisa sus actividades en la web.</li>
            <li><b>Realiza copias de seguridad de tus datos: </b>Realiza copias de seguridad regulares de tus archivos
                importantes en caso de que ocurra un incidente de seguridad que los ponga en peligro.</li>
        </ul>
        <div class="int2">
            <img src="imagenes/s1.jpg" alt="">
        </div>
      
    </section>
    <br>
    <div style="text-align: justify; margin-left: 15%; margin-right: 15%;">
        <h3 class="tituintimida" id="carac">Características de la seguridad informática</h3>
        <br>
        <br>
        <p>Entre las principales características de la seguridad informática de un sistema -esto es, lo que logra que un
            sistema sea seguro, están las siguientes:</p>
        <ul>
            <li>
                <h6><b>Autenticación autorizada: </b></h6>En un sistema seguro solo pueden autenticarse quienes cuenten
                con autorización para hacerlo. Nadie más puede acceder a sus recursos y a los datos que alberga.
            </li>
            <br>
            <li>
                <h6><b>Confidencialidad: </b></h6>Todos los datos y recursos del sistema, cuando está seguro, se
                encuentran a salvo de accesos no autorizados. Es decir, son confidenciales.
            </li>
            <br>
            <li>
                <h6><b>Integridad: </b></h6>Solo quienes tengan la debida autorización podrán eliminar datos de un
                sistema, modificarlos o descargarlos. Lo mismo sucede con los recursos. Se trata, por tanto, de sistemas
                que cuentan con un nivel de integridad elevado.
            </li>
            <br>
            <li>
                <h6><b>Disponibilidad: </b></h6>Quienes cuenten con autorización pueden acceder a sistemas y datos
                cuando lo necesiten o consideren.
            </li>
            <br>
            <li>
                <h6><b>Acceso controlado: </b></h6>Para acceder a datos y funciones, los usuarios deben tener
                autorización. Sin ella no podrán hacerlo.
            </li>
            <br>
            <li>
                <h6><b>Backup: </b></h6>También conocido como copia de seguridad. La seguridad informática establece que
                los sistemas deben contar con una herramienta o función encargada de copiar datos y configuraciones por
                seguridad. Con ellos, si hay un problema, se puede recuperar el sistema.
            </li>
            <br>
            <li>
                <h6><b>Cifrado: </b></h6>Cuando un sistema almacena datos sensibles, deben estar cifrados. Así se evita
                que quien no está autorizado para consultarlos pueda hacerlo.
            </li>
            <br>
            <li>
                <h6><b>Vigilancia: </b></h6>Los sistemas deben estar permanentemente controlados, con el objetivo de
                detectar cuanto antes actividades sospechosas.
            </li>
            <br>
            <li>
                <h6><b>Auditoría: </b></h6>Un registro de las actividades realizadas en el sistema, que al revisarlas
                permitan localizar posibles accesos no autorizados y otras actividades sospechosas.
            </li>
            <br>
            <li>
                <h6><b>Mantenimiento correcto: </b></h6>El sistema siempre tiene que tener un mantenimiento adecuado y
                estar actualizado, para evitar intrusos por vulnerabilidades de software o red.
            </li>
        </ul>
        <br>
    </div>
    <div class="lim">
        <h3 class="text-center tituintimida" id="segu">Seguridad informática</h3>
    </div>
    <br>
    <div style="text-align: justify; margin-left: 15%; margin-right: 15%;">
        <h5><b>Introducción a la seguridad informática: garantizando la protección en la era digital</b></h5>
        <br>
        <p>En la actualidad, la seguridad informática se ha convertido en una de las preocupaciones más apremiantes en
            el mundo digital. A medida que la sociedad y las empresas dependen cada vez más de la tecnología y la
            conectividad en línea, la exposición a amenazas cibernéticas se ha vuelto omnipresente. La seguridad
            informática, por lo tanto, emerge como un escudo esencial que resguarda la integridad, la confidencialidad y
            la disponibilidad de datos y sistemas, en un entorno donde la información es el activo más valioso.</p>
        <p>En el corazón de la seguridad informática reside la constante lucha entre aquellos que buscan proteger los
            recursos digitales y aquellos que, de manera maliciosa, buscan explotar vulnerabilidades para sus propios
            fines. Esta lucha encarna un juego de ingenio y estrategia, donde se desarrollan y se contrarrestan tácticas
            y tecnologías de forma continua.</p>
        <p>La seguridad informática no es simplemente una preocupación de las grandes corporaciones o de los gobiernos;
            es un tema que afecta a todos los estratos de la sociedad. Desde el individuo que almacena fotografías
            personales en su teléfono móvil hasta la multinacional que maneja datos financieros críticos, todos están en
            riesgo. Las amenazas cibernéticas pueden tener un alcance global, y los efectos de un ataque exitoso pueden
            ser devastadores, desde la pérdida de datos y la interrupción de servicios hasta el robo de identidad y la
            propagación de desinformación.</p>
        <p>Para comprender la importancia de la seguridad informática, es esencial reconocer la diversidad de amenazas
            que existen en el ciberespacio. Desde virus y malware que infectan sistemas, hasta ataques de phishing que
            engañan a usuarios desprevenidos, pasando por el espionaje cibernético y el robo de datos, las amenazas son
            variadas y sofisticadas. Además, la naturaleza de estas amenazas está en constante evolución, adaptándose a
            las nuevas tecnologías y a las estrategias de defensa implementadas.</p>
    </div>
<br>
    <div class="lim">
        <h3 class="tituintimida" id="info">Tipos de seguridad informática</h3>
    </div>
    <section id="contenedoresN">
        <div class='contenedorN'>
            <img src="imagenes/sr.jpg" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>
                <h6><b>Seguridad de red: </b></h6>Esta se enfoca en proteger la integridad y confidencialidad de la
                comunicación de datos a través de redes, como Internet o redes internas. Incluye medidas como firewalls,
                detección de intrusiones, VPN (Redes Privadas Virtuales) y políticas de control de acceso.</p>
            </div>
        </div>

        <div class='contenedorN'>
            <img src="imagenes/sd.jpg" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>
                <h6><b>Seguridad de datos: </b></h6>La seguridad de datos se centra en la protección de la información
                almacenada y transmitida. Esto implica el cifrado de datos sensibles, la implementación de políticas de
                gestión de acceso, copias de seguridad regulares y la destrucción segura de datos obsoletos.</p>
            </div>
        </div>

        <div class='contenedorN'>
            <img src="imagenes/ss.jpg" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>
                <h6><b>Seguridad de sistemas: </b></h6>Se refiere a la protección de los sistemas informáticos,
                incluyendo servidores y dispositivos individuales (como computadoras de escritorio y portátiles). Esto
                implica la instalación de software antivirus, actualizaciones de seguridad, configuración segura y
                monitoreo constante.</p>
            </div>
        </div>

        <div class='contenedorN'>
            <img src="imagenes/sa.jpg" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>
                <h6><b>Seguridad de aplicaciones: </b></h6>Aquí se trata de proteger las aplicaciones y software
                utilizados en una organización. Esto incluye el desarrollo seguro de aplicaciones (construir software
                con menos vulnerabilidades) y la implementación de soluciones de seguridad, como sistemas de detección
                de vulnerabilidades y cortafuegos de aplicaciones.</p>
            </div>
        </div>

        <div class='contenedorN'>
            <img src="imagenes/sf.jpg" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>
                <h6><b>Seguridad física: </b></h6>La seguridad física es la protección de los activos físicos de una
                organización, como servidores, dispositivos de almacenamiento y centros de datos. Esto implica la
                implementación de medidas de control de acceso físico, sistemas de vigilancia y protección contra
                desastres naturales.</p>
            </div>
        </div>

        <div class='contenedorN'>
            <img src="imagenes/su.jpg" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>
                <h6><b>Seguridad de usuarios y educación: </b></h6>A menudo se dice que los usuarios son el eslabón más
                débil en la cadena de seguridad. La formación y concientización de los usuarios son esenciales para
                prevenir ataques como el phishing y la ingeniería social. También se incluyen aquí las políticas de
                contraseñas fuertes y la autenticación de dos factores.</p>
            </div>
        </div>

    </section>
    
    <br><br><br><br>
   
    
   
    <?php
    include 'contactos.php';
    ?>
    <script src="menu.js"></script>
</body>

</html>