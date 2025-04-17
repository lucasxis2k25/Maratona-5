<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Produto Roupa</title>
</head>
<body>
    <?php 
    /*Crie uma classe chamada ProdutoRoupa com os seguintes atributos:
• nome (String)
• codigoProduto (String)
• preco (Float)
Implemente o modificador de acesso private para o atributo codigoProduto e crie 
métodos get e set para permitir acessar e alterar o código do produto, mas 
somente de forma controlada (por exemplo, o código do produto deve ser 
validado antes de ser alterado). O atributo nome deve ser público e acessado 
diretamente.
Depois, crie um objeto dessa classe e:
1. Tente acessar diretamente o codigoProduto (isso não deve ser possível).
2. Use o método set para alterar o codigoProduto de forma controlada e o 
método get para acessá-lo.
*/

class ProdutoRoupa {
    public $nome;
    private $codigoProduto;
    public $preco;

    public function __construct($nome, $codigoProduto, $preco) {
        $this->nome = $nome;
        $this->codigoProduto = $codigoProduto;
        $this->preco = $preco;
    }

    private function get_CodigoProduto() {
        return $this->codigoProduto; // Retorna o valor
    }

    public function set_CodigoProduto($codigoProduto) {
        $this->codigoProduto = $codigoProduto; // Define o novo valor
    }

    public function mostrarCodigoProduto() {
        echo "Código do produto: " . $this->codigoProduto;
    }
}

$produto = new ProdutoRoupa("Camiseta", "12345", 29.90);

echo "Nome do produto: " . $produto->nome;
echo "<br>";
echo "Preço do produto: R$ " . number_format($produto->preco, 2, ",", "."); // Formatação de preço
echo "<br>";

// $produto->codigoProduto; // Erro: acesso a atributo privado

$produto->set_CodigoProduto("678900"); // Altera o código do produto

$produto->mostrarCodigoProduto(); 

    ?>
</body>
</html>