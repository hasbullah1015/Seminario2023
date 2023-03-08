<?php
    $dbhost = "";
    $dbuser = "";
    $dbpswd = "";
    $dbname = "";

    $connection= mysqli_connect($dbhost,$dbuser,$dbpswd,$dbname);
    if(!$connection){
        die("no se logro hacer la conexión con la db admin: ".mysqli_error());
    }

    $user = $_POST["user"];
    $pswd = $_POST["password"];
    $sqlquery =mysqli_query($connection,"SELECT * FROM  usuarios WHERE usuario = '".$user."' AND contraseña ='".$pswd."'");
    if(!$sqlquery){
        echo "Usuario no encontrado";
        exit;
    }
    echo "Bienvenido";
?>