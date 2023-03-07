<?php 
    session_start();
    include('face_id_app_web_app/codigo/php/databaseconnection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/public/css/index.css" type="text/css">

    
</head>
<body>
    <div id="video-background" ><video src="/public/assets_img/renderizado-26011.mp4" autoplay="true" muted="true" loop="true" ></video> </div>
    <div class="container alig">
        <div class="row text-center">
            <br>
            <h1>Bienvenido al sistema de control:</h1><br>
            <h2>Por favor, ingrese su usuario y contraseña: </h2>
            

        <div class="row">
            <div class="col-sm-12 col-md-12 slide">

            <form method="post" action="index_panel.html">
            <label for="user">Nombre: </label>
            <label for="password">Contraseña: </label>
                <input type="text" name="user" id="user"hNombre: ><br>
                <input type="password" name="password" id="password"><br>
                <button type="submit">Send</button>

            </form>
        
            </div>
        </div>
    </div>
    
</body>
</html>