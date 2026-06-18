<?php


function classificarAluno($nota) {
    if ($nota >= 7) {
        return "Aprovado";
    } elseif ($nota >= 5 && $nota < 7) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }
}


$notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];


$totalAprovados = 0;
$totalRecuperacao = 0;
$totalReprovados = 0;
$somaNotas = 0;

echo "Resultados Individuais <br>";


foreach ($notas as $index => $nota) {
    
    $situacao = classificarAluno($nota);
    
    
    echo "Aluno " . ($index + 1) . ": Nota = " . $nota . " -> " . $situacao . "<br>";
    
    
    $somaNotas += $nota;
    
    if ($situacao === "Aprovado") {
        $totalAprovados++;
    } elseif ($situacao === "Recuperação") {
        $totalRecuperacao++;
    } else {
        $totalReprovados++;
    }
}
$totalAlunos = count($notas);
$mediaTurma = $somaNotas / $totalAlunos;

echo "Resumo da turma: <br>";
echo "Aprovados: " . $totalAprovados . "<br>";
echo "Recuperação: " . $totalRecuperacao . "<br>";
echo "Reprovados: " . $totalReprovados . "<br>";
echo "Média da turma: " . number_format($mediaTurma, 2) . "<br>"; // Formata para 2 casas decimais

echo "<br>";


if ($mediaTurma >= 7) {
    echo "<strong>Turma com bom desempenho!</strong>";
} else {
    echo "<strong>Turma precisa melhorar.</strong>";
}



?>