<!DOCTYPE html>
<html>
    <head>
        <title>$_files işlemleri</title>
        <body>
            <form action="file.php" method="post" enctype="multipart/form-data">
                <label for="filename">dosya yükle</label>
                <input type="file" name="filename">
                <input type="submit" value="yukle">
            </form>
        </body>
    </head>
</html>
<?php
if(isset($_FILES['filename'])){
    $file=$_FILES['filename'];
    move_uploaded_file($file['tmp_name'],'resimler/'.$file['name']);
    //dosya yükleme fonksiyonu ile dosyayı yükleyeceğim klasörü ve dosyanın adını alacam
    //tmp_name değeri dosyanın geçici yolunu/adını, error varsa hata kodunu, size değeri ise yüklenen dosyanın boyutunu byte olarak verir.
    
    echo "dosya yükleme basarılı".htmlspecialchars($file['name']);
}
?>