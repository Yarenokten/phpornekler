<?php
session_start();
include("baglanti.php");

if (!isset($_SESSION["kullanici_id"])) {
    header("Location: giris.php");
    exit;
}

$kullanici_id = $_SESSION["kullanici_id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yeni_isim = $_POST["isim"];
    $yeni_soyisim = $_POST["soyisim"];

    $guncelle = mysqli_query($link, "UPDATE kullanicilar SET isim='$yeni_isim', soyisim='$yeni_soyisim' WHERE id='$kullanici_id'");

    if ($guncelle && mysqli_affected_rows($link) > 0) {
        // Değişiklik yapıldı
        header("Location: profil.php"); // Sayfayı yenile
        exit;
    } else {
        echo "Güncelleme başarısız ya da veri zaten aynı.";
    }
}

// Güncel bilgileri al
$sorgu = mysqli_query($link, "SELECT * FROM kullanicilar WHERE id='$kullanici_id'");
$kullanici = mysqli_fetch_assoc($sorgu);
?>

<form action="profil.php" method="post">
    İsim: <input type="text" name="isim" value="<?= htmlspecialchars($kullanici['isim']) ?>"><br>
    Soyisim: <input type="text" name="soyisim" value="<?= htmlspecialchars($kullanici['soyisim']) ?>"><br>
    <input type="submit" value="Güncelle">
</form>
