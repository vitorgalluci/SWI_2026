<?php

$numeros = [42, 54, 19, 8, 29, 12];


sort($numeros);

echo "Ordem crescente: <br>";
foreach ($numeros as $key) {
    echo"$key <br>";
}

echo "<hr>";


rsort($numeros);

echo "Ordem decrescente: <br>";
foreach ($numeros as $key) {
    echo"$key <br>";
}
?>