<?php
$notas = [8,9,7,9];
$qtde = count($notas);
$total = 0;
for ($i=0; $i <=$qtde -1 ; $i++) { 
    $total = $total + $notas[$i];
}
$media = $total/$qtde;
echo "a media é: $media <br>";
?>