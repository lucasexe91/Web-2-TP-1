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
        $porcentaje= $_REQUEST["porcentaje"];
        $dineroinicial= $_REQUEST["dinero"];
        $meses = array("Mes "," Enero "," Febrero "," Marzo "," Abril "," Mayo "," Junio "," Julio "," Agosto "," Septiembre "," Octubre "," Noviembre "," Diciembre ");
        echo'<p>porcentaje de interes: '.$porcentaje.'%</p>';
        echo '<table><tr>';
        for ($i = 0; $i <= 12; $i++){
                echo '<th>'. $meses[$i] .'</th>';
        }
        echo '</tr><tr><th>Inversion: '. $dineroinicial .'$</th>';
        for ($j = 0; $j <= 12; $j++){
            $dineroinicial = $dineroinicial + (($dineroinicial * $porcentaje) / 100);
            echo '<td>'. $dineroinicial .'</td>';
        }
    ?>
</body>
</html>