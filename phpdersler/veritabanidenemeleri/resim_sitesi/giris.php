<?php
session_start();
include("baglanti.php");

// Hata gösterimi açık (debug için)
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $k_adi = mysqli_real_escape_string($link, $_POST["kullanici_adi"]);
    $sifre = $_POST["sifre"];

    $sorgu = mysqli_query($link, "SELECT * FROM kullanicilar WHERE kullanici_adi='$k_adi'");

    if ($sorgu) {
        $kullanici = mysqli_fetch_assoc($sorgu);

        if ($kullanici && password_verify($sifre, $kullanici["sifre"])) {
            // Giriş başarılı
            $_SESSION["kullanici_id"] = $kullanici["id"];
            $_SESSION["yetki"] = $kullanici["yetki"];
            header("Location: anasayfa.php");
            exit;
        } else {
            echo "<p style='color:red;'>Hatalı kullanıcı adı veya şifre!</p>";
        }
    } else {
        echo "Sorgu hatası: " . mysqli_error($link);
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
</head>
<body>
    <h1 style="text-align:center;">GİRİŞ YAP</h1>
    <form action="" method="post" style="text-align:center;">
        <label>Kullanıcı adı:</label>
        <input type="text" name="kullanici_adi" required><br><br>
        <label>Şifre:</label>
        <input type="password" name="sifre" required><br><br>
        <input type="submit" value="Giriş Yap">
    </form>
</body>
</html>
