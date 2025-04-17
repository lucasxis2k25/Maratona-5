<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Aluno</title>
</head>
<body>
    <?php 
/*Crie uma classe chamada Aluno que tenha os seguintes atributos:
• nome (String)
• matricula (Inteiro)
• curso (String)
Implemente um construtor que inicializa os atributos e um destruidor que imprime 
uma mensagem dizendo "Aluno [nome] removido". Em seguida, crie um objeto 
dessa classe e destrua o objeto no final, verificando a mensagem de destruição.*/
    class Aluno {
        public $nome;
        public $matricula;
        public $curso;

        //Construtor
        public function __construct($nome, $matricula, $curso) {
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->curso = $curso;
            echo "Aluno " . $this->nome . " criado com sucesso.";
        }
        //Destrutor
        public function __destruct() {
            echo "Aluno " . $this->nome . " removido.";
        }
        //Método para exibir informações do aluno
        public function exibirInformacoes() {
            echo "O aluno " . $this->nome . " tem a matrícula " . $this->matricula . " e está cursando " . $this->curso . ".";
        }
    }

    //Criando um objeto da classe Aluno
    $aluno1 = new Aluno("Lucas", 123456, "Engenharia da Computação");
    echo "<br>";
    $aluno1->exibirInformacoes();
    echo "<br>";
    unset($aluno1);
    echo "<br>" . "<br>";
    
    $aluno2 = new Aluno("Kauan", 654321, "Ciência da Computação");
    echo "<br>";
    $aluno2->exibirInformacoes();
    echo "<br>";
    unset($aluno2);


    ?>
</body>
</html>