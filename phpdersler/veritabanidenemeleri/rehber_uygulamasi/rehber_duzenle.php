<?php
session_start();
include("baglanti.php");

if (!isset($_SESSION["kullanici_id"])) {
    header("Location: login.php");
    exit;
}

$kullanici_id = $_SESSION["kullanici_id"];
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: rehber_liste.php");
    exit;
}

$id = (int)$_GET['id'];

// Kayıt var mı kontrol
$sql = "SELECT * FROM rehber WHERE rehber_id = $id AND kullanici_id = $kullanici_id LIMIT 1";
$result = mysqli_query($link, $sql);
$kayit = mysqli_fetch_assoc($result);
if (!$kayit) {
    header("Location: rehber_liste.php");
    exit;
}

$mesaj = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = mysqli_real_escape_string($link, $_POST["isim"]);
    $soyisim = mysqli_real_escape_string($link, $_POST["soyisim"]);
    $ogr_no = mysqli_real_escape_string($link, $_POST["ogr_no"]);
    $telefon = mysqli_real_escape_string($link, $_POST["telefon"]);
    $email = mysqli_real_escape_string($link, $_POST["email"]);

    $update_sql = "UPDATE rehber SET 
                   isim='$isim', 
                   soyisim='$soyisim', 
                   ogr_no='$ogr_no', 
                   telefon='$telefon', 
                   email='$email' 
                   WHERE rehber_id=$id AND kullanici_id=$kullanici_id";

    if (mysqli_query($link, $update_sql)) {
        $mesaj = "Kayıt başarıyla güncellendi.";
        // Güncel veriyi çek
        $sql = "SELECT * FROM rehber WHERE rehber_id = $id AND kullanici_id = $kullanici_id LIMIT 1";
        $result = mysqli_query($link, $sql);
        $kayit = mysqli_fetch_assoc($result);
    } else {
        $mesaj = "Hata: " . mysqli_error($link);
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Rehber Kaydı Düzenle</title>
</head>
<body>
    <h2>Rehber Kaydı Düzenle</h2>
    <?php if ($mesaj) echo "<p>$mesaj</p>"; ?>
    <form action="" method="post">
        İsim: <input type="text" name="isim" value="<?= htmlspecialchars($kayit['isim']) ?>" required><br>
        Soyisim: <input type="text" name="soyisim" value="<?= htmlspecialchars($kayit['soyisim']) ?>" required><br>
        Öğrenci No: <input type="text" name="ogr_no" value="<?= htmlspecialchars($kayit['ogr_no']) ?>" required><br>
        Telefon: <input type="text" name="telefon" value="<?= htmlspecialchars($kayit['telefon']) ?>"><br>
        E-mail: <input type="email" name="email" value="<?= htmlspecialchars($kayit['email']) ?>"><br>
        <input type="submit" value="Güncelle">
    </form>
    <br>
    <a href="rehber_liste.php">Geri Dön</a>
</body>
</html>
