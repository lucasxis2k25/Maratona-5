<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de imposto</title>
</head>
<h2>Calculo de imposto</h2>
<body>
    <?php 
    $valor_original = 500;
    $desconto = 0;
    $imposto = $valor_original * 0.8;

    if ($valor_original >= 500){
        $desconto = $valor_original * 0.10;
    }
    $valor_final = ($valor_original - $desconto) + $imposto;

    echo "Valor original: R$" . $valor_original . "<br>";
    echo "Desconto: R$" . $desconto . "<br>";
    echo "Imposto: R$" . $imposto . "<br>";
    echo "Valor final: R$" . $valor_final . "<br>";

    
    ?>
</body>
</html>