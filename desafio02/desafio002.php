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

    // Função que verifica se o número pertence à sequência de Fibonacci
    function is_in_fibonacci($num) {
        $fib_sequence = fibonacci($num);
        return in_array($num, $fib_sequence);
    }

    // Número a ser verificado (no caso decidi ser definido aqui no código)
    $num = 13;  

    // Verifica se o número pertence à sequência de Fibonacci para imprimir resultado
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