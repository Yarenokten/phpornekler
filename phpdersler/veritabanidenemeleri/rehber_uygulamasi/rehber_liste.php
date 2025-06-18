<?php
session_start();
include("baglanti.php");

if (!isset($_SESSION["kullanici_id"])) {
    header("Location: login.php");
    exit;
}

$kullanici_id = $_SESSION["kullanici_id"];

$arama = "";
if (isset($_GET['arama'])) {
    $arama = mysqli_real_escape_string($link, $_GET['arama']);
}

// Silme işlemi
if (isset($_GET['sil']) && is_numeric($_GET['sil'])) {
    $sil_id = (int)$_GET['sil'];
    $delete_sql = "DELETE FROM rehber WHERE rehber_id = $sil_id AND kullanici_id = $kullanici_id";
    mysqli_query($link, $delete_sql);
    header("Location: rehber_liste.php");
    exit;
}

// Kayıtları çek (arama varsa filtre uygula)
if ($arama !== "") {
    $sql = "SELECT * FROM rehber WHERE kullanici_id = $kullanici_id AND 
            (isim LIKE '%$arama%' OR soyisim LIKE '%$arama%' OR ogr_no LIKE '%$arama%')
            ORDER BY isim, soyisim";
} else {
    $sql = "SELECT * FROM rehber WHERE kullanici_id = $kullanici_id ORDER BY isim, soyisim";
}

$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Rehber Kayıtları</title>
</head>
<body>
    <h2 style="text-align:center;">Rehberiniz</h2>
    <div style="text-align: center;">
 <a href="kayitekleme.php" style="align:center;">Yeni Kayıt Ekle</a><br><br>
</div>
    

    <!-- Arama formu -->
    <form action="" method="get">
        <div style=text-align:center;>
        <input type="text" name="arama" placeholder="İsim, Soyisim veya Öğrenci No ile ara" value="<?= htmlspecialchars($arama) ?>">
        <input type="submit" value="Ara">
        </div>
        <?php if ($arama !== "") { ?>
            <a href="rehber_liste.php">Temizle</a>
        <?php } ?>
    </form>

    <br>
<div>
<table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;">
        <tr>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>Öğrenci No</th>
            <th>Telefon</th>
            <th>E-mail</th>
            <th>İşlemler</th>
        </tr>
        <?php if (mysqli_num_rows($result) == 0) { ?>
            <tr><td colspan="6">Kayıt bulunamadı.</td></tr>
        <?php } else { ?>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= htmlspecialchars($row['isim']) ?></td>
                    <td><?= htmlspecialchars($row['soyisim']) ?></td>
                    <td><?= htmlspecialchars($row['ogr_no']) ?></td>
                    <td><?= htmlspecialchars($row['telefon']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td>
                        <a href="rehber_duzenle.php?id=<?= $row['rehber_id'] ?>">Düzenle</a> |
                        <a href="rehber_liste.php?sil=<?= $row['rehber_id'] ?>" onclick="return confirm('Silmek istediğinize emin misiniz?');">Sil</a>
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>
</div>
    
</body>
</html>
