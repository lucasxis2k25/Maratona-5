<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
</head><h2>Petshop</h2>
<body>
    <?php 
 $associativo = [
    "Nome" => "Thor",
    "Idade" => 8,
    "Dono" => "Zeus"
];

foreach ($associativo as $nome => $idade) {
    echo "<br>";
    echo "$nome é: ";
    echo ($idade);
   
};
    
    
    
    
    ?>
</body>
</html>