<?php
echo "<h1> ders uygulaması </h1>";
echo "<hr>";
echo "<ul>";
echo "<li> ders1: kurulum </li>";
echo "<li> ders2:değişkenler </li>";
echo "</ul>";
?>
<!doctype html>
<html>
    <body>
        <table border=2>
        <tr>
            <td>
                öğrenci numarası
            </td>
            <td>
                ad soyad
            </td>
        </tr>
        <tr>
            <td>
                2023403405
            </td>
            <td>
                yakup kutlu
            </td>
        </tr>
        <tr>
            <td>
                202304567
            </td>
            <td>
                ahmet gökcen
            </td>
        </tr>
        <tr>
            <td>2020302293</td>
            <td>ahmet burak kutlu</td>
        </tr>
        <tr>
            <td>202304838</td>
            <td>sertan alkan</td>
        </tr>
        
        </table>
    </body>
</html>
<table border=2>
    <tr>
            <td>
                öğrenci numarası
            </td>
            <td>
                ad soyad
            </td>
        </tr>
        <?php
for($i=0;$i<10;$i++){
    echo "<tr> <td>2023403405</td> <td>yakup kutlu</td> </tr>";
}
?>
</table>

