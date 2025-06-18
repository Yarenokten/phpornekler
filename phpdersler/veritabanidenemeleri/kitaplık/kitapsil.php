<?php
include("baglanti.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    //is_numeric() → id değeri sayısal mı kontrol eder.
    $id = (int) $_GET["id"]; // Güvenlik için tamsayıya çeviriyoruz
    $sorgu = "DELETE FROM kitaplar where id=$id";
    if (mysqli_query($cnn, $sorgu)) {
        header("location:kitaplistele.php");
        exit;
    } else {
        echo "silme sırasında bir hata olustu: " . mysqli_error($cnn);
    }
} else {
    echo "gecersiz ID";
}
