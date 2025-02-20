<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico 2</title>
</head>
<body>

<h2> class livro </h2>

    <?php 
    
    class Livro {

    public $titulo;
    public $autor;
    public $anodepublicacao;

    public function __construct($titulo, $autor, $anodepublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anodepublicacao = $anodepublicacao;
    }

    public function exibirinformacoes() {
        echo "Titulo: $this->titulo <br>";
        echo "Autor: $this->autor <br>";
        echo "Ano de Publicação: $this->anodepublicacao <br>";
    }
    
}
    
           $livro1 = new Livro("O martelo", "Antonio Marreta", 2024);
           $livro1->exibirinformacoes();

           echo "<br>";
    
           $livro2 = new Livro("O Tempo Dos umbu", "véi da pisadinha", 2025);
           $livro2->exibirinformacoes();

           echo "<br>";

           $livro3 = new Livro("Planeta Dos Macacos", "César", 1999);
           $livro3->exibirinformacoes();
    
    
    
    
    ?>
</body>
</html>