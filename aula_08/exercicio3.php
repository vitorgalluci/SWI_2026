
    <?php
   $produtos_tabela = [
    ["nome" => "Presunto", "preco" => "R$ 15", "categoria" => "Frios"],
    ["nome" => "Queijo", "preco" => "R$ 5", "categoria" => "Frios"],
    ["nome" => "Lombo", "preco" => "R$ 4", "categoria" => "Frios"],
    
    ["nome" => "Fandangos", "preco" => "R$ 25", "categoria" => "Salgadinhos"],
    ["nome" => "Doritos", "preco" => "R$ 15", "categoria" => "Salgadinhos"],
    ["nome" => "Ruffles", "preco" => "R$ 29", "categoria" => "Salgadinhos"],
    
    ["nome" => "Fanta uva", "preco" => "R$ 15", "categoria" => "Refrigerantes"],
    ["nome" => "Coca cola", "preco" => "R$ 19", "categoria" => "Refrigerantes"],
    ["nome" => "Guarana antartica", "preco" => "R$ 4", "categoria" => "Refrigerantes"]
];
    $cores = [
        "Frios" => "#a2d2ff",
        "Salgadinhos" => "#FFDE21",
        "Refrigerantes" => "#FF2C2C"
    ];

    echo "<table border>";
    
    echo "</table>";

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <style>
        table {
            text-align: center;

        }
        th, td {
            border: 1px solid #858585;
            padding: 5px;
        }
        th {
            background-color: #e07070;
            color: white;
        }
    </style>
</head>
<body>
    <h1>tabela com os produtos</h1>
    <table>
        <tr>
            <th>Nome dos Produtos</th>
            <th>Preços</th>
            <th>Categorias</th>
        </tr>
    <?php
    foreach ($produtos_tabela as $produto) {
        $categoria_nova = $produto['categoria'];

        $cor_da_linha = $cores[$categoria_nova];

        echo "<tr style='background-color: {$cor_da_linha};'>";

        echo "<td>" . $produto['nome'] . "</td>";
        echo "<td>" . $produto['preco'] . "</td>";
        echo "<td>" . $categoria_nova . "</td>";

        echo "</tr>";
    }
    ?>
    </table>
</bodyRefrigerantes