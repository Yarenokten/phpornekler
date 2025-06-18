<?php
include("baglanti.php");
$sql="SELECT * FROM kitaplar";
$sonuc=mysqli_query($cnn,$sql);
?>
<html>
    <head>
        <meta charset="utf-8">
    <title>kitaplar listesi</title>
    </head>
   <body style="text-align:center">
    <h2> kitaplar</h2>
    <table border=2 cellpadding="10" cellspacing="0" style="margin:auto;">
        <tr>
           <th>ID</th>
           <th>kitap adı</th>
           <th>yazar</th>
           <th>yayınevi</th>
           <th>sayfa sayısı</th>
           <th>tür</th>
           <th>butonlar</th>
        </tr>
        <?php while($satir=mysqli_fetch_assoc($sonuc)){//while = Tüm kitapları sırayla ekrana yazmak için.
        //her satırdaki veriyi yazdırmak için tekrar td içine php yazdık
            ?>
            <tr>
                <td><?php echo $satir["id"];?> </td>
                <td><?php echo $satir["kitap_adi"];?> </td>
                <td><?php echo $satir["yazar"];?> </td>
                <td><?php echo $satir["yayinevi"];?> </td>
                <td><?php echo $satir["sayfa_sayisi"];?> </td>
                <td><?php echo $satir["tur"];?> </td>
                 <td>
                <a href="kitapsil.php?id=<?php echo $satir['id'];?>">sil</a>
                <a href="kitapduzenle.php?id=<?php echo $satir['id'];?>">duzenle</a>
            </td>
            </tr><?php 
        }?>
    

    

    </table>
   </body>
</html>