<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequence of Numbers and Sum</title>
</head>
<body>
    <h1>
    <?php
        $i = 0;
        $stop = 1;

        while ($stop != 0) {
            $number = explode(" ", fgets(STDIN));
            $S = 0;
            $T = 0;
            $M = (int) $number[0];
            $N = (int) $number[1];
            if($N == 0 || $M == 0 || $N < 0 || $M < 0) {
                $stop--;
            } else if($N >= $M) {
                for ($i=$M; $i <= $N; $i++) { 
                    echo $i . " ";
                    $S += $i;
                    if($i == $N)
                        echo "Sum=" . $S . PHP_EOL;
                }
            } else if($N < $M) {
                for ($i=$N; $i <= $M; $i++) { 
                    echo $i . " ";
                    $T += $i;
                    if($i == $M)
                        echo "Sum=" . $T . PHP_EOL;
                }
            }
        }
    ?>
    </h1>
</body>
</html>