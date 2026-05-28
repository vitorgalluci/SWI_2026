<?php
   

$numeros = [5, 10, 18, 20, 44];


$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "A soma dos números é: " . $soma;
?>