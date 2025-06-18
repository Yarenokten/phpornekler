<?php
session_start(); // Oturum başlatılır. Tarayıcıya özel veri saklamak için zorunlu.

if (!isset($_SESSION['sayac'][$sayfa])) {
    // Eğer bu sayfa için daha önce sayac tanımlanmadıysa, başlat ve 1 yap
    $_SESSION['sayac'][$sayfa] = 1;
} else {
    // Daha önce girilmişse, sayacı 1 artır
    $_SESSION['sayac'][$sayfa]++;
}
?>
