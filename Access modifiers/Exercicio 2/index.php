<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>

<h2> function </h2>

<?php

class ProdutoRoupa {
    public $nome;
    public $preco;
    private $codigoProduto;

    public function __construct($nome, $preco, $codigoProduto) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->codigoProduto = $codigoProduto;
    }

    private function gerarCodigoProduto() {
        return $this->nome . $this->preco;
    }

    public function imprimirInformacoes() {
        $this->codigoProduto = $this->gerarCodigoProduto();
        echo "Código do Produto: $this->codigoProduto <br>";
        echo "Nome:  $this->nome <br>";
        echo "Preço: R$ $this->preco <br>";
    }
}

$produto = new ProdutoRoupa("Camisa ", 130 , "");
$produto->imprimirInformacoes();

?>

</body>
</html>