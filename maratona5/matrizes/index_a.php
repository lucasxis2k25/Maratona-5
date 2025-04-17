<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de matriz</title>
</head><h2>Calculo de matriz</h2>
<body>
    <?php 
    $matriz =[
     [25, 40, 10],
     [6, 19, 20],
     [50, 100, 57]
    ];
    
    //A variavel soma ira marazernar a soma de todos o valores da matriz
    $soma = 0;

    // O primeiro foreach ira percorrer todas as linhas da matriz
    foreach ($matriz as $linha){
        //O segundo foreach ira passar por todos os valores de cada linha da matriz
        foreach ($linha as $valor){
            //E por ultimo a variavel soma ira receber a soma de todos os valores da matriz
            $soma = $soma + $valor;
        }
    }
  
    echo "A soma dos valores da matriz é: ". $soma; 
    
    
    ?>
</body>
</html>