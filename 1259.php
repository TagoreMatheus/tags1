<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even and Odd</title>
</head>
<body>
    <h1>
    <?php
        function ascending($a, $b) {
            return $a - $b;
        }

        function descending($a, $b) {
            return $b - $a;
        }

        $n = intval(fgets(STDIN));
        $par = 0;
        $impar = 0;
        $np = [];
        $ni = [];

        for ($i = 0; $i < $n; $i++) {
            $num = intval(fgets(STDIN));
            if ($num % 2 == 0) {
                $np[$par] = $num;
                $par++;
            } else {
                $ni[$impar] = $num;
                $impar++;
            }
        }

        usort($np, 'ascending');
        usort($ni, 'descending');

        foreach ($np as $valor) {
            echo $valor . "\n";
        }

        foreach ($ni as $valor) {
            echo $valor . "\n";
        }

    ?>
    </h1>
</body>
</html>