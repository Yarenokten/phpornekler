<?php
$host = "localhost";
$kullanici = "root";
$sifre = "";

// Sunucuya bağlan
$baglanti = mysqli_connect($host, $kullanici, $sifre);

if (!$baglanti) {
    die("Sunucu bağlantısı başarısız: " . mysqli_connect_error());
}

// Veritabanını seç
if (!mysqli_select_db($baglanti, "ziyaretci_defteri")) {
    die("Veritabanı seçilemedi: " . mysqli_error($baglanti));
}

// Form gönderildiyse veriyi al ve kaydet
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = $_POST["isim"];
    $mesaj = $_POST["mesaj"];
    
    $sql = "INSERT INTO mesajlar (isim, mesaj) VALUES ('$isim', '$mesaj')";
    
    if (mysqli_query($baglanti, $sql)) {
        echo "Mesaj kaydedildi.<br><br>";
    } else {
        echo "Hata: " . mysqli_error($baglanti);
    }
}

// Mesajları listele
$sonuc = mysqli_query($baglanti, "SELECT * FROM mesajlar ORDER BY tarih DESC");

echo "<h2>Ziyaretçi Defteri</h2>";
while ($satir = mysqli_fetch_assoc($sonuc)) {
    echo "<div style='border:1px solid #ccc; margin:5px; padding:5px;'>";
    echo "<strong>" . htmlspecialchars($satir["isim"]) . "</strong><br>";
    echo nl2br(htmlspecialchars($satir["mesaj"])) . "<br>";
    echo "<small>" . $satir["tarih"] . "</small>";
    echo "</div>";
}
?>

<!-- Form -->
<h3>Mesaj Bırak</h3>
<form method="post">
    İsim: <input type="text" name="isim" required><br>
    Mesaj: <br><textarea name="mesaj" rows="4" cols="40" required></textarea><br>
    <input type="submit" value="Gönder">
</form>
