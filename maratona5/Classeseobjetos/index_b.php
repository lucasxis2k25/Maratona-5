<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe de Livro</title>
</head>
<body>
    <?php 
    class Livro {
        public $titulo;
        public $autor;
        public $anoPublicado;

        public function exibirInformacoes() {
            echo "O livro " . $this->titulo . " foi escrito por " . $this->autor . " e publicado em " . $this->anoPublicado . ".";
        }
    }

    $livro1 = new Livro();
    $livro1->titulo = "'O Poder do Agora'";
    $livro1->autor = "Eckhart Tolle";
    $livro1->anoPublicado = 1997;

    $livro1->exibirInformacoes();

    echo "<br>";

    $livro2 = new Livro();
    $livro2->titulo = "'Biblia Sagrada'";
    $livro2->autor = "Deus";
    $livro2->anoPublicado = 0;

    $livro2->exibirInformacoes();

    echo "<br>";

    $livro3 = new Livro(); 
    $livro3->titulo = "'O Poder do Subconsciente'";
    $livro3->autor = "Joseph Murphy";   
    $livro3->anoPublicado = 1963;

    $livro3->exibirInformacoes();

    ?>
</body>
</html>