<?php

include("baglanti.php");

// $ip = $_SERVER['REMOTE_ADDR']; — kullanıcının IP adresini alıyor.
/*Veritabanında bu IP'yi arıyor.
Yoksa yeni satır ekliyor.
Sonra toplam kayıt sayısını buluyor.
Son olarak ekranda ziyaretçi sayısını gösteriyor. */
$ip = $_SERVER['REMOTE_ADDR'];

// IP daha önce var mı diye kontrol ediyoruz
$sorgu = mysqli_query($link, "SELECT * FROM ziyaretciler WHERE ip_adresi='$ip'");

if (mysqli_num_rows($sorgu) == 0) {
    // Eğer IP yoksa, yeni kayıt ekle
    mysqli_query($link, "INSERT INTO ziyaretciler (ip_adresi) VALUES ('$ip')");
}

// Toplam ziyaretçi sayısını çek
$sayac_sorgu = mysqli_query($link, "SELECT COUNT(*) AS toplam FROM ziyaretciler");
$sayac = mysqli_fetch_assoc($sayac_sorgu);
?>

<p>Toplam ziyaretçi sayısı: <?= $sayac['toplam'] ?></p>
