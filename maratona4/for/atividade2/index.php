<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     //Exercicio 2 - For
    echo "<br>Calcular média<br>";
    $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    // Count serve para contar o número de elementos que foram inseridos dentro de um array
    $count = count($array);
 
    for ($i = 0; $i < 1; $i++) {
        // array_sum é usado para somar todos os números em um array
        $média =  array_sum($array) / count($array);
        echo "A média desses números é: $média";
        echo "<pre>";
        print_r($array);
    }
    
    ?>
</body>
</html>