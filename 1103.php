<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alarm Clock</title>
</head>
<body>
    <h1>
    <?php
        while (true) {
            fscanf(STDIN, "%d %d %d %d", $h1, $m1, $h2, $m2);

            if (!$h1 && !$m1 && !$h2 && !$m2)
                break;

            if ($h1 > $h2 || ($h1 == $h2 && $m1 > $m2))
                $h2 += 24;

            $minutes = ($h2 * 60 + $m2) - ($h1 * 60 + $m1);

            echo $minutes . "\n";
        }

    ?>
    </h1>
</body>
</html>