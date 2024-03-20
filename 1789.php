<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Race of Slugs</title>
</head>
<body>
    <h1>
    <?php
        $n = intval(readline("Digite um número inteiro: "));

        while ($n !== 0) {
        $velocidades = array_map('intval', explode(" ", readline("Digite as velocidades separadas por espaço: ")));
        $maior_velocidade = array_reduce($velocidades, function ($a, $b) {
            return $a > $b ? $a : $b;
        }, 0);

        switch (true) {
            case ($maior_velocidade < 10):
            echo "1\n";
            break;
            case ($maior_velocidade < 20):
            echo "2\n";
            break;
            default:
            echo "3\n";
        }

        $n = intval(readline("Digite um número inteiro: "));
        }
    ?>
    </h1>
</body>
</html>