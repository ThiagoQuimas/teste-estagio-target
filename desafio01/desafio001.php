<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor da soma</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Variável SOMA</h1>
    <?php 
    $INDICE = 13;
    $SOMA = 0;
    $K = 0;

    while ($K < $INDICE) {
        $K ++;
        $SOMA = $K;
    }
    echo "<p>Imprimir($SOMA)</p>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>