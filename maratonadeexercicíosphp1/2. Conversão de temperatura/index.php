<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
    <h2>Conversão de Temperatura</h2>
    <!DOCTYPE html>
<html>
<head>
<body>

<form method="post">
    <input type="number" name="num1" required placeholder=" ">
    
    <select name="convercao">
        <option value="converter">🌡️</option>

        <input type="submit" name="calcular" value="Calcular">
        <?php
    // Verifica se o botão foi pressionado
    if (isset($_POST["calcular"])) {
    // Pegando valores do formulário
    $num1 = $_POST["num1"];
    $operacao = $_POST["convercao"];
    $resultado = "";
    }



    if ($operacao == "soma") {
        $resultado = ($num1 * valor) + 32;
    }
    ?>






















    <h2>
        <?php
        const valor = 1.8;
        $Graus = 16;
        $num = 32; 
        
        $converter = ($Graus * valor) + $num;
        
        echo "Mostre o resultado da expressão $converter ºF";
        
        ?>
    </h2>
</body>
</html