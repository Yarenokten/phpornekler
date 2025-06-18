<?php
session_start();
include "baglanti.php";

// Giriş yapılmamışsa yönlendir
if (!isset($_SESSION["kullanici_id"])) {
    header("Location: giris.php");
    exit;
}

$id = $_SESSION["kullanici_id"];

// Veritabanından kullanıcıyı çek
$sorgu = mysqli_query($link, "SELECT * FROM kullanicilar WHERE id='$id'");
$kullanici = mysqli_fetch_assoc($sorgu);

$hata = "";
$basari = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yeni_kullanici_adi = mysqli_real_escape_string($link, $_POST["kullanici_adi"]);

    if (!empty($_POST["sifre"])) {
        $yeni_sifre = password_hash($_POST["sifre"], PASSWORD_DEFAULT);
        $guncelle = mysqli_query($link, "UPDATE kullanicilar SET kullanici_adi='$yeni_kullanici_adi', sifre='$yeni_sifre' WHERE id='$id'");
    } else {
        $guncelle = mysqli_query($link, "UPDATE kullanicilar SET kullanici_adi='$yeni_kullanici_adi' WHERE id='$id'");
    }

    if ($guncelle) {
        $basari = "Bilgiler başarıyla güncellendi.";
        // Yeni veriyi çek
        $sorgu = mysqli_query($link, "SELECT * FROM kullanicilar WHERE id='$id'");
        $kullanici = mysqli_fetch_assoc($sorgu);
    } else {
        $hata = "Güncelleme sırasında bir hata oluştu.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Bilgileri Güncelle</title>
</head>
<body>
    <h2>Bilgilerini Güncelle</h2>

    <?php if ($basari): ?>
        <p style="color:green;"><?= $basari ?></p>
    <?php endif; ?>

    <?php if ($hata): ?>
        <p style="color:red;"><?= $hata ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <label>Kullanıcı Adı:</label><br>
        <input type="text" name="kullanici_adi" value="<?= $kullanici["kullanici_adi"] ?>" required><br><br>

        <label>Yeni Şifre (boş bırakılırsa değişmez):</label><br>
        <input type="password" name="sifre"><br><br>

        <input type="submit" value="Güncelle">
    </form>

    <br><a href="anasayfa.php">Anasayfaya Dön</a>
</body>
</html>
