<?php 
session_start();//oturum baslatma
session_unset();//oturum değişkenlerini temizler
session_destroy();//oturumu tamamen yok eder
header("Location:login.php");//beni tekrar logine yönlendiriyor
exit;
?>