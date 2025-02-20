<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matriz</title>
</head>
<body>
<h2> matriz </h2>

    <?php 
    

   
$matriz = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
]; 

$soma_total = 0;



foreach ($matriz as $linha) {
    foreach ($linha as $elemento) 
        $soma_total += $elemento;    
  }

echo "A soma dos elementos da matriz é: $soma_total";
    
    
    
    ?>
</body>
</html>