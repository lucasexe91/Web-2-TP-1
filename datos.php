<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 2 TP 1</title>
</head>
<body>
    <?php
        $nombre= $_REQUEST["nombre"];
        $apellido= $_REQUEST["apellido"];
        $edad= $_REQUEST["edad"];
        echo '<p>Nombre: ' . $nombre . '</p>';
        echo '<p>Apellido: ' . $apellido . '</p>';
        echo '<p>Edad: ' . $edad . '</p>';
    ?>
</body>
</html>