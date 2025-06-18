<?php
//çerezler tarayıcıda saklanan ve belirli bir gün boyunca saklanan veri parçalarına çerezler diyoruz
//çerezler kullanıcının tarayıcısında saklanır ve web sunucusunu her ziyaret ettiğimizde bu çerezleri gönderir
//super globallerden biridir
if(isset($_POST['dil'])){
    $lang=$_POST['dil'];
    setcookie("kullanici_dili",$lang,time()+(886400*30),"/");
    header("Location:cookies.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            cookies
        </title>
    </head>
    <body>
        
    <form action="" method="post">
        <label for="dil">dil seçimi</label>
        <select name="dil" id="dil">
            <option value="tr">türkçe</option>
            <option value="eng">ingilizce</option>
            <input type="submit" value="kaydet">
        </select>
    </form>
    </body>
</html>
<h2>Dil seçiniz:</h2>
<?php
if(isset($_COOKIE["kullanici_dili"])){
    if($_COOKIE["kullanici_dili"]=="tr"){
        echo "seçilen dil türkçe";
    }
    elseif($_COOKIE["kullanici_dili"]=="eng"){
        echo "kullanici dili ingilizce";
    }
    else{
        echo "dil seçilmedi";
    }
}
?>