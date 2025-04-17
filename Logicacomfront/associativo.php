<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<center>

<body class="petshop">
 <div class="pt">
 <h2>Petshop</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $idade = htmlspecialchars($_POST['idade']);
    $cor = htmlspecialchars($_POST['cor']);
    $peso = htmlspecialchars($_POST['peso']);
 
    $associativo = [
        "Nome" => $nome,
        "Idade" => $idade,
        "Cor" => $cor,
        "Peso" => $peso
    ];
 
    foreach ($associativo as $chave => $valor) {
        echo "<br>$chave é: $valor";
    }
} else {
    echo "não está funcionando";
}
 
?>

</div>
</center>
 
</body>
</html>