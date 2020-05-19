<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>  
    <?php//  $data = json_decode( file_get_contents('http://localhost/Fiado/pruebas/public/api/protected'), true );

//echo $data['message'];
    ?>
    <form action="https://localhost/Fiado/pruebas/public/api/token" method="POST"> 
    <input type="text" value="user" name="email">
    <input type="text" value="password" name="password">
    <input type="submit" value="Enviar">
    </form>
        
    </body>
</html>