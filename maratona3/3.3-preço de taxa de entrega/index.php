<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>preço com taxa de entrega</h2>
    <?php 
    $preço = 2000;
    $entrega = 15 / 100;
    $desconto = 20 / 100;
    $final =  ($preço + ($preço * $entrega)) - (($preço + ($preço * $entrega)) * $desconto);

    echo "o preço final da sua compra é $final.";
    ?>
</body>
</html>