<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED</title>
</head>
<body>
    <h1>
    <?php
        $leds = [6, 2, 5, 5, 4, 5, 6, 3, 7, 6];
        $n = intval(readline());

        for ($i = 0; $i < $n; $i++) {
            $num = readline();
            $soma = 0;
            for ($j = 0; $j < strlen($num); $j++) {
                $soma += $leds[intval($num[$j])];
            }
            echo $soma . " leds\n";
        }
    ?>
    </h1>
</body>
</html>