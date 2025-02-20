<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Aluno {
        public $nome;
        public $matricula;
        public $curso;
 
        public function __construct($nome, $matricula, $curso) {
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->curso = $curso;
        }
        public function imprimirInformacoes() {
            echo "Nome: $this->nome <br>";
            echo "Matricula: $this->matricula <br>";
            echo "Curso: $this->curso <br>";
        }
        public function __destruct() {
            echo "Aluno {$this->nome} removido\n";
        }
 
    }
   
    $aluno1 = new Aluno("Cleber", 77890, "Engenharia de Software");
    $aluno1 -> imprimirInformacoes();
    echo "<br>";
 
    unset($aluno1);
 
    ?>
</body>
</html>