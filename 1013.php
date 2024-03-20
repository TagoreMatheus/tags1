<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Greatest</title>
</head>
<body>
    <h1>
    <?php
        $valores = explode(" ", fgets(STDIN));

        $maiorAB = ($valores[0] + $valores[1] + abs($valores[0] - $valores[1])) / 2;
        $maior = ($maiorAB + $valores[2] + abs($maiorAB - $valores[2])) / 2;
        
        echo "$maior eh o maior\n";
    ?>
    </h1>
</body>
</html>