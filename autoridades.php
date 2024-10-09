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
        <title>Autoridades</title>
        <link rel="stylesheet" href="css/e_iniciales.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/navegacion.css">
        <link rel="stylesheet" href="css/modalStyle.css">
        <link rel="stylesheet" href="css/bot.css">
    </head>
    <body>
        <a name="inicio" href="index.html"></a>

        <div class="container">

        <!-- inicio barra de navegación -->
            <?php
                include("navegacion.php");    
                // <!-- fin barra de navagación -->

                // Inicio vantana Modal
                include("modal.php"); 
                //fin ventana modal
                
                // <!-- inicio cabecera menu principal -->
                // include("header_publico.php");
            ?>
                <!-- fin cabecera menu principal -->
            <!-- inicio cuerpo del menu principal -->
            <!-- este id lo genera el grupo alejandro -->
            <main id='main'> 
                <section class="section-autoridades galeria">
                    <h1>     
                        Autoridades
                    </h1>
                    <article class="article-autoridades contenedor-imagenes">                
                        <div class="imagen" style="background-color:#455c18"></div>
                        <div class="imagen" style="background-color:#025154;">
                            <br>
                            <h3 style="color:#f1f1f1;">Rectora</h3>
                            <br>
                            <h2 style="color:#f1f1f1">Mg. Sfrégola, Carmen Susana</h2>
                            <div class="overlay">
                            </div>
                        </div>
                        <div class="imagen" style="background-color:#045a81"></div>
                    </article>
                    <h1>Personal de Secretaría</h1>
                    <article class="article-autoridades contenedor-imagenes">
                        <div class="imagen" style="background-color:#542d58">
                            <br>
                            <h3 style="color:#f1f1f1">Secretaria Administrativa</h3>
                            <br>
                            <h2 style="color:#f1f1f1">Vitale, Daniela</h2>
                            <div class="overlay">
                            </div>
                        </div>
                        <div class="imagen" style="background-color:#5e1d47">
                            <br>
                            <h3 style="color:#f1f1f1">Asesora Pedagógica</h3>
                            <br>
                            <h2 style="color:#f1f1f1">Mg. Alvarez, Michelle</h2>
                            <div class="overlay">
                            </div>
                        </div>
                        <div class="imagen" style="background-color:#8e2b26">
                            <br>
                            <h3 style="color:#f1f1f1"> </h3>
                            <br>
                            <h2 style="color:#f1f1f1">Dr. Pérez Carrasso, Matías</h2>
                            <div class="overlay">
                            </div>
                        </div>
                    </article>
                    <h1>Nuestros Bedeles</h1>
                    <article class="article-autoridades contenedor-imagenes">
                        <div class="imagen" style="background-color:#7c808d">
                            <br>
                            <h3> </h3>
                            <br>
                            <h2 style="color:#f1f1f1">Tapia, Magáli</h2>
                            <div class="overlay">
                            </div>
                        </div>
                        <div class="imagen" style="background-color:#b28807">
                            <br>
                            <h3> </h3>
                            <br>
                            <h2 style="color:#f1f1f1">Mendez, Marilina</h2>
                            <div class="overlay">
                            </div>
                        </div>
                        <div class="imagen" style="background-color:#5b6068">
                            <br>
                            <h3> </h3>
                            <br>
                            <h2 style="color:#f1f1f1">Alvarez, Leandro</h2>
                            <div class="overlay">
                            </div>
                        </div>
                    </article>
                </div>
            </main>
        </div>   
        <br><br><br>
        <!-- <script src="js/script_v.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <!-- inicio script bot -->
        <script src="js/bot.js"></script>
        <!-- fin script bot -->
        <script src="js/script.js"></script>
        <?php
            //<!-- incio flechas -->
            include("flechas.php");
            // <!-- fin flechas -->
            // <!-- inicio sector contacto -->  
            // include("navegacion_footer.php");
            include("footer_publico.php");
        ?>     
    </body>
</html>