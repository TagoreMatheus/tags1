<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caesar Cipher</title>
</head>
<body>
    <h1>
    <?php
        $n = intval(readline());

        for ($x = 0; $x < $n; $x++) {
            $p = readline();
            $s = intval(readline());

            for ($y = 0, $tam = strlen($p); $y < $tam; $y++) {
                $p[$y] = strtoupper($p[$y]);
                if (ord($p[$y]) - $s < 65) {
                    $p[$y] = chr(ord($p[$y]) + 26);
                }
                $p[$y] = chr(ord($p[$y]) - $s);
                echo $p[$y];
            }

            echo "\n";
        }

    ?>
    </h1>
</body>
</html>