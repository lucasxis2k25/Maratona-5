<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Carro</title>
</head>
<body>

<h2> class carro </h2>

<?php 

//classe
class Carro { 

    public $modelo;
    public $ano;
    public $cor;
    public $preco;
 
    //função construtora
    public function __construct($modelo, $ano, $cor, $preco) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->preco = $preco;
    }
    //função imprimir
    public function imprimirinformacoes() {
        echo "Modelo: $this->modelo <br>";
        echo "Ano: $this->ano <br>";
        echo "Cor: $this->cor <br>";
        echo "Preço: " . number_format($this->preco, 2, ',', '.') . " <br>";//formatação de preço
    }
    
}
//instanciando a classe
$meucarro = new Carro("bugatti", 2022, "preto", 50000.00);
$meucarro->imprimirinformacoes();

?>
</body>
</html>