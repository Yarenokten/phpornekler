<?php


$dbhost = "localhost";
$dbkul = "root";
$dbsifre = "";
$dbadi = "resim_sistemi";

// Veritabanına bağlan
$link = mysqli_connect($dbhost, $dbkul, $dbsifre, $dbadi);

if (!$link) {
    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
}
?>
