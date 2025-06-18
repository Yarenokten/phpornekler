<?php
session_start();
session_unset();   // Tüm session değişkenlerini temizler
session_destroy(); // Oturumu tamamen sonlandırır
header("Location: login.php"); // Giriş sayfasına yönlendir
exit;
?>
