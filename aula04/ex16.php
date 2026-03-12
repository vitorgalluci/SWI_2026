<?php
    echo"teste 16 <br>";
    $a = 5;
    $b = 10;
    $r = (($a<=$b) XOR (2*$a==$b));
    if ($r){
        echo "Resultado = Verdadeiro";

    }else {
        echo "Resultado = Falso";
    }
?>