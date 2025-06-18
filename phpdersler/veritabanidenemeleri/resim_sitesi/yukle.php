<?php
session_start();
include("baglanti.php");

// Oturum kontrolü - admin değilse anasayfaya yönlendir
if (!isset($_SESSION["kullanici_id"]) || $_SESSION["yetki"] != "admin") {
    header("Location: anasayfa.php");
    exit;
}

$hata = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["resim"]) && $_FILES["resim"]["error"] == 0) {
        $izinli_uzantilari = ["jpg", "jpeg", "png", "gif"];
        $dosya_adi = $_FILES["resim"]["name"];
        $dosya_tmp = $_FILES["resim"]["tmp_name"];
        $uzanti = strtolower(pathinfo($dosya_adi, PATHINFO_EXTENSION));

        if (in_array($uzanti, $izinli_uzantilari)) {
            $yeni_dosya_adi = uniqid() . "." . $uzanti;
            $hedef_klasor = "uploads/" . $yeni_dosya_adi;

            if (move_uploaded_file($dosya_tmp, $hedef_klasor)) {
                // Resim bilgilerini veritabanına kaydet
                $kullanici_id = $_SESSION["kullanici_id"];
                $sorgu = "INSERT INTO resimler (yukleyen_id, dosya_adi, yuklenme_tarihi) VALUES ('$kullanici_id', '$yeni_dosya_adi', NOW())";
                mysqli_query($link, $sorgu);
                echo "<p>Resim başarıyla yüklendi!</p>";
            } else {
                $hata = "Dosya yüklenirken hata oluştu.";
            }
        } else {
            $hata = "Sadece JPG, JPEG, PNG ve GIF dosyaları yüklenebilir.";
        }
    } else {
        $hata = "Dosya seçilmedi veya yükleme hatası var.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resim Yükle</title>
</head>
<body>
    <h2>Resim Yükle</h2>
    <?php if ($hata): ?>
        <p style="color:red;"><?= $hata ?></p>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="resim" required>
        <button type="submit">Yükle</button>
    </form>
    <p><a href="anasayfa.php">Anasayfaya Dön</a></p>
</body>
</html>
