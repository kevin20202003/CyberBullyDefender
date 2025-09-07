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
.separator5{
    border-top: 2px solid #00d4ff;
        width: 100%;
        margin-top: -5%;
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

    .imagen-larga {
        max-width: 100%;
        /* La imagen no puede ser más ancha que el contenedor */
        height: auto;
        /* La altura se ajustará automáticamente */
    }

    .titulodocentes {
        margin-top: 5%;
        font-size: 20px;
    }

    .titulodocentes h1 {
        font-size: 35px;
        text-align: center;
    }

    .terminoscont {

        display: flex;
        align-items: center;
        justify-content: center;
        text-align: justify;
        justify-content: space-between;

        margin-left: 14%;
    }

    .contterminoserra {
        border-radius: 30px;
        background-image: radial-gradient(circle at 49.93% 50.16%, #8c4edb 0, #5537ae 25%, #171e7d 50%, #00024e 75%, #000027 100%);
        display: flex;
        align-items: center;
    }

    .terminoerrado {
        text-align: center;
        margin: 5px;
    }

    .maltermino {
        background-color: blueviolet;
        height: 35px;
        width: 500px;
    }

    .maltermino p {
        text-align: center;
        padding: 5px;
    }

    .soluciontermino {
        padding: 10px;
    }

    .textbully2 {
        margin-left: 15%;
        margin-right: 15%;
    }

    .titudocb {
        margin-top: 5%;
        text-align: center;
    }

    .imageeeen {
        height: 70%;
        width: 50%;

        text-align: center;

    }

    .titu2cb1 {
        text-align: center;
    }

    .imagencasob1 img {
        height: 70%;
        width: 100%;
        display: block;
    }

    .bully3sec h3 {

        text-align: center;

    }

    .bully3sec {
        margin-left: 15%;
        margin-right: 15%;
        text-align: justify;
    }

    .textcasosb1 {
        margin-left: 15%;
        margin-right: 15%;
    }

    .icon-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .icon {
        margin-top: 2%;
        color: #2277B2;
        font-size: 25vw;
        /* Tamaño del ícono */
    }

    .text {
        padding: 10px;
        text-align: center;
        font-size: 7%;
        /* Tamaño del texto */
        margin-top: -85%;
        /* Espacio entre el ícono y el texto */
    }

    .bullying10 img {
        height: 30vh;
        width: 50vh;
    }

    .interpersonas img {
        height: 30vh;
        width: 50vh;
    }

    .relac {
        margin-left: 15%;
        margin-right: 15%;
    }

    .a {
        text-decoration: none;
    }

    .a[href^="#"] {
        transition: all 0.11s ease;
    }

    .a {
        margin-top: 20px;
        border: none;
        position: relative;
        display: block;
        transition: 0.5s;
        color: white;
        cursor: pointer;
        font-size: 15px;

    }

    .a::after {
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

    .a:hover {
        color: #289bb8;
    }


    .a:hover::after {
        transform: scaleX(1);
        transform-origin: left;
    }

    .bu5 {
        width: 10%;
    }

    .bu6 {
        width: 20%;
    }

    .bu7 {
        width: 69%;
    }

    .bu8 {
        width: 50%;
    }

    .bu9 {
        width: 30%;
    }

    .bu10 {
        width: 34%;
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


    @media screen and (max-width: 1425px) {
        .terminoscont {
            margin-right: 4%;
        }

        
    }

    @media screen and (max-width: 1400px) {


        .terminoscont .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            /* Centra horizontalmente los elementos */

            padding: 20px;
        }

        .terminoscont .col-md-6 {
            flex-basis: calc(100% - 30px);
            margin-left: 50%;

        }

        .terminoerrado h3 {
            text-align: center;
            margin-right: 50%;
        }
    }
</style>

<body
    style=" max-width: 100%; height: auto; background-repeat: no-repeat; background-image: url('imagenes/fondo.png'); background-size: cover; text-align: justify;">
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
                <div class="bu5">
                    <li><a class="a" href="#bullying">Bullying</a></li>
                </div>
                <div class="bu6">
                    <li><a class="a" href="#casos">Casos de bullying</a></li>
                </div>
                <div class="bu7">
                    <li><a class="a" href="#observacion">¿Cómo saber si alguien sufre de bullying mediante la
                            observación?</a></li>
                </div>
                <div class="bu8">
                    <li><a class="a" href="#acompañamiento">Acompañamiento a los agresores y sus familias</a></li>
                </div>
                <div class="bu9">
                    <li><a class="a" href="#relaciones">Relaciones interpersonales</a></li>
                </div>
                <div class="bu10">
                    <li><a class="a" href="#alcohol">Alcohol, drogas y adolescencia</a></li>
                </div>
            </ul>
        </div>
    </div>

    <div class="titudocb">
        <br>
        <h3 id="bullying" class="tituintimida">Bullying</h3>
        <br><br>
    </div>
    <div class="textbully2 text-justify">
        <p>Reflexionemos sobre el significado y la importancia de abordar la violencia en la sociedad. Según la
            Organización Mundial de los Derechos del Niño, la violencia abarca el uso intencional del poder,
            causando daño a uno mismo o a otros. Este tema afecta profundamente a los estudiantes y se
            caracteriza por la repetición y la intención de dañar, manifestándose de diferentes maneras, como el
            acoso físico, sexual o social.</p>
   
        <p>Es fundamental considerar el principio del interés superior del niño para proteger a nuestros alumnos
            y garantizar su bienestar en todo momento. También es importante distinguir entre el conflicto entre
            estudiantes y el acoso escolar. Los conflictos son naturales en las relaciones sociales, pero es
            esencial fomentar la tolerancia y el respeto por las diferencias de opinión.</p>
   
        <p>En cambio, el acoso escolar implica un daño intencional y repetitivo hacia una víctima, causando
            secuelas físicas y psicológicas.</p>

    </div>
    <br>
    <div class="text-center">
        <img class="imageeeen" src="imagenes/bullimg1.jpg" alt="">
    </div>
    <br>
    <div class="separator3">

    </div>
    <br>

    <div class="titu2cb1">
        <h3 id="casos" class="tituintimida">Casos de bullying</h3>
    </div>
    <br>

    <div class="textcasosb1 text-justify">
        <div>
            <p>En Ecuador, más del 50% de los estudiantes han experimentado acoso escolar por parte de sus compañeros al
                menos una vez durante el último quimestre. Un trágico ejemplo de esto es el caso de Johanna B., quien,
                según
                sus familiares, se suicidó el miércoles 12 de abril de 2023 a causa del bullying que sufría en el
                colegio.
                Johanna tenía 16 años, cursaba el segundo año de bachillerato y era constantemente acosada por
                estudiantes,
                quienes criticaban su aspecto físico.</p>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-6 order-1 order-md-1">
                <div class="imagencasob1 text-center">
                    <img src="imagenes/bb2.jpg" alt="">
                </div>
            </div>
            <br><br>
            <div class="col-12 col-md-6 order-2 order-md-2">
                <div class="icon-container text-center">
                    <i class="fas fa-message icon">
                        <p class="text">Protejamos a <br>los alumnos<br> sin importar <br>los obstáculos <br>que
                            enfrentemos</p>
                    </i>
                </div>
            </div>
        </div>
        <br><br><br>
        <div>
            <p>Otro caso lamentable es el suicidio de Kevin Sebastián Bustamante, de 17 años, quien era estudiante de
                segundo de bachillerato en el colegio Herlinda Toral de Cuenca - Colegio Fiscal. Kevin era el baterista
                de
                la banda de música del colegio y amaba la música. Sin embargo, su vida estuvo marcada por experiencias
                traumáticas, como sufrir bullying en su infancia y la pérdida de su hogar durante la pandemia.</p>
        </div>

        <h6><b>1. Motivo:</b></h6>
        <p>El estudiante que actúa como agresor tiene una razón detrás de su comportamiento. Puede sentirse superior a
            sus compañeros y tener una actitud dominante que le lleva a ejercer violencia sobre ellos. Esta actitud le
            hace sentir respaldado para realizar actos de violencia, como burlarse o acosar a sus compañeros.</p>

        <h6><b>2. Víctima:</b></h6>
        <p>La víctima es el receptor de todos los actos de violencia de cualquier tipo. Se siente indefensa y
            vulnerable, lo que la convierte en un blanco fácil para ser el centro de agresiones.</p>

        <h6><b>3. Observador o Espectador:</b></h6>
        <p>El observador puede venir acompañado de otras acciones. Pueden ser espectadores directos que son parte de la
            agresión, es decir, tienen actos de acoso o apoyan la situación alentando al agresor. También pueden ser
            espectadores indirectos que solo miran lo que ocurre sin realizar ninguna acción o simplemente ignoran la
            situación.</p>

        <p>Cabe destacar que en este tipo de violencia, los espectadores u observadores pueden ser cómplices al guardar
            silencio y, en ocasiones, incentivar a los demás. Por esta razón, existen diferentes tipos de observadores:
        </p>

        <ul>
            <li>Observadores que participan del acoso.</li>
            <li>Quienes observan y están de acuerdo sin participar en la agresión.</li>
            <li>Espectadores que lo miran y no intervienen, pero las acciones les son indiferentes.</li>
            <li>Observadores que, por temor, no se atreven a intervenir.</li>
            <li>Espectadores que defienden a la víctima a pesar de las represalias.</li>
            <li>En este rol de espectador están incluidos los docentes que llegan a conocer sobre la existencia de acoso
                escolar.</li>
        </ul>
       <br>
        <h3 id="observacion" class="tituintimida">¿Cómo saber si alguien sufre de bullying mediante la observación?</h3>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-12 col-md-6 order-1 order-md-2">
                <p>El bullying se vuelve una situación silenciosa, pues aparentemente nadie comenta nada; sin embargo,
                    existen
                    rasgos que tienen los agentes, los cuales son necesarios observar con precaución para poder
                    detectarlos.
                    Cuando la situación trasciende a cualquier agresión física, lo que se dice pasa a ser por medio de
                    gestos:
                </p>
            </div>
            <div class="bullying10 col-12 col-md-6 order-2 order-md-3">
                <img src="imagenes/bullying10.jpg" style="height: 70%; width: 100%;" alt="">
            </div>
        </div>
    </div>

    <div class="separator5">

    </div>
    <br>

    <div class="bully3sec">

        <h3 id="acompañamiento" class="tituintimida">Acompañamiento a los agresores y sus familias</h3>
        <br>
        <br>
        <p>En un primer momento, depende del tipo de violencia ocurrida y de la gravedad, ya que en instancias mayores
            se debe acudir a la Fiscalía o Unidades legales, tomando otras medidas que resulten pertinentes al caso. Sin
            embargo, para otras circunstancias existen otras acciones, como:</p>

        <ul>
            <li>Tratar de minimizar la posibilidad de reincidencia y de riesgo.</li>
            <li>Garantizar la permanencia del estudiante en la institución.</li>
            <li>Incentivar al agresor y su familia en la búsqueda de una solución, involucrándolos como miembros
                fundamentales en el proceso.</li>
        </ul>

        <p>Se debe tener claro que el problema no se debe tratar solo como un asunto que afecta a los involucrados, sino
            que es un problema de la comunidad escolar en su conjunto. Esto implica que se deben realizar acciones para
            mejorar la percepción y el respeto entre los miembros del grupo y reducir los riesgos. De esta manera,
            mediante algunas medidas preventivas y el compromiso de todos aquellos que afectan estas situaciones, se
            puede abordar eficazmente el problema del acoso escolar.</p>

    </div>
   
    <div class="separator3">

    </div>
    <br>
    <div class="relac">
        <h3 id="relaciones" class="tituintimida2">Relaciones interpersonales</h3>
        <br>
        <br>
        <div class="row">
            <div class="col-12 col-md-6 order-1 order-md-2">
                <p>Cada persona humana es única, irrepetible e irremplazable. Su valor es único y absoluto. La persona
                    humana no vale en función de otro ser o de lo que haga o lo que aporte. Vale por el solo hecho de
                    ser persona. Si conoces bien el valor de cada persona, puedes entender qué tan valiosas son las
                    relaciones entre ellas: las relaciones interpersonales.</p>
            </div>
            <div class="col-12 col-md-6 order-2 order-md-3 interpersonas">
                <img src="imagenes/interpersonas.jpg" style="height: 70%; width: 100%;" alt="">
            </div>
        </div>
        
        <h3 class="tituintimida2">El cuerpo y la intimidad</h3>
        <br>
        <br>
        <p>Los cambios de pubertad se inauguran con los cambios corporales. Éstos luego tienen una clara repercusión
            psicológica, intelectual y social. El cuerpo y su funcionamiento cambian de tal manera que merecen un
            proceso de asimilación y adaptación.</p>

        <p>Por otro lado, el adolescente siente -de manera errónea- que es juzgado o aceptado a través de su cuerpo. El
            contexto y los medios de comunicación contribuyen para que esto sea así, ya que los medios masivos
            promocionan cuerpos perfectos, irreales para la mayoría de la población y sobre todo para un púber que está
            en pleno desarrollo y aún tiene mucho que cambiar hasta llegar al apogeo de la juventud.</p>
    </div>



    <div class="separator3">

    </div>
    <br>
    <div class="relac">
        <div>
            <h3 id="alcohol" class="tituintimida2">Alcohol, drogas y adolescencia</h3>
            <br><br>
            <h4>Alcohol</h4>
          
            <p>Por muchos motivos, el cuerpo de un adolescente no puede asimilar la cantidad de alcohol que la
                publicidad y
                la cultura pretenden imponer. <br>Algunos adolescentes consumen alcohol para mostrarse alegres,
                simpáticos y
                divertidos, pero no son capaces de darse cuenta dónde esta el límite. Debido a la falta de autocontrol.
                <br>Existe una vinculación entre el alcohol, las drogas y la conducta sexual arriesgada (sexo activo sin
                conciencia, violaciones, etc.)
            </p>
        </div>

        <div>
            <h4>Sexting</h4>
            
            <p>El sexting consiste en el envío de contenidos de tipo sexual(principalmente fotografías y/o videos)
                producidos
                generalmente por el propio remitente a otras personas por medio de teléfonos móviles.</p>
            
            <p>El sexting genera graves problemas personales y, en ocasiones, provoca muchas situaciones de abuso
                sexual,
                pornografía o trata de personas.</p>
            <br>
            <p></p>
        </div>
    </div>

    <?php
    include 'contactos.php';
    ?>

</body>
<script src="menu.js"></script>

</html>