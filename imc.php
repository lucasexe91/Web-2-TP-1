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
        $peso= $_REQUEST["peso"];
        $altura= $_REQUEST["altura"];
        $imc = $peso / pow($altura, 2);
        $resultado = 'sin datos';
        if ($imc < 18.50){
            $resultado = 'bajo peso';
        }
        if ($imc >= 18.50 && $imc < 24.99){
            $resultado = 'peso normal';
        }
        if ($imc >= 25 && $imc <30){
            $resultado = 'sobrepeso';
        }
        if ($imc >= 30){
            $resultado = 'obesidad';
        }
        echo 'Su resultado fue: ' .$resultado;
    ?>
</body>
</html>