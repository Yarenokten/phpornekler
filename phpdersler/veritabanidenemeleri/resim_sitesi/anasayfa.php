<?php
session_start();
include("baglanti.php");
// Giriş yapan biri yoksa, direk login sayfasına yönlendir
if(!isset($_SESSION["kullanici_id"])){
    header("Location:giris.php");
    exit;
}
include("sayac.php");//ziyaretci sayfasına ıp ekleme
//kullanıcının adını ve yetkisini almak için veritabanından cekiyoruz
$id=$_SESSION["kullanici_id"];
$sorgu=mysqli_query($link,"SELECT*FROM kullanicilar where id='$id'");//oturum acan kullanıcının bilgisini cekiyoruz
$kullanici=mysqli_fetch_assoc($sorgu);
?>
<html>
    <h2>hoş geldin <?php  echo $kullanici["kullanici_adi"];?>!</h2>
    <p>yetkin:<?php echo $kullanici["yetki"];?></p>
    <!-- Eğer adminse resim yükleme sayfasına gidebilsin -->
     <?php 
     if($kullanici["yetki"]=="admin"):
     ?>
     <p><a href="yukle.php">resim yükle</a></p>
     <?php endif;?>
     <p><a href="kullanici.php">bilgilerini görüntüle/güncele</a></p>
     <p><a href="cikis.php">çıkış yap</a></p>
</html>