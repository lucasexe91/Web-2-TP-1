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
        $tabla= $_REQUEST["tabla"];
        echo '<table><tr>';
        for ($i = 0; $i <= $tabla; $i++){
            echo '<th>'. $i .'</th>';
        }
        echo '</tr>';
        for ($k = 1; $k <= $tabla; $k++){
            echo'<tr><th>'.$k.'</th>';
            for ($j = 1; $j <= $tabla; $j++){
                 echo '<td>'.$j*$k.'</td>';
            }
            echo '</tr>';
        }

    ?>
</body>
</html>