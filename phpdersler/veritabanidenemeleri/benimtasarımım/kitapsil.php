<?php
include "baglanti.php";

if (isset($_GET['kitap_id']) && is_numeric($_GET['kitap_id'])) {
    $id = (int)$_GET['kitap_id'];
    $sorgu = "DELETE FROM kitaplar WHERE kitap_id = $id";

    if (mysqli_query($cnn, $sorgu)) {
        header("Location: listele.php");
        exit;
    } else {
        echo "Silme sırasında bir hata oluştu: " . mysqli_error($cnn);
    }
} else {
    echo "Geçersiz ID";
}
?>
