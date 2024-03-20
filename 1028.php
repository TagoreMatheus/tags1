<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collectable Cards</title>
</head>
<body>
    <h1>
    <?php
        function euclides_mdc($n1, $n2) {
            $res = $n1 % $n2;

            if ($res == 0) {
                return abs($n2);
            }

            return euclides_mdc($n2, $res);
        }

        function run_test() {
            fscanf(STDIN, "%d %d", $a, $b);
            echo euclides_mdc($a, $b) . "\n";
        }

        fscanf(STDIN, "%d", $number_of_tests);

        for ($i = 0; $i < $number_of_tests; ++$i) {
            run_test();
        }

    ?>
    </h1> 
</body>
</html>