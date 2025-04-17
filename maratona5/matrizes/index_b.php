<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz 5x5 </title>
</head>
<body>
    <?php 
    /*Crie uma matriz de 5x5 e preencha seus elementos com números inteiros 
aleatórios entre 1 e 50. Em seguida, escreva um script PHP que percorra a matriz e 
encontre o maior número presente nela. Após isso, imprima o maior número 
encontrado e sua posição na matriz (linha e coluna).*/

// Criando a matriz 5x5 manualmente
$matriz = array(
  [12, 34, 5, 23, 45],
  [6, 7, 9, 10, 11],
  [13, 14, 15, 16, 17],
  [18, 50, 20, 21, 22],
  [23, 24, 25, 26, 27]
);

// Exibindo a matriz
echo "Matriz 5x5: ";
echo "<br>";
for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < 5; $j++) {
    printf("%3d", $matriz[$i][$j]); // Formatação para melhor visualização
  }
  echo "<br>";
}

// Encontrando o maior número e sua posição
$maiorNumero = $matriz[0][0]; // Inicializa com o primeiro elemento
$linhaMaior = 0;
$colunaMaior = 0;

for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < 5; $j++) {
    if ($matriz[$i][$j] > $maiorNumero) {
      $maiorNumero = $matriz[$i][$j];
      $linhaMaior = $i;
      $colunaMaior = $j;
    }
  }
}

// Imprimindo o resultado
echo "Maior número encontrado: " . $maiorNumero;
echo "<br>";
echo "Posição: Linha " . ($linhaMaior + 1) . ", Coluna " . ($colunaMaior + 1) . "\n";

    ?>
</body>
</html>