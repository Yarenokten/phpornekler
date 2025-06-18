<?php
session_start();
include "baglanti.php";
$sql = "SELECT *FROM kitaplar ";
$sonuc = mysqli_query($cnn, $sql);

?>


<html>

<head>
    <title>
        kitap listeleme sayfası
    </title>
    <style>
        .divortalama {
            display: flex;
            justify-content: center;
            /* yatayda ortalar */
            align-items: center;
            /* dikeyde ortalar */
            height: 100vh;
            /* sayfayı tam kapla */
        }

        table {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        table td,
        table th {
            padding: 10px;
            border: 1px solid #000;
        }
    </style>
</head>

<body>

    <div class="divortalama">
        <table border=2>
            <tr>
                <th>kitap adı</th>
                <th>yazar adı</th>
                <th>sayfa sayısı</th>
            </tr>
            <?php while ($satir = mysqli_fetch_assoc($sonuc)) { ?>
                <tr>
                    <td><?php echo $satir['kitapadi']; ?></td>
                    <td><?php echo $satir['yazaradi']; ?></td>
                    <td><?php echo $satir['sayfasayisi']; ?></td>
                    <td>
                        <a href="kitapsil.php?kitap_id=<?php echo $satir["kitap_id"]; ?>">Sil</a>
                       <a href="duzenle.php?kitap_id=<?php echo $satir["kitap_id"];?>">duzenle</a>
                    </td>
                </tr>
            <?php } ?>


        </table>
    </div>
</body>

</html>