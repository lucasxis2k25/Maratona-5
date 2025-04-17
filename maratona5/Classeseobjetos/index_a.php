<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe carro</title>
</head><h2>Classe carro</h2>
<body>
    <?php 
    class Carro{
        public $modelo;
        public $ano;
        public $cor;
        public $preco;


        public function exibirinformacoes(){
            echo "Modelo: ". $this->modelo . "<br>";
            echo "Ano: ". $this->ano . "<br>";
            echo "Cor: ". $this->cor . "<br>";
            echo "Preço: ". number_format($this->preco, 2, ",", ".") . "<br>";
        }

    }

    $carro = new Carro();
    $carro->modelo = "Fiat Uno";
    $carro->ano = 2014;
    $carro->cor = "Branco";
    $carro->preco = 47990.00;

    $carro->exibirinformacoes();
    

    
    
    
    ?>
</body>
</html>