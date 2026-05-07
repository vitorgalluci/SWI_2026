 <?php
        $tabela_linha = $_GET['linha_tabel'];
        $tabela_coluna = $_GET['coluna_tabel'];
        $i = 1;


        echo "<table>";

        while ($i <= $tabela_linha) {
            echo "<tr>";

            $j = 1;

            while ($j <= $tabela_coluna) {
                echo "<td> linha $i coluna $j </td>";
                $j++;
            }

            echo "</tr>";
            $i++;  
        }

        
        echo "</table>";

    ?>