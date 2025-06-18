<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kişisel Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="menu">
        <a href="index.php?sayfa=anasayfa">Anasayfa</a>
        <a href="index.php?sayfa=hakkimda">Hakkımda</a>
        <a href="index.php?sayfa=iletisim">İletişim</a>
    </div>

    <div class="icerik">
        <?php
        if (isset($_GET['sayfa'])) {
            $sayfa = $_GET['sayfa'];
            if (file_exists($sayfa . ".php")) {
                include $sayfa . ".php";
            } else {
                echo "<p>Sayfa bulunamadı.</p>";
            }
        } else {
            include "anasayfa.php";
        }
        ?>
    </div>

</body>
</html>
