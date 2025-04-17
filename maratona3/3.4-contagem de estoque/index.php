<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contagem de estoque</title>
</head>
<body>
    <h2>contagem de estoque</h2>
    <?php 
     $estoque = 100;

     while ($estoque > 0) {
        
        $estoque--;
        echo "unidade vendida<br>";
        echo "unidades restantes no estoque: $estoque <br>";
     }
       echo "estoque zerado.";
    ?>
</body>
</html>