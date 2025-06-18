<?php
session_start();
if(isset($_POST['kullanici_adi'])&&isset($_POST['sifre'])){
    $kullanici_Adi=$_POST['kullanici_adi'];
    $password=$_POST['sifre'];
    if($kullanici_Adi=="admin"&&$password=="1234"){
        //session ile kullanici adları eşit mi diye kontrol eder
        $_SESSION['kullanici_adi']=$kullanici_Adi;
        header("Location: welcome.php");//eşitse beni welcome sayfasına yönlendirecek
        exit;
    }else{
        echo "kullanici adi veya sifre hatali";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>oturum işlemleri</title>
        <body>
            
        <form action="" method="post">
            <label for="kullanici_adi">kullanıcı adı:</label>
            <input type="text" id="kullanici_adi" name="kullanici_adi"> <br>
            <label for="sifre">sifre</label>
            <input type="password" id="sifre" name="sifre"><br>
            <input type="submit" value="girisyap">
        </form>
        </body>
    </head>
</html>
