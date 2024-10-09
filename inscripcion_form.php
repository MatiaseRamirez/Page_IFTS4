<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <title>Inscripción</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Proza+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans">
    <link rel="stylesheet" href="css/e_iniciales.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php
        include("navegacion.php");
        include("header_publico.php");
    ?>
    <!-- desarrollo monti testa -->
    <section>
        <article class="formulario-contacto columnas-10">
            <form action="#">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombretxt" placeholder="Tu Nombre">
                </div>
                <div class="campo">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" id="apellidotxt" placeholder="Tu Correo Electrónico">
                </div>
                <div class="campo dni">
                    <label for="dni">D.N.I. fotocopia y original</label>
                    <input type="file" name="dni" id="dni" placeholder="D.N.I. - Fotocopia y original" accept="image/png,image/jpeg,application/pdf,application/vnd.ms-excel"></input>
                </div>
                <div class="campo analitico">
                    <label for="analitico">Analítico del secundario</label>
                    <input type="file" name="analitico" id="analitico" placeholder="Analítico del secundario" accept="image/png,image/jpeg,application/pdf,application/vnd.ms-excel"></input>
                </div>
                <div class="campo mensaje">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" placeholder="Tu Mensaje"></textarea>
                </div>
                <div class="campo enviar">
                    <input type="submit " value="Enviar " class="btn btn-primario ">
                </div>
            </form>
        </article>
    </section>
    <?php
        include("navegacion_footer.php");
        include("footer_publico.php");
        include("footer_desarrollo.php");
    ?>
</body>
</html>

<!-- D.N.I. fotocopia y original
Analítico del secundario
Inscripción on-line
Aprobación del curso de ingreso
lorem ipsum -->