<?php
session_start();
include("baglanti.php");
if(isset($_POST["username"])&&isset($_POST["email"])&&isset($_POST["password"])){
   $username = mysqli_real_escape_string($link, $_POST["username"]);
    $email = mysqli_real_escape_string($link, $_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // güvenli şifreleme
    $sorgu="INSERT INTO kullanicilar(ad,email,sifre) values('$username','$email','$password')";
    if(mysqli_query($link,$sorgu)){
        header("Location:giris.php");
    }
    else{
        echo"hata: " .mysqli_error($link);
    }
}
if(isset($_POST["email"])&&isset($_POST["password"])){
    $email=mysqli_real_escape_string($link,$_POST["email"]);
    $password=$_POST["password"];
    $sorgu=mysqli_query($link,"SELECT *FROM kullanicilar where email='$email'");
    $kullanici=mysqli_fetch_assoc($sorgu);
    if($kullanici&&password_verify($password,$kullanici["sifre"])){
        $_SESSION["kullanici_id"]=$kullanici["kullanici_id"];
        header("location:rehber_liste.php");
        exit;
    }else{
        echo "hatalı e-posta veya sifre";
    }

}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
  <style>
    .container {
      display: flex;
      height: 100vh;
    }
    .left, .right {
      flex: 1;
      padding: 20px;
    }
    .left {
      background-color: #f0f0f0;
    }
    .right {
      background-color: #d0e0f0;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left">
        <form action="" method="post">
            <legend style="text-align:center;">kayıt formu</legend>
            <label for="username">Kullanıcı Adı:</label><br>
            <input type="text" name="username"><br>
            <label for="email">E-Mail:</label><br>
            <input type="text" name="email"><br>
            <label for="password">Şifre:</label><br>
            <input type="password" name="password"><br>
            <input  type="submit" value="KAYDOL">
        </form>
    </div>
    <div class="right">
        <form action="" method="post">
            <legend style="text-align:center;">Giriş Formu</legend>
            <label for="email">E-Mail:</label><br>
            <input type="text" name="email"><br>
            <label for="password">Şifre:</label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="GİRİŞ YAP">
        </form>
    </div>
  </div>
</body>
</html>
