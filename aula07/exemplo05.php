<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo02 - Tabela</title>
</head>
<body>
    <h1>Tabela</h1>
    <table>
        <tr>
            <th>RM</th>
            <th>NOME</th>
            <th>EMAIL</th>
        </tr>
           
        <?php
            for($i=1; $i <= 2; $i++) {
                echo " <tr>";
                for ($j=1; $j <=3 ; $j++) {
                    echo "<td>Linha $i Coluna $j</td";
                }
            }


         ?>
         <tr>
            <th>Linha 1 Coluna 1</th>
            <th>Linha 1 coluna 2</th>
            <th>Linha 1 coluna 3</th>
        </tr>
        <tr>
            <td>Linha 2 Coluna 1</td>
            <td>Linha 2 Coluna 2</td>
            <td>Linha 2 Coluna 3</td>


             
            <table> 
</body>
</html>