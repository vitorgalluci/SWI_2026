<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa dados</title>
</head>
<body>
    
    <?php
       $nome = $_GET['nome'];
       $email = $_GET['email'];
       $idade = $_GET['idade'];
       $calculo = 2026 - $idade;
       $ano_atual = date('Y');
      // echo $ano_atual;


       $ano_nasc = $ano_atual - $idade;

         //echo "O nome é: $nome";

    ?>  

<p>O nome digitado é: <?php echo $nome; ?> </p>
<p>O email digitado é: <?php echo $email; ?> </p>
<p>O idade digitado é: <?php echo $idade; ?> </p>
<p>Seu ano de nascimento é: <?php echo $calculo ?><p>


      
</body>
</html>