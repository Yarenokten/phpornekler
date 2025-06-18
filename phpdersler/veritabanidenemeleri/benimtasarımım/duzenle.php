<?php
include "baglanti.php";
if (isset($_GET['kitap_id']) && is_numeric($_GET['kitap_id'])) {
    $id = (int)$_GET['kitap_id'];
    $sorgu = "SELECT * FROM kitaplar WHERE kitap_id = $id";
    $sonuc = mysqli_query($cnn, $sorgu);
    $kitap = mysqli_fetch_assoc($sonuc);
} else {
    die("Geçersiz ID"); // kitap_id yoksa veya geçersizse işlemi durdur
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $kitapad=$_POST['name'];
    $yazar=$_POST['yazaradi'];                                                                                                                   
    $sayfa=$_POST['sayfasayisi'];
    $guncelle="UPDATE kitaplar set 
    kitapadi='$kitapad',
    yazaradi='$yazar',
    sayfasayisi='$sayfa'
    where kitap_id=$id";
    if(mysqli_query($cnn,$guncelle)){
        header("Location:listele.php");
        exit;
    }
    else{
        echo " guncelleme hatalı". mysqli_error($cnn);
    }
}

?>
<html>
    <head><title>duzenleme sayfası</title></head>
    <body>
        <div>
            <form action="" method="post">
                <label for="kitapadi">kitap adi:</label><br>
                <input type="text" name="name" value="<?php echo $kitap['kitapadi']; ?>"><br>
                <label for="yazaradi">yazarın adı:</label><br>
                <input type="text" name="yazaradi" value="<?php echo $kitap['yazaradi'];?>"><br>
                <label for="sayfasayisi">sayfa sayısı:</label><br>
                <input type="text" name="sayfasayisi" value="<?php echo $kitap['sayfasayisi'];?>"> <br>
                <input type="submit" value="Güncelle">

            </form>
        </div>
    </body>
</html>