<h2>Impressão de dados de usuário</h2>
    <!DOCTYPE html>
<html>
<head>
<body>

<form method="post">
    <input type="letters" name="lett1" required placeholder=" Digite Seu nome ">
    <input type="letters" name="lett2" required placeholder=" Quantos Anos você tem ? ">
    <input type="letters" name="lett3" required placeholder=" Aonde você mora ? ">
    <input type="submit" name="Imprimir dados" value="Imprimir">
    
    <h2> 
    <?php 

    if (isset($_POST["imprimir"]))

    $lett1 = $_POST["lett1"];
    $lett2 = $_POST["lett2"];
    $lett3 = $_POST["lett3"];
    $operacao = $_POST["operacao"];
    $resultado = "";

    echo $resultado;

    ?>
    </h2>
   