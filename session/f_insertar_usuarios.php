<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Registrate
    </h1>
    <form action="insertar_usuario.php" method="post">
        <table>
            <tr>
                <td>
                    Usuario
                </td>
                <td>
                    <input type="text" id="usu" name="usu" >
                </td>
            </tr>
            <tr>
                <td>
                    Contraseña
                </td>
                <td>
                    <input type="text" id="contra" name="contra">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Guardar">
                </td>
            </tr>
        </table>
                
    </form>
</body>
</html>