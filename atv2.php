<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Par ou Ímpar</title>
</head>
<body>
<h1>Código para verificação de par ou ímpar e redondeza</h1>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se o formulário foi enviado via método POST
    $num = $_POST["numero"];

    if (is_numeric($num)) {
        // Verifica se a entrada é um número
        if ($num % 2 == 0) {
            echo "O número informado é PAR e ";
        } else {
            echo "O número informado é Ímpar e ";
        }

        // Verifica se o número é redondo
        if (round($num) == $num) {
            echo "redondo.";
        } else {
            echo "não é redondo.";
        }
    } else {
        echo "Por favor, insira um número válido.";
    }
}
?>
 
<form method="post" action="">
    <label for="numero">Informe um número:</label>
    <input type="text" id="numero" name="numero" required>
    <button type="submit">Verificar</button>
</form>
</body>
</html>

</body>
</html>