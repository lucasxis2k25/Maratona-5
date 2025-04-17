<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe produto</title>
</head><h2>Classe produto</h2>
<body>
    <?php 
    $porcentagem = 10;
    class Produto{
        public $nome;
        public $preco;
        public $quantidade;
    
        public function __construct($nome, $preco, $quantidade){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
       
        }
        
        
        public function exibirdetalhes(){
            echo "nome: ". $this->nome;
            echo "<br>Preço: ".  number_format($this->preco, 2, ",", ".");
            echo "<br>Quantidade: ".  $this->quantidade;
        

        }
        public function desconto($porcentagem){
            $this->preco = $this->preco - ($this->preco * $porcentagem / 100);
            echo "<br>Preço com desconto: ". number_format($this->preco, 2, ",", "."); 
        }

        public function __destruct(){
            sleep(1);

          echo "<br> Produto ". $this->nome . " destruido";
    }
}
    
      
        

    
    $produto = new Produto("Computador", 1500.00, 10);
    $produto->exibirdetalhes();
    $produto->desconto($porcentagem);	
    unset($produto);
    

    ?>
</body>
</html>