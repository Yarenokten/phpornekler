<?php
$host = "localhost"; 
$kullanici = "root"; 
$sifre = "";       
$veritabani = "kitaplik";
$cnn=mysqli_connect($host,$kullanici,$sifre,$veritabani);
if(!$cnn){
    die("baglanti hatasi:".mysqli_connect_error());
}

?>