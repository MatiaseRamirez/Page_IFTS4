<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar noticias</title>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/formulario.css">
    <link rel="stylesheet" href="../../../css/navegacion.css">
    <link rel="stylesheet" href="../../../css/navegacion.css">
    <link rel="stylesheet" href="../../../css/estilos.css">

</head>
<body>
<?php 
    require '../../../admin/navegacion_admin.php';
?>


    <div class="img_container">
        <img src="../../assets/img/logo.png" alt="Logo" class="logo">
    </div>

    <h1 class="titulo_panel">Agrega Noticias</h1>

    <div class="form_container" >

    <form  action="../../models/agregar_noticia.php" method="post" enctype= "multipart/form-data">
    
        <div class="form_group">
            <label for="carrera">La noticia es para la carrera</label>
            <select name="carrera" id="carrera">
                <option>General</option>
                <option>Técnico/a Desarrollo de Software</option>
                <option>Técnico/a Superior en Analisis de Sistemas</option>
            </select>
        </div>
        <div class="form_group">
            <label for="Categoria">Categoria</label>
            <select name="Categoria" id="Categoria" required>
            
            <?php
                include '../../config/connection.php';
                $sql="SELECT * FROM `categorias`";
                $dato = mysqli_query($conexion, $sql);

                if (mysqli_num_rows($dato) > 0) { 
                    while ($datos = $dato->fetch_assoc()) { ?>
                
                    <option value="<?php echo $datos['id']; ?>"> <?php echo $datos['nombre'];?>
                    </option>
                    <?php
                    }
                }
                ?>
                <option value="null"> NO esta la categoria</option>
            </select>
        </div>
        <div class="form_group"> 
                <label for="null_categoria">Si la categoria no exite ingrese la categoria</label>
                <input type="text" name="null_categoria" id="null_categoria"  >
        </div>
        
        <div class="form_group">
            <label for="imagen">Ingrese la imagen de la noticia (Tamaño Máximo 2MB)</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png, image/gif, image/jpg ">
        </div>

        <div class="form_group">
            <label for="documento">Agregar documento (Opcional) (Tamaño Máximo 15MB)</label>
            <input type="file" id="documento" name="documento" accept="application/pdf ">
        </div>

        <div class="form_group">
            <label for="titulo">Ingrese el titulo de la noticia</label>
            <input type="text" name="titulo" id="titulo" required>
        </div>
            
        <div class="form_group">
            <label for="resumen">Ingrese un resumen de la noticia</label>
            <textarea name="resumen" id="resumen" rows="10" placeholder="Ingresa un Resumen de la Noticia (Máximo 500 caracteres)" required></textarea>
        </div>

        <div class="form_group">
            <label for="contenido">Ingrese la noticia</label>
            <textarea name="contenido" id="contenido" rows="50" placeholder="Ingresa el Contenido de la Noticia (Máximo 4000 caracteres)" required></textarea>
        </div>

        <div class="container-botones">
            <a class="boton-volver" href="../../views/panel/panel_profesor.php">Atrás</a>
            <button class="submit_button" type="submit">Subir</button>
        </div>
        
        
    </form>
</div>

</body>
</html>

