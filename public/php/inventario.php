<?php

    $dbhost = "127.0.0.1";
    $dbuser = "u614989997_admindb";
    $dbpswd = "6TUH72toIDh5RpVGBi";
    $dbname = "u614989997_db_inventario";

    $connection= mysqli_connect($dbhost,$dbuser,$dbpswd,$dbname);
    if(!$connection){

        die("no se logro hacer la conexión con la db admin: ".mysqli_error());
    } 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventario</title>
</head>
<body>
    <?php
         $sqlquery =mysqli_query($connection,"SELECT * FROM inventario WHERE idProducto='LAC-01'");
        $datos=mysqli_fetch_row($sqlquery);
        if(!$datos){echo 'error';
        }
        while($datos)
        {
            echo $datos['0'];
            echo $datos['1'];
            echo $datos['2'];
            echo $datos['3'];
        }
    
    ?>

    Leches: <br>

    
</body>
</html>