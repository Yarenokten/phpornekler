<html>
    <table border="1"cellpadding="5">
        <?php 
        $gun=1;//baslangic
        for($hafta=1;$hafta<=5;$hafta++){
            echo "<tr>";
            for($g=1;$g<=7;$g++){
                if($gun<=31){
                    echo "<td>$gun</td>";
                    $gun++;
                }
                else{
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</html>