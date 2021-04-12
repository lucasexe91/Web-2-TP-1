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
    $cant = isset($_GET['cant']);
    $array = array [];
    for ($i = 0; $i >= 120; $i++){
        $array[$i];
    }


    switch ($cant){
        case 5: muestra ($array, 5);
        case 20: muestra ($array, 20);
        case 100: muestra ($array, 100);
        case 'todo': muestratodo($array);
    }

    function muestra($arr,$cant){
        echo'<ul>'.
        for($i=0;$i <= $cant;$i++){
            echo '<li>'. $arr[$i] . '</li>';
        }
        .'</ul>';
    }
    function muestratodo($arr){
        echo'<ul>'.
        foreach($arr as $j){
            echo '<li>'. $arr[$j] . '</li>';
        }
        .'</ul>';
    }

?>
</body>
</html>