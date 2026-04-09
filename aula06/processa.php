<?php 
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //email: adm@gmail.com
    //senha: 1234
    

    if ($email == 'vitaogalludo@gmail.com' && $senha == '02092009') {
        //vamos para a área restrita
        //echo 'vamos para a área restrita';
        $nome = "Vitao";

        header('Location: escondida.php ?nome='.$nome);
    } else {
        //volta para o forms
        //echo 'volta para o forms';
        header('Location: erro.php');
    }
    
?>
    