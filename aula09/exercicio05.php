<?php
$cores = ["Vermelho", "Azul", "Verde"];

array_push($cores, "Amarelo");

array_shift($cores);
foreach ($cores as $key) {
    echo "$key <br>";
}
?>