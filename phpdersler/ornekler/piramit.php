<html>
    <table border="1">
        <?php
        for($i=1;$i<=5;$i++){
            echo "<tr>";
            for($j=1;$j<=$i;$j++){//satır sayısı kadar hücre ekleme
                echo "<td style='width:30px; height:30px; background-color:orange;'</td>";

            }
        }echo "</tr>";
        ?>
    </table>
</html>