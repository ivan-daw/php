<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3 style="color:violet">LA CAJA FUERTE ESTA ABIERTA!!!!!</h3>

        <?php
        //una vez abierta destruyo la session para que no se pueda a volver a acceder directamente
        // con las credenciales anteriores sin pasar niveles, tambien podria haberla cambiado
        session_destroy();
        ?>

    </body>
</html>
