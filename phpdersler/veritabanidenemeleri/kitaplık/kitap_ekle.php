<?php
$mesaj = "";

include("baglanti.php");

if (isset($_POST["kitap_adi"]) && isset($_POST["yazar"]) && isset($_POST["yayinevi"]) && isset($_POST["sayfa_sayisi"]) && isset($_POST["tur"])) {

    // Formdan gelen değerleri değişkenlere aktar
    $kitapname = $_POST["kitap_adi"];
    $yazar = $_POST["yazar"];
    $yayinevi = $_POST["yayinevi"];
    $sayfa_sayisi = $_POST["sayfa_sayisi"];
    $tur = $_POST["tur"];

    // SQL sorgusu (sayfa_sayisi sayı olduğu için tırnak kullanmadım)
    $sql = "INSERT INTO kitaplar (kitap_adi, yazar, yayinevi, sayfa_sayisi, tur) 
            VALUES ('$kitapname', '$yazar', '$yayinevi', $sayfa_sayisi, '$tur')";

    if (mysqli_query($cnn, $sql)) {
       
        $mesaj = "Kayıt başarıyla eklendi.";
         header("Location: kitaplistele.php"); 
         exit;
    } else {
        $mesaj = "Hata: " . mysqli_error($cnn);
    }
}
?>
<html>
<head>
    <title>Kitap Ekleme Formu</title>
</head>
<body>
    <form action="" method="post" style="text-align:center">
        <label for="kitapname">Kitap adı:</label><br>
        <input type="text" name="kitap_adi" id="kitapID"><br>
        <label for="yazarname">Yazar adı:</label><br>
        <input type="text" name="yazar" id="yazar"><br>
        <label for="yayinevi">Yayınevi:</label><br>
        <input type="text" name="yayinevi" id="yayinevi"><br>
        <label for="sayfa_sayisi">Sayfa sayısı:</label><br>
        <input type="text" name="sayfa_sayisi" id="sayfa_sayisi"><br>
        <label for="tur">Tür:</label><br>
        <input type="text" name="tur" id="tur"><br><br>
        <input type="submit" value="Kitap Ekle" ><br><br>

        <?php if ($mesaj != ""): ?>
            <p style="color: green;"><?php echo $mesaj; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
