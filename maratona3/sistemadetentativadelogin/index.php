<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
</head>
<body>
    <h2>Sistema de login</h2>
    <form method="post">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php 
    session_start();

    if (!isset($_SESSION['tentativas'])) {
        $_SESSION['tentativas'] = 3;
    }

    $senha_correta = "1234";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $senha = $_POST['senha'];
        do {
            switch (true) {
                case ($senha == $senha_correta):
                    echo "Acesso concedido";
                    session_destroy();
                    break;
                case ($_SESSION['tentativas'] <= 0):
                    echo "Acesso negado";
                    session_destroy();
                    break 2;
                default:
                    $_SESSION['tentativas'] -- ;
                    echo "Senha incorreta. Tentativas restantes: " . (1 + $_SESSION['tentativas']);
                    break 2;
            }
        } while ($_SESSION['tentativas'] <= 0);
    }
    ?>
</body>
</html>