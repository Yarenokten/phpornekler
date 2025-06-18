<html>
    <table>
        <?php
        $sayi=1;
        for($i=0;$i<10;$i++){
            echo "<tr>";
            for($j=0;$j<10;$j++){
                echo "<td style='width:30px;height:30px;'>$sayi</td>";
                $sayi++;
            }
            echo "</tr>";
        }
        
        
        ?>
    </table>
</html>