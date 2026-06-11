<?php

function calcularAutonomia($capacidadeBateria, $consumoPorMinuto) {
    return $capacidadeBateria / $consumoPorMinuto;
}

$tempoVoo = calcularAutonomia(1200, 40);

echo "Tempo estimado de voo: $tempoVoo minutos.";

?>