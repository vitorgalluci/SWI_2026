
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>

    <style>
        table{

            margin: 20px auto;
            text-align: center;

        }

        td{
            border: 1px solid black;
            padding: 10px;
        }

        .par{
            background-color: #d9edf7;
        }

        .impar{
            background-color: #f2dede;
        }
    </style>
</head>
<body>

<h2 align="center">Exercício 1 - Tabela com cores alternadas</h2>

<table>

<?php

for($linha = 1; $linha <= 8; $linha++){

    if($linha % 2 == 0){
        $classe = "par";
    }else{
        $classe = "impar";
    }

    echo "<tr class='$classe'>";

    for($coluna = 1; $coluna <= 4; $coluna++){
        echo "<td> Linha $linha Coluna $coluna</td>";
    }

    echo "</tr>";
}

?>

</table>

</body>
</html>