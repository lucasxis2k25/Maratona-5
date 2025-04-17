<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Desconto</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="desconto">


<center>

<div class="titulo">
<h1>CALCULADORA DE DESCONTO</h1>
</div>
<form action="desconto.php" method="GET">
    
    <div class="dc">
    <label for="Preco">Preço do produto:</label>
    <input type="number" step="0.01" name="preco" required>
    <br><br>
    <label for="desconto">Valor do Desconto:</label>

    <input type="number" step="0.01" name="desconto" required min="0" max="100">

    <br>
    <input type="reset" value="Limpar"/>
    <input type="submit" value="Enviar"/>
    </div>

</form>
</center>
    
</body>
</html>