<?php
session_start();
//oturum kontrolü yapmam lazım
if(!isset($_SESSION['kullanici_adi'])){
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>welcome</title>
    </head>
    <body>
        <h1>hoş geldiniz,<?php echo $_SESSION['kullanici_adi']; ?></h1>
        <a href="logout.php">çıkış</a>
    </body>
</html>