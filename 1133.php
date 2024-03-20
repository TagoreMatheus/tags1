<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest of a Division</title>
</head>
<body>
    <h1>
    <?php
        $X = (int) fgets(STDIN);
        $Y = (int) fgets(STDIN);

        if ($X > $Y) {
            for ($i = $Y + 1; $i < $X; $i++) {
                if($i % 5 == 2 || $i % 5 == 3) {
                    echo $i . PHP_EOL;
                }
            }
        } elseif ($X < $Y) {
            for ($i = $X + 1; $i < $Y; $i++) {
                if($i % 5 == 2 || $i % 5 == 3) {
                    echo $i . PHP_EOL;
                }
            }
        }
    ?>
    </h1>
</body>
</html>