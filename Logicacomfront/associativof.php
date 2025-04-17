<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associativo</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="petshop">
 
 
   
   <form action="associativo.php" method="POST">
 
 
    <center>
    <div>
 
    <h1>PET-SHOP</h1>
    </div>
    </center>
 
    <br>
   
 
    <center>
 
    <!-- Nome do animal -->
    <div class="pt">
    <h3>Informações do seu pet</h3>
        <label>Nome:</label>
        <input type="text" name="nome" required>
  
 
    <br>
 
    <!-- idade do animal -->
    
        <label for="idade">Idade:</label>
        <input type="number" name="idade" required>
   
 
    <br>
 
    <!-- cor do animal -->
 
    
    <label for="cor">cor:</label>
    <input type="text" name="cor"required>
    
 
    <br>
   
    <!-- peso do animal -->
    
        <label for="peso">Peso:</label>
        <input type="" name="peso" required><br>
    </div>
 
    <br>
 
    <!-- foto do animal -->
 
    <div class="foto-do-animal">
 
  <!-- limpando/resetando o formulario -->
    <input type="reset" valve="limpar"/>
 
     <!-- submit botão -->
    <input type="submit" value="Enviar"/>
    </center>
 
    </form>
 
 
</body>
</html>