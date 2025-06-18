<?php
session_start();
include("baglanti.php");

if (!isset($_SESSION["kullanici_id"])) {
    header("Location: login.php");
    exit;
}

$kullanici_id = $_SESSION["kullanici_id"];
$mesaj = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["isim"], $_POST["soyisim"], $_POST["ogr_no"])) {
    $isim = mysqli_real_escape_string($link, $_POST["isim"]);
    $soyisim = mysqli_real_escape_string($link, $_POST["soyisim"]);
    $ogr_no = mysqli_real_escape_string($link, $_POST["ogr_no"]);
    $telefon = mysqli_real_escape_string($link, $_POST["telefon"]);
    $email = mysqli_real_escape_string($link, $_POST["email"]);

    $sql = "INSERT INTO rehber (kullanici_id, isim, soyisim, ogr_no, telefon, email) 
            VALUES ('$kullanici_id', '$isim', '$soyisim', '$ogr_no', '$telefon', '$email')";
    if (mysqli_query($link, $sql)) {
        $mesaj = "Kayıt başarıyla eklendi.";
    } else {
        $mesaj = "Hata: " . mysqli_error($link);
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title >Rehber Kayıt Ekle</title>
    <style>
      body {
    font-family: Arial, sans-serif;
  }
  form {
    width: 400px;
    margin: 50px auto; /* sayfa ortası */
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background: #f9f9f9;
  }
  .form-row {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }
  .form-row label {
    width: 120px;
    text-align: right;
    margin-right: 15px;
    font-weight: bold;
  }
  .form-row input {
    flex: 1;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    background: #4CAF50;
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
  }
  input[type="submit"]:hover {
    background: #45a049;
  }


    </style>
</head>
<body>
    <h2 style=text-align:center;>Rehbere Kayıt Ekle</h2>
    <?php if ($mesaj) echo "<p>$mesaj</p>"; ?>
   <form action="" method="post">
  <div class="form-row">
    <label for="isim">İsim:</label>
    <input type="text" id="isim" name="isim" required>
  </div>
  <div class="form-row">
    <label for="soyisim">Soyisim:</label>
    <input type="text" id="soyisim" name="soyisim" required>
  </div>
  <div class="form-row">
    <label for="ogr_no">Öğrenci No:</label>
    <input type="text" id="ogr_no" name="ogr_no" required>
  </div>
  <div class="form-row">
    <label for="telefon">Telefon:</label>
    <input type="text" id="telefon" name="telefon">
  </div>
  <div class="form-row">
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email">
  </div>
  <div class="form-row">
 <input type="submit" value="Kaydet">
  </div>
 
</form>

    
</body>
</html>


