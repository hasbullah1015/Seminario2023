<?php
    $dbhost = "127.0.0.1";
    $dbuser = "u614989997_admindb";
    $dbpswd = "6TUH72toIDh5RpVGBi";
    $dbname = "u614989997_db_inventario";

    $connection= mysqli_connect($dbhost,$dbuser,$dbpswd,$dbname);
    //$sqlquery =mysqli_query($connection,"INSERT INTO producto (cantidad,categoria,idProducto,nombre) VALUES (1,'LACTEO','LAC-01','LECHE ALPURA');  ");

    if(!$connection){

        die("no se logro hacer la conexión con la db admin: ".mysqli_error());
    }

    mysqli_close($connection);

?>