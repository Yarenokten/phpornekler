<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Renkli Üçgen</title>
    </head>
    <body>
        <table border="1" cellspacing="0" cellpadding="0">
            <?php
            for ($i = 0; $i < 8; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= $i; $j++) {
                    if (
                        ($i == 0 && $j == 0) ||     // sol üst
                        ($i == 7 && $j == 0) ||     // sol alt
                        ($i == 7 && $j == 7)        // sağ alt
                    ) {
                        $renk = "red";
                    } else {
                        $renk = "blue";
                    }
                    echo "<td style='width:40px; height:40px; background-color:$renk;'></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
