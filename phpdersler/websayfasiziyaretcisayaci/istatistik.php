<?php
session_start(); // Oturum verisini okuyabilmek için

echo "<h1>Ziyaret İstatistikleri</h1>";

if (!isset($_SESSION['sayac'])) {
    echo "Henüz hiç sayfa gezilmedi.";
} else {
    echo "<ul>";
    foreach ($_SESSION['sayac'] as $sayfa => $adet) {
        echo "<li>$sayfa sayfası: $adet defa ziyaret edildi</li>";
    }
    echo "</ul>";
}
?>
<a href='index.php'>Ana Sayfa</a>
