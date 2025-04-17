<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>pedidos da loja online</h2>
    <?php 
    $pedidos = 0;

    echo "pedidos: <br>";

    do {
        $pedidos++;
        echo "pedido de numero $pedidos esta sendo processado <br>";
        
    } while ($pedidos < 50);
        
    
    echo "nao temos pedidos pendentes";

    ?>
</body>
</html>