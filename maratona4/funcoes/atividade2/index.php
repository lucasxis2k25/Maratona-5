<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos</title>
</head>
<body>
    <?php 
    
    function ehPrimo($numero) {
        // Caso o número for menor ou igual 1 ele ira dar false já que não existe numeros menores ou iguais a 1 primos
        if ($numero <= 1) {
            return false;
        }
        // Caso o número for igual a 2 ele ira dar true porque 2 é um número primo
        if ($numero == 2) {
            return true;
        }
        // Caso o número for divisivel por 2 ele irá dar false 
        if ($numero % 2 == 0) {
            return false;
        }
        // o número irá ser dividido várias vezes aé chegar a raiz quadrada do número escolhido até chegar a sua raiz quadrada. Caso ele não ache nenhum número divisivel até chegar a raiz quadrada ira dar true, caso contrario ira dar false
        for ($i = 3; $i <= sqrt($numero); $i += 2) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
    // OBS: números primos são aqueles que são apenas divisiveis por eles mesmos (divisivel significa que ao fazer a divisão por número x não ira sobrar nada).
    
    // Testando a função
    $numero = 11;
    if (ehPrimo($numero)) {
        echo "$numero é um número primo.";
    } else {
        echo "$numero não é um número primo.";
    }
    ?>
</body>
</html>