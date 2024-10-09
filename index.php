<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favi.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="MDC">
        <meta name="Description" content="Instituto de Formación Técnico Superior">
        <meta name="Keywords" content="IFTS">
        <meta name="Resource-type" content="Document">
        <meta name="DateCreated" content="21/6/2023">
        <meta name="Revisit-after" content="1 month">
        <meta name="Robots" content="All">
        <meta name="Language" scheme="RFC1766" content="spanish">
        <title>Home</title>
        <link rel="stylesheet" href="css/e_iniciales.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/navegacion.css">
        <link rel="stylesheet" href="css/modalStyle.css">
        <link rel="stylesheet" href="css/bot.css">
        <style>
    </style>
    </head>
    <body translate="no" ><!-- SE AGREGA 'translate="no" ' para que no se traduzca cualquier palabra en ingles aún si quiero utilizar el botón derecho del mouse   -->
        <a name="inicio" href="index.html"></a>
        <!-- este div lo genera grupo alejandro -->
        <div class="container">
            <!-- inicio barra de navegación -->
            <?php
                include("navegacion.php");    
                // <!-- fin barra de navagación -->
                // Inicio vantana Modal
                include("modal.php"); 
                //fin ventana modal            
                // <!-- inicio cabecera menu principal -->
                include("header_publico.php");
            ?>
                <!-- fin cabecera menu principal -->
            <!-- inicio cuerpo del menu principal -->
            <!-- este id lo genera el grupo alejandro -->
            <main id='main'>          
                <!-- inicio aulas y siu -->
                <div class="grid">                
                    <a name="aulas" href="index.php"></a> 
                    <div class="columnas-6">
                        <!-- inicio sector aulas virtuales -->  
                        <section class="section-aula-virtual">                            
                            <article class="article-aula-vitual">
                                <h3 class="tituloAulas">
                                    Aulas Virtuales
                                </h3>
                                <a target='blank' href="https://aulasvirtuales.bue.edu.ar">
                                    <button class="btn-redireccion aulas">
                                        Aulas virtuales
                                    </button>
                                </a>
                            </article>
                        </section>
                    </div>
                    <!-- fin sector aulas virtuales -->
                    <!-- inicio sector gestion guarani -->
                    <div class="columnas-6">
                        <section class="section-gestion-guarani">
                            <a name="g_guarani" href="index.php"></a>
                            <article class="article-gestion-guarani">
                                <h3 class="tituloAulas">
                                    Gestión Guaraní
                                </h3>
                                <a target='blank' href="https://guarani-autogestionagencia.bue.edu.ar">
                                    <button class="btn-redireccion siu"> 
                                        Siu Guaraní
                                    </button>
                                </a>
                            </article>
                        </section>
                        <!-- fin sector gestion guarani -->
                    </div>
                </div>
                <!-- inicio informacion general -->
                <section class="section-info acerca-de">
                    <a name="faq" href="index.php"></a>
                    <article class="article-preguntas-frecuentes contenedor_P_F">
                        <h1>
                            Preguntas Frecuentes
                        </h1>
                        <!-- inicio monti testa -->
                        <div class="grid">
                            <div class="columnas-12">
                                <h3 class="open-button" onclick="openForm('form1')">
                                    ¿Como inscribirse?
                                </h3>
                                <div class="form-popup" id="form1">
                                    <div class="form-container">
                                        <button type="button" class="btn botton close" onclick="closeForm('form1')">
                                            &times;
                                        </button>
                                        <h4>
                                            <ul>
                                                <li>
                                                    Para inscribirte debes realizar la preinscripción haciendo clic aquí &#129185; 
                                                    <a href="https://guarani-autogestionagencia.bue.edu.ar/preinscripcion/SSAALV/acceso">
                                                        Pre Inscripcion
                                                    </a>
                                                </li>
                                            </ul> 
                                        </h4>
                                    </div>
                                </div>
                                <h3 class="open-button" onclick="openForm('form2')">
                                    Turnos de cursada
                                </h3>
                                <div class="form-popup" id="form2">
                                    <div class="form-container">
                                        <button type="button" class="btn botton close" onclick="closeForm('form2')">
                                            &times;
                                        </button>
                                        <h4>
                                            <ul>
                                                <li>
                                                    Tarde - Noche 
                                                </li>
                                            </ul>
                                        </h4>
                                    </div>
                                </div>
                                <h3 class="open-button" onclick="openForm('form3')">
                                    Requisitos necesarios
                                </h3>
                                <div class="form-popup" id="form3">
                                    <div class="form-container">
                                        <button type="button" class="btn botton close" onclick="closeForm('form3')">
                                            &times;
                                        </button>
                                        <h4>
                                            <ul>
                                                <li>
                                                    Ser Mayor de edad
                                                </li>
                                                <li>
                                                    Tener Título secundario o Certificado de Título en trámite
                                                </li>
                                            </ul>
                                        </h4>
                                    </div>
                                </div>
                                <h3 class="open-button" onclick="openForm('form4')">
                                    Fechas de Inscripciones
                                </h3>
                                <div class="form-popup" id="form4">
                                    <div class="form-container">
                                        <button type="button" class="btn botton close" onclick="closeForm('form4')">
                                            &times;
                                        </button>
                                        <h4>
                                            <ul>
                                                <li>

                                                </li>
                                            </ul>                                       
                                        </h4>
                                    </div>
                                </div>
                                <h3 class="open-button" onclick="openForm('form5')">
                                    Revise la lista y no estoy ¿ Que puedo hacer ?
                                </h3>
                                <div class="form-popup" id="form5">
                                    <div class="form-container">
                                        <button type="button" class="btn botton close" onclick="closeForm('form5')">
                                            &times;
                                        </button>
                                        <h4>
                                            <ul>
                                                <li>

                                                </li>
                                            </ul>  
                                        </h4>
                                    </div>
                                </div>
                                <h3 class="open-button" onclick="openForm('form6')">
                                    No tengo el link para la reunión virtual
                                </h3>
                                <div class="form-popup" id="form6">
                                    <div class="form-container">
                                        <button type="button" class="btn botton close" onclick="closeForm('form6')">
                                            &times;
                                        </button>
                                        <h4>
                                            <ul>
                                                <li>
                                                    No, aun no lo mandamos, como dice la publicación los vamos a invitar, obviamente esto será antes del día de la reunión.
                                                </li>
                                            </ul>
                                        </h4>
                                    </div>
                                </div>
                                <h3 class="open-button" onclick="openForm('form7')">
                                    ¿Los de lista de espera también vamos a la reunión?
                                </h3>
                                <div class="form-popup" id="form7">
                                    <div class="form-container">
                                        <button type="button" class="btn botton close" onclick="closeForm('form7')">
                                            &times;
                                        </button>
                                        <h4>
                                            <ul>
                                                <li>

                                                </li>
                                            </ul>
                                        </h4>
                                    </div>
                                </div>
                                <h3 class="open-button" onclick="openForm('form8')">
                                    ¿Debo entregar fisicamente la documentacion?
                                </h3>
                                <div class="form-popup" id="form8">
                                    <div class="form-container">
                                        <button type="button" class="btn botton close" onclick="closeForm('form8')">
                                            &times
                                        </button>
                                        <h4>
                                            <ul>
                                                <li>
                                                    
                                                </li>
                                            </ul>
                                        </h4>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <!-- fin monti testa -->                    
                    </article>
                </section>
                <!-- fin sector informacion general -->            
                <!-- inicio sector de pre inscripciones -->
                <section class="section-inscripciones">
                    <a name="inscripciones" href="index.php"></a>
                    <h1>
                        Documentacion necesaria para la pre-inscripción
                    </h1>            
                    <article class="article-doc-inscripcion">
                        <div class="grid">
                            <div class="columnas-4">
                                <img src="img/ifts_fondo.jpeg" alt="">
                            </div>
                            <div class="columnas-8">
                                <h4>
                                    Recordá que la pre-inscripción es por la web de la Agencia de Aprendizaje
                                    <br>
                                    Te compartimos el enlace &#129185; 
                                    <a href="https://guarani-autogestionagencia.bue.edu.ar/preinscripcion/SSAALV/acceso">
                                        Pre Inscripcion
                                    </a>
                                </h4>
                                <h4>
                                    <ul>
                                        <li>D.N.I. fotocopia y original</li>
                                        <li>Analítico del secundario</li>
                                        <!-- <li>Inscripción on-line</li>
                                        <li>Aprobación del curso de ingreso</li>  -->
                                    </ul>
                                </h4>                                                
                            </div>
                        </div>
                    </article>
                </section>
                <!-- fin sector inscripciones -->
                <!-- inicio Colaboradores -->
                <section class="section-colaboradores acerca-de">
                    <a name="colaboradores" href="index.php"></a>
                    <article class="article-colaboradores contenedor_P_F">
                        <h1>
                            ¡¡¡La Institución agradece a los participantes y colaboradores con la producción, y actualización de este sitio!!!
                        </h1>
                        <div class="grid">
                            <div class="columnas-6">
                                <a target='blank' href="pdf_graduados/2023_1_c.pdf">
                                    <h3 class="open-button" onclick="openForm('form17')">
                                        1C 2023
                                    </h3>
                                </a>
                                <!-- <div class="form-popup" id="faq17"> -->
                                <!-- <div class="form-popup" id="form17">
                                    <div class="form-container">
                                        <button type="button" class="btn botton close" onclick="closeForm('form17')">
                                            &times;
                                        </button>
                                        <ul>
                                            <li>Barzizza, Guillermo</li>
                                            <li>Corvalan, Emiliano</li>
                                            <li>Limachi Cordero, Marco Antonio</li>
                                            <li>Guerrero, Matías</li>
                                            <li>Silvero, Germán</li>
                                            <li>Melissari, Pablo Fernando</li>
                                            <li>Monti, Danid Ezequiel</li>
                                            <li>De Vito, David Ezequiel</li>
                                            <li>Testa, Alessandro</li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                            <div class="columnas-6">
                                <a target='blank' href="pdf_graduados/2023_2_c.pdf">
                                    <h3 class="open-button" onclick="openForm('form18')">
                                        2C 2023
                                    </h3>
                                </a>
                                <!-- <div class="form-popup" id="faq18"> -->
                                <!-- <div class="form-popup" id="form18">
                                    <div class="form-container">
                                        <button type="button" class="btn botton close" onclick="closeForm('form18')">
                                            &times;
                                        </button>
                                        <ul>
                                            <li>Abruzzese, Ian Rodrigo</li>
                                            <li>Cabrera Farias, Tomas</li>
                                            <li>Cejas, Flavio</li>
                                            <li>Coronel, Eliam</li>
                                            <li>Cortés Guiet, Nahuel Camino</li>
                                            <li>Franco, Oscar Alejandro</li>
                                            <li>Gomez, Emmanuel Mauricio</li>
                                            <li>Grella Becchero, Catriel Joel</li>
                                            <li>Murua, Jorge Gastón</li>
                                            <li>Pettinari, Gabriel Alejandro</li>
                                            <li>Ponzio, GermanLuis</li>
                                            <li>Ruiz Vicente, Lucas Emanuel</li>
                                            <li>Santos, Nancy Pamela</li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </article>
                </section>   
                <hr>
                <br><br><br>     
            </main>
            <!-- inicio sector contacto -->  
            <?php 
                // <!-- incio flechas -->
                include("flechas.php");
                // <!-- fin flechas -->
                // include("navegacion_footer.php");
                include("footer_publico.php");
                // include("footer_desarrollo.php");
            ?>
            <!-- fin sector contacto -->
            <!-- inicio bot -->
            <!-- <?php include('boti.php'); ?> -->
            <!-- fin bot -->
        </div>
        <!-- fin div que genera grupo alejandro -->
        <!-- fin cuerpo del menu principal -->         
        <!-- <script src="js/script_v.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <!-- inicio script bot -->
        <!-- <script src="js/bot.js"></script> -->
        <!-- fin script bot -->
        <script src="js/script.js"></script>
    </body>
</html>