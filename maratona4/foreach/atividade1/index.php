<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peças de carro</title>
</head><h2>Peças de carro</h2>
<body>
    <?php 
    $peças = array("motor", "transmissão", "freios", "radiador", "alternador", "bateria", "armotecedores", "pneus", "velas de ignição", "catalisador");

    foreach ($peças as $peça){
        echo $peça . "<br>";
    }

    
    
    
    ?>
</body>
</html>