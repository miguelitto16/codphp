<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número Redondo</title>
</head>
<body>
    <h1>Verificação de Número</h1>

    <form method="post" action="">
        <label for="numero">Por favor, insira um número:</label>
        <input type="text" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numero = $_POST["numero"];

        if (is_numeric($numero)) {
            if (strpos($numero, '.') !== false) {
                echo "<p>O número $numero é quebrado (não redondo).</p>";
            } else {
                echo "<p>O número $numero é redondo (inteiro).</p>";
            }
        } else {
            echo "<p>Desculpe, parece que você não inseriu um número válido. Tente novamente.</p>";
        }
    }
    ?>
</body>
</html>

