<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Selecione a imagem para carregar:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <button type="submit" name="submit">Carregar Imagem</button>
</form>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Verifica se o arquivo é uma imagem real
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "O arquivo é uma imagem - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "O arquivo não é uma imagem.";
        $uploadOk = 0;
    }
}

// Verifica se o arquivo já existe
if (file_exists($target_file)) {
    echo "Desculpe, o arquivo já existe.";
    $uploadOk = 0;
}

// Verifica o tamanho do arquivo
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Desculpe, o arquivo é muito grande.";
    $uploadOk = 0;
}

// Permite certos formatos de arquivo
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
    $uploadOk = 0;
}

// Verifica se $uploadOk está definido como 0 por algum erro
if ($uploadOk == 0) {
    echo "Desculpe, seu arquivo não foi carregado.";
// Se tudo estiver ok, tenta fazer o upload do arquivo
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "O arquivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi carregado.";
    } else {
        echo "Desculpe, houve um erro ao carregar seu arquivo.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página com Imagem Carregada</title>
</head>
<body>
    <h1>Imagem Carregada</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selecione a imagem para carregar:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="submit" name="submit">Carregar Imagem</button>
    </form>

    <?php
    if (isset($_FILES["fileToUpload"])) {
        $imagePath = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
        echo "<img src='$imagePath' alt='Imagem carregada via PHP'>";
    }
    ?>
</body>
</html>

</body>
</html>