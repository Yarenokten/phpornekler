<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 40px;
            height: 40px;
        }
        .red {
            background-color: red;
        }
        .blue {
            background-color: lightblue;
        }
    </style>
</head>
<body>

<table border="1">
<?php
for ($i = 0; $i < 8; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 8; $j++) {
        // Hücrenin rengi satır + sütun toplamının çift/tek olmasına göre belirlenir
        $renk = (($i + $j) % 2 == 0) ? "red" : "blue";
        echo "<td class='$renk'></td>";
    }
    echo "</tr>";
}
/*($i + $j) % 2 == 0 ifadesi, satranç tahtasındaki renk sırasını belirlemek için kullanılır.

Çift sayı olduğunda kırmızı (red), tek sayı olduğunda mavi (blue) olarak sınıflandırılır.

Her hücre (<td>) belirli bir class alır ve bu sınıf CSS ile renklendirilir. */
?>
</table>

</body>
 
</html>
