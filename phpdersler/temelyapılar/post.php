<!DOCTYPE html>
<html>
    <head>
        <title>
            $_post değişkeni
        </title>
        <body>
            <form action="post.php" method="post">
                <label for="isim">isim giriniz</label>
                <input type="text" id="isim" name="isim"><br>
                <label for="yas">yas giriniz</label>
                <input type="text"id="yas" name="yas">
                <br>
                <input type="submit" value="gonder">
            </form>
            <?php
            if(isset($_POST['isim'])&&isset($_POST['yas'])){
                $ad=htmlspecialchars($_POST['isim']);//daha güvenli bir kod yazımı
                $age=htmlspecialchars($_POST['yas']);
                echo "Merhaba".$ad."! yasiniz:".$age.".";
            }
            ?>
        </body>
    </head>
</html>