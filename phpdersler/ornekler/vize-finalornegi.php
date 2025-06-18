<?php
echo "<center><h1> wtp dersi</h1></center>";
echo"<hr>";
$vize=70;
$final=30;
if($final<=30){
    echo "basarısız oldunuz";
}
else{
    $not=$vize*0.4+$final*0.6;
    if($not>50){
        echo"gectiniz <br>";
    }
    elseif($not>=50&&$not<60){
        echo "basarili oldunuz harf notunuz:cc <br>";
    }
}
//kullanıcı girişli deneyeceğim
?>
<!doctype html>
<html>
    <body>
        <form action="" method="post">
            <fieldset >
                <legend>LogIn</legend>
                <label for="number">öğrenci numarası</label><br>
                <input type="text" id="number" name="number"><br>
                <label for="password">şifre</label><br>
                <input type="password" id="password" name="password"><br>
                <input type="submit" value="giriş yap">
            </fieldset>
        </form>
    </body>
</html>
<?php
session_start();
if(isset($_POST['number'])&&isset($_POST['password'])){
    $number=$_POST['number'];
    $password=$_POST['password'];
    if($number==222503212&&$password==1234){
        $_SESSION['number']='number';
        header("Location: notsayfasi.php");
        exit;
    }
    else{
        echo"numara veya şifre hatalı";
    }
}
?>