<?php
$vetor =[1,2,3,4,5,6,7,8,9,10];
foreach ($vetor as $chave) {
    if($chave %2 == 0 ){
        echo("$chave é par <br>");
    } else{
        echo("$chave é impar <br>");
    }
}
?>