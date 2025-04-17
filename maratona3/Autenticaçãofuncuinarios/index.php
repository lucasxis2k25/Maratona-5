<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação de Funcionarios</title>
</head>
<body>
    <?php 
    $funcionario = "João";
    $admin = false;
    $administrativos = false;
    $ativo = true;
    $permissão = false;

    switch (true){
        case ($funcionario == "João" && $admin == true && $ativo == true):
         echo "Acesso como admin";
        break;
        case ($funcionario == "João" && $administrativos == true && $ativo == true):
         echo "Acesso como administrativo";
         break;
         case ($funcionario == "João" && $permissão == true && $ativo == true):
            echo "Acesso como funcionário";
            break;
            default:
            echo "Login incorreto e/ou sem permissão";
    }


    
    
    
    ?>
</body>
</html>