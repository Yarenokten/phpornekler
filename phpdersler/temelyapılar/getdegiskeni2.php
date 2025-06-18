<!DOCTYPE html>
<html>
    <head>
        <title>$_get ile dinamik sayfa oluşturma</title>
        <body>
            <a href="getdegiskeni2.php?sayfa=anasayfa">anasayfa</a>
            <a href="getdegiskeni2.php?sayfa=iletisim">iletisim</a>
            <a href="getdegiskeni2.php?sayfa=hakkimizda">hakkimizda</a>
           <?php
           if(isset($_GET['sayfa'])){
            $sayfa=$_GET['sayfa'];
            switch($sayfa){
                case 'anasayfa':
                    echo "<h1> anasayfa </h1>";
                    break;
                    case 'iletisim':
                        echo "<h1> iletisim</h1>";
                        break;
                        case 'hakkimizda':
                        echo "<h1> hakkimizda</h1>";
                        break;
                        default:
                        echo "sayfa bulunamadi";
            }
           }
           else{
            echo "sayfaya hosgeldiniz";
           }
           
           ?>

        </body>
    </head>
</html>