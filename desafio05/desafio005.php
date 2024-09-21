<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String reversa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>String reversa</h1>
        <?php
        $original = "Test String";

        $invertida = '';

        for ($i = strlen($original) - 1; $i >= 0; $i--) {
            $invertida .= $original[$i];
        }

        echo "String original: <strong>$original</strong>";
        echo "<p>String invertida: <strong>$invertida</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>