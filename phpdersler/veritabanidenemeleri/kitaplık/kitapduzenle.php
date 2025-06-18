<?php
include("baglanti.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sorgu = "SELECT * FROM kitaplar WHERE id = $id";
    $sonuc = mysqli_query($cnn, $sorgu);
    $kitap = mysqli_fetch_assoc($sonuc);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kitap_adi = $_POST["kitap_adi"];
    $yazar = $_POST["yazar"];
    $yayinevi = $_POST["yayinevi"];
    $sayfa_sayisi = $_POST["sayfa_sayisi"];
    $tur = $_POST["tur"];

    $guncelle = "UPDATE kitaplar SET 
        kitap_adi='$kitap_adi',
        yazar='$yazar',
        yayinevi='$yayinevi',
        sayfa_sayisi='$sayfa_sayisi',
        tur='$tur'
        WHERE id=$id";

    if (mysqli_query($cnn, $guncelle)) {
        header("Location: kitaplistele.php?durum=guncellendi");
        exit;
    } else {
        echo "Güncelleme hatası: " . mysqli_error($cnn);
    }
}
?>
<html>
    <body>
        <form action="" method="post">
            <label>Kitap Adı:</label><br>
            <input type="text" name="kitap_adi" value="<?php echo $kitap['kitap_adi']; ?>"><br>

            <label>Yazar Adı:</label><br>
            <input type="text" name="yazar" value="<?php echo $kitap['yazar']; ?>"><br>

            <label>Yayınevi:</label><br>
            <input type="text" name="yayinevi" value="<?php echo $kitap['yayinevi']; ?>"><br>

            <label>Sayfa Sayısı:</label><br>
            <input type="text" name="sayfa_sayisi" value="<?php echo $kitap['sayfa_sayisi']; ?>"><br>

            <label>Tür:</label><br>
            <input type="text" name="tur" value="<?php echo $kitap['tur']; ?>"><br><br>

            <input type="submit" value="Güncelle">
        </form>
    </body>
</html>
