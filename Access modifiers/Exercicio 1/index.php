<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2> class ContaCorrente </h2>

    <?php



    class ContaCorrente {
    public $numeroConta;
    private $saldo;
 
    public function setnumeroConta($numeroConta) {
        $this->numeroConta = $numeroConta;
    }
 
    private function setsaldo($saldo) {
        $this->numeroConta = $saldo;
    }
 
    public function getNumeroConta() {
        return $this->numeroConta;
    }
 
    public function getSaldo() {
        return $this->saldo;
    }
 
    public function depositar($valor) {
        $this->saldo += $valor;
    }
 
 
}
 
    $conta = new ContaCorrente();
    $conta->setnumeroConta(12345);
    //$conta->setsaldo(1000);
    $conta->depositar(500);
   
    echo "Número da conta: " . $conta->getNumeroConta() . "<br>";
    echo "Saldo: " . $conta->getSaldo() . "<br>";
   ?>
</body>
</html>