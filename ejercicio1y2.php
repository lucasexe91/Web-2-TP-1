<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 2 TP 1</title>
</head>
<body>
    <ul>
        <li>
            <a href="ejercicio4.php?cant=5">Mostrar primeros 5</a>
        </li>
        <li>
            <a href="ejercicio4.php?cant=20">Mostrar primeros 20</a>
        </li>
        <li>
            <a href="ejercicio4.php?cant=100">Mostrar primeros 100</a>
        </li>
        <li>
            <a href="ejercicio4.php?cant=todo">Mostrar todo</a>
        </li>
    </ul>
    <?php
        require_once 'ejercicio4.php';
        echo '<h1>HOLA MUNDOOOO!!!<h1>'
        echo '<ul>'. muesratodo() .'</ul>';

        
    ?>
   
</body>
</html>