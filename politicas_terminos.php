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
    <title>Docentes</title>
</head>
<style>
    * {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        margin: 0;
        padding: 0;
    }

    .politica {
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 100px;
    }

    .politica ul li{
        text-align: justify;
    }
</style>

<body class="text-center"
    style="max-width: 100%; height: auto; background-repeat: no-repeat; background-image: url('imagenes/fondo.png'); background-size: cover; ">
    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'estilos.html';
    ?>
    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'menu.html';
    ?>
    <div class="politica text-justify">
        <h1>Política de Privacidad</h1>
        <ul>
            <li>Recopilación de Datos Personales: Esta página web puede recopilar datos personales de los usuarios a
                través del formulario de informe de
                casos,
                que puede incluir información como nombres, direcciones de correo electrónico, ubicación y detalles del
                incidente. La recopilación de datos personales se realiza de manera voluntaria.</li>
            <li>Uso de Datos Personales: Los datos personales recopilados se utilizarán exclusivamente con el propósito
                de gestionar y analizar los
                informes de casos de ciberbullying y bullying. No se utilizarán con fines comerciales ni se compartirán
                con
                terceros sin el consentimiento expreso del usuario.</li>
            <li>Confidencialidad y Seguridad de Datos: Implementamos medidas de seguridad para proteger la
                confidencialidad y la integridad de los datos personales
                recopilados. Los informes de casos se manejarán de manera confidencial, y solo se compartirán con las
                partes
                involucradas cuando sea necesario.
            </li>
            <li>Consentimiento del Usuario: Al enviar un informe de caso a través del formulario, el usuario otorga su
                consentimiento para que la página
                web recopile y procese sus datos personales de acuerdo con esta política de privacidad.</li>
            <li>Derechos de los Usuarios: Los usuarios tienen derecho a acceder, corregir o eliminar sus datos
                personales en cualquier momento.
                Pueden ejercer estos derechos enviando una solicitud a través de los canales de contacto proporcionados
                en la página web.</li>
            <li>Cambios en la Política de Privacidad: Nos reservamos el derecho de actualizar esta política de
                privacidad en cualquier momento. Los cambios serán efectivos una vez publicados en la página web, y se
                recomienda a los usuarios revisarla periódicamente.</li>
        </ul>
        <h1>Términos y Condiciones</h1>
        <ul>
            <li>Aceptación de Términos: Al utilizar esta página web y enviar un informe de caso, usted acepta estos Términos y Condiciones. Si no está de acuerdo con ellos, le recomendamos que no utilice la página web.</li>
            <li>Uso Adecuado: Los usuarios deben utilizar la página web de manera adecuada y para informar casos legítimos de ciberbullying y bullying. No se permite el uso de la página web para fines fraudulentos o difamatorios.</li>
            <li>Contenido del Informe de Caso: Los informes de casos enviados deben ser veraces y precisos. No se permite la presentación de informes falsos o maliciosos. Los informes se utilizarán con el propósito de abordar y prevenir el ciberbullying y el bullying.</li>
            <li>Confidencialidad: Los informes de casos se manejarán con confidencialidad y solo se compartirán con las partes involucradas y las autoridades cuando sea necesario para abordar un incidente.</li>
            <li>Responsabilidad Limitada: La página web y sus administradores no son responsables de los resultados o consecuencias de los informes de casos. La página web proporciona una plataforma para informar casos, pero no garantiza resoluciones específicas.</li>
            <li>Cambios en los Términos: Nos reservamos el derecho de modificar estos Términos y Condiciones en cualquier momento. Los cambios serán efectivos una vez publicados en la página web.</li>
        </ul>
    </div>
    <?php
    include 'contactos.php';
    ?>

</body>
<script src="menu.js"></script>

</html>