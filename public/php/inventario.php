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
        $connection= mysqli_connect("127.0.0.1","u614989997_admindb","6TUH72toIDh5RpVGBi","u614989997_db_inventario");
        $sqlquery =mysqli_query($connection,"SELECT * FROM inventario WHERE idProducto='LAC-01'");
        $datos=mysqli_fetch_row($sqlquery);
        while($datos)
        {
        ?>
            <p> <?php echo $datos['0']?> </p>
    <?php
      }
    ?>
 
    Leches: <br>

    
</body>
</html>