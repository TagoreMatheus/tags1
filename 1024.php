<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encryption</title>
</head>
<body>
    <h1>
    <?php
        $N = intval(fgets(STDIN));

        for ($i = 0; $i < $N; ++$i) {
            $line = rtrim(fgets(STDIN));

            $length = strlen($line);
            $half = intval($length / 2);

            for ($j = 0; $j < $length; ++$j) {
                if (ctype_alpha($line[$j]))
                    $line[$j] = chr(ord($line[$j]) + 3);
            }

            for ($j = 0; $j < $half; ++$j) {
                $tmp = $line[$j];
                $line[$j] = $line[$length - 1 - $j];
                $line[$length - 1 - $j] = $tmp;
            }

            for ($j = $half; $j < $length; ++$j)
                $line[$j] = chr(ord($line[$j]) - 1);

            echo $line . "\n";
        }

    ?>
    </h1>
</body>
</html>