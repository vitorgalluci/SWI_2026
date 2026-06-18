<?php


$temperaturas = [22.5, 24.0, 25.5, 23.0];


function calcularMediaTemperatura($listaDeTemperaturas) {
    
    $soma = array_sum($listaDeTemperaturas);
    
    
    $quantidade = count($listaDeTemperaturas);
    
   
    if ($quantidade === 0) {
        return 0;
    }
    
    return $soma / $quantidade;
}

$mediaFinal = calcularMediaTemperatura($temperaturas);

echo "A média das temperaturas da estufa é: " . $mediaFinal . "°C";

?>