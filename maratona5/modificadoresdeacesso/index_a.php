<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta corrente</title>
</head><h2>Conta corrente</h2>
<body>
    <?php 
    class ContaCorrente{
        public $numeroconta;
        private $saldo;

        function set_name($numeroconta){
            $this->numeroconta = $numeroconta;

        }
        public function get_name(){
            return $this->numeroconta;
        }
        function set_saldo($saldo){
            $this->saldo = $saldo;
        }
        private function set ($saldo){
            $this->saldo = $saldo;
        }
        private function get_saldo(){
            return $this->saldo;
        }
        public function exibir_saldo(){
            echo "<br>Saldo: ". number_format($this->get_saldo(), 2, ",", ".");
    }
    public function alteração_saldo($valor){
        $this->saldo = $this->saldo + $valor;
        echo "<br>Saldo após alteração: ". number_format($this->get_saldo(), 2, ",", ".");
    }
}
    
    $conta = new ContaCorrente();
    $conta->set_name("123456");
    echo "Numero da conta: ". $conta->get_name();
    $conta->set_saldo(1000);
    $conta->exibir_saldo();
    $conta->alteração_saldo(500); //Não ira mudar nada pois o saldo é privado
    $valor = 750;
    $conta->alteração_saldo($valor);
    
    
    

    
    
    
    ?>
</body>
</html>