<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head><h2>Desconto</h2>
<body>
    <?php 

    function desconto($a){
        return $a - ($a /100 * 15);
    }
    
    $resultado = desconto(200);
    echo "Resultado do desconto: " .$resultado;
    
    ?>
</body>
</html>