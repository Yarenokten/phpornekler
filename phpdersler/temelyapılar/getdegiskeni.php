<!DOCTYPE html>
<head>
    <title>$_get ile formdan veri alma</title>
    <body>
        <form action="getdegiskeni.php" method="get">
            <label for="isim">isim giriniz:</label>
            <input type="text" id="isim" name="isim">
            <input type="submit" value="gonder">          
        </form>
        <?php
        if(isset($_GET['isim'])){
            $ad=$_GET['isim'];
            echo "merhaba".$ad."!";
        }
        ?>
    </body>
</head>
<?php
//super globeller:
//phpde ön tanımlı değişkenler otomatik olarak tanımlanır ve her yerde erişimi sağlanan özel değişkenlerdir
//gelen verileri almamızı saklamamızı sağlayan değişkenlerdir
//urlden veri almak:
//isset fonksiyonu bir değişkenin dolu mu boş mu yani null olup olmadıgını kontrol eder

if(isset($_GET['isim'])){//get ile bir veri alıyorum ve isim olacak bu veri
    $isim=$_GET['isim'];//isim adında bir değişken oluşturup get fonksiyonundan aldığım veriye eşitliyorum
    //localde çalışan url'nin sonunda gelip ? koyuo isim=ahmet der ve çalıştırırsan isimi urlden alır

    echo "merhaba".$isim."!";
}
else{
    echo "isim parametresi bulunamadi";
}
?>
