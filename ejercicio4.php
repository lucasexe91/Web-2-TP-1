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
            <a href="ejercicio4.php?cant=120">Mostrar todo</a>
        </li>
    </ul>
<?php
    function muestra($array, $cant){
        echo'<ul>';
        for ($j = 0; $j <= ($cant - 1); $j++){
            echo '<li>';
            echo $array[$j];
            echo'</li>';
        }
        echo '</ul>';
    }

    if (isset($_GET['cant'])){
        $cant = $_GET['cant'];
        $arr=array();

        for ($i = 0; $i <= 120; $i++){
            $arr[$i] = mt_rand(0,1000);
        }

        var_dump($arr);

        switch ($cant){
            case 5: muestra($arr,5);
                break;
            case 20: muestra($arr,20);
                break;
            case 100: muestra($arr,100);
                break;
            case 120: muestra($arr,120);
                break;
        }
    }
?>
</body>
</html>