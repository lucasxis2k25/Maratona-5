<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Cliente</title>
</head>
<body>
    <h2>Verificação de cliente</h2>
    
    <form method="post">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php 
    // Session start serve para iniicair a sessão para armazear os números de tentativas
    session_start();
    
    // Verifica se a váriavel $tentativas está definida, se não, inicaliza com 0
    if (!isset($_SESSION['tentativas'])) {
        $_SESSION['tentativas'] = 0;
    }
    //senha correta
    $senha_correta = "1234";

    // Verifica se o formulário foi enviado e armazena a senha correta
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $senha = $_POST['senha'];
        // Loop while que continua enquanto o número de tentativas for menor que 3
        while ($_SESSION['tentativas'] < 3) {
            //Se a senha for digitada corretamente aprarecera a mensagem acesso concedido
            if ($senha == $senha_correta) {
                echo "Acesso concedido";
                session_destroy();
                break;
            } else {
                //se o númeor de tentativas for maior ou igual a 3, aparecerá a mensagem acesso negado
                $_SESSION['tentativas']++;
                if ($_SESSION['tentativas'] >= 3) {
                    echo "Acesso negado";
                    session_destroy();
                    break;
                } else {
                    //Se a senha for digitada incorretamente aparecerá a mensagem senha incorreta
                    echo "Senha incorreta. Tentativas restantes: " . (3 - $_SESSION['tentativas']);
                    break;
                }
            }
        }
    }
    ?>
</body>
</html>