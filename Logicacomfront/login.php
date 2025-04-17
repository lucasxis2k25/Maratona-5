<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="login">
<center>
<div class="lg">
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = htmlspecialchars($_POST["usuario"]);
    $senha = htmlspecialchars($_POST["senha"]);
}
if ($usuario == "felicissimo" && $senha == "2710") {
    echo "<h2>Seja bem vindo " . $usuario. "<h2>";

} if ($usuario != "felicissimo" || $senha != "2710") {
    echo "<h2>Usuário ou senha está incorreta";

}
?>   
</div>
</center>
</body>
</html>