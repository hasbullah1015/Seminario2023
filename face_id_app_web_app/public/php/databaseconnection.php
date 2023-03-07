<?php
    $connection= mysqli_connect("127.0.0.1","root","","usuarios");
    if(!$connection){
        die("no se logro hacer la conexión con la db admin: ".mysqli_error());
    }
    echo "conexión exitosa";

?>