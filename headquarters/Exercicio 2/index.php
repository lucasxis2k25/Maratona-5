<?php
$matriz = array_map(function() {
    return array_map(function() { return rand(1, 50); }, range(1, 5));
}, range(1, 5));
 
// Inicializar variáveis para o maior número e sua posição
$maiorNumero = $matriz[0][0];
$linhaMaior = 0;
$colunaMaior = 0;
 
// Encontrar o maior número e sua posição na matriz
foreach ($matriz as $i => $linha) {
    foreach ($linha as $j => $numero) {
        if ($numero > $maiorNumero) {
            $maiorNumero = $numero;
            $linhaMaior = $i;
            $colunaMaior = $j;
        }
    }
}
 
// Imprimir o maior número e sua posição
echo "O maior número encontrado é $maiorNumero na posição (linha $linhaMaior, coluna $colunaMaior).";
?>