<?php
$mesaj="";
include "baglanti.php";
if(isset($_POST['kitapadi'])&&isset($_POST['yazaradi'])&&isset($_POST['sayfasayisi'])){
    $kitapadi=$_POST['kitapadi'];
    $yazar=$_POST['yazaradi'];
    $sayfasayisi=$_POST['sayfasayisi'];
    $sql="INSERT INTO kitaplar (kitapadi,yazaradi,sayfasayisi) 
    VALUES ('$kitapadi','$yazar',$sayfasayisi)";
    if(mysqli_query($cnn,$sql)){
        $mesaj="kayır basarıyla eklendi";
        header("Location:listele.php");
        exit;
    }
    else{
        $mesaj="hata:". mysqli_error($cnn);
    }
}
?>


<html>
    <head> <title>kitap ekleme sayfası</title></head>
    <body>
        <div>
            <form action="" method="post">
                <label for="kitapadi">kitap adı:</label><br>
                <input type="text" name="kitapadi"><br>
                <label for="yazar">yazar adı:</label><br>
                <input type="text" name="yazaradi"><br>
                <label for="sayfasayisi" name="sayfasayisi">sayfa sayısı:</label><br>
                <input type="text" name="sayfasayisi"><br>
                <button>Ekle</button>
                <?php
                if($mesaj != ""):
                ?>
            <p style="color: green;"><?php echo $mesaj; ?></p>
        <?php endif;?>
            </form>
        </div>
    </body>
</html>