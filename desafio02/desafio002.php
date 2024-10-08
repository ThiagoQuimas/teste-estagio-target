<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequencia de Fibonacci</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Sequencia de Fibonacci</h1>
        <?php
    
    function fibonacci($n) {
        $fib_sequence = [0, 1];
        while (true) {
            $next_fib = $fib_sequence[count($fib_sequence) - 1] + $fib_sequence[count($fib_sequence) - 2];
            if ($next_fib > $n) {
                break;
            }
            $fib_sequence[] = $next_fib;
        }
        return $fib_sequence;
    }

    function is_in_fibonacci($num) {
        $fib_sequence = fibonacci($num);
        return in_array($num, $fib_sequence);
    }

    $num = 13;  

    if (is_in_fibonacci($num)) {
        echo "$num pertence à sequência de Fibonacci.\n";
    } else {
        echo "$num NÃO pertence à sequência de Fibonacci.\n";
    }
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
