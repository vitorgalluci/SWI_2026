 <?php


function verificarAcesso($senhaDigitada) {
    if ($senhaDigitada === "123456") {
        return "Acesso Liberado";
    } else {
        return "Acesso Negado";
    }
}

echo "Teste 1 (Senha: 123456): " . verificarAcesso("123456") . "<br>";


echo "Teste 2 (Senha: abcdef): " . verificarAcesso("abcdef") . "<br>";




?>
 





