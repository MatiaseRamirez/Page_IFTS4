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
        <title>Contacto</title>
        <link rel="stylesheet" href="css/e_iniciales.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/navegacion.css">
        <link rel="stylesheet" href="css/modalStyle.css">
        <link rel="stylesheet" href="css/bot.css">
    </head>
    <body>
        <a name="inicio" href="index.html"></a>
        <?php
            include("navegacion.php");    
            // <!-- fin barra de navagación -->

            // Inicio vantana Modal
            include("modal.php"); 
            //fin ventana modal
            
            // <!-- inicio cabecera menu principal -->
            include("header_publico.php");
        ?>
        <section>
            <!-- barzizza -->
            <article class="formulario-contacto columnas-10">
                <!-- <form action="enviar_form.php" method="post" > -->
                <form action="testphpmailer.php" method="post" >
                    <div class="campo">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombretxt" placeholder="Tu Nombre">
                    </div>
                    <div class="campo">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" id="email" placeholder="Tu Correo Electrónico">
                    </div>
                    <div class="campo">
                        <label for="asunto">Asunto</label>
                        <input type="text" name="asunto" id="asunto" placeholder="El Asunto">
                    </div>
                    <div class="campo mensaje">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" placeholder="Tu Mensaje"></textarea>
                    </div>
                    <div class="campo enviar">
                        <input type="submit" name="enviar" value="Enviar" class="btn btn-primario">
                    </div>
                </form>
            </article>
            <!-- fin barzizza -->
            <!-- <article class="formulario-contacto columnas-10">
                <form action="#">
                    <div class="campo">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombretxt" placeholder="Tu Nombre">
                    </div>
                    <div class="campo">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" id="apellidotxt" placeholder="Tu Correo Electrónico">
                    </div>
                    <div class="campo mensaje">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" placeholder="Tu Mensaje"></textarea>
                    </div>
                    <div class="campo enviar">
                        <input type="submit " value="Enviar " class="btn btn-primario ">
                    </div>
                </form>
            </article> -->
        </section>
        <!-- <script src="js/script_v.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
            <!-- inicio script bot -->
            <!-- <script src="js/bot.js"></script> -->
            <!-- fin script bot -->
            <script src="js/script.js"></script>
        <?php
            include("flechas.php");
            include("footer_publico.php");
            // include("footer_desarrollo.php");
        ?>
    </body>
</html>