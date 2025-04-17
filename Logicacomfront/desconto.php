<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Desconto</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="desconto">
<center>
<div class="titulo">
    <h1>Desconto do seu produto</h1>
</div>
<div class="dc" id="resultado">
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $preco = htmlspecialchars($_GET["preco"]);
        $desconto = htmlspecialchars($_GET["desconto"]);
        $precoFinal = $preco - ($preco * ($desconto / 100));
    
    echo "<h2>O preço do produto é: R$ $preco</h2>";
    echo "<h2>O desconto é de: $desconto%</h2>";
    echo "<h2>O preço final do produto é: R$ $precoFinal</h2>";
    } else {
        echo "<h2>Por favor, preencha o formulário corretamente.</h2>";
    }
    ?>
</div>
</center>
</body>
</html>