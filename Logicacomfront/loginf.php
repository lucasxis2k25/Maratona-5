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
    <form action="login.php" method="POST">
        <H1 class="titulo" id="lg">Login de usuário</H1>
        <div class="lg">
            <label for="usuario">Nome de Usuário:</label>
            <input type="text" name="usuario" required>
            <br><br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
            <br><br>
            <input type="reset" value="Limpar"/>
            <input type="submit" value="Enviar"/>
        </div>
    </form>
</center>
    
</body>
</html>