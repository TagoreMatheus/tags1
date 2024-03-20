<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Consecutive Odd Numbers I</title>
</head>
<body>
    <h1>
    <?php
        $X = intval(readline());
        $Y = intval(readline());

        $soma = 0;

        if ($X > $Y) {

            $temp = $X;
            $X = $Y;
            $Y = $temp;
        }

        for ($i = $X + 1; $i < $Y; $i++) {
            if ($i % 2 !== 0) {
                $soma += $i;
            }
        }

        echo $soma . "\n";
    ?>
    </h1>
</body>
</html>