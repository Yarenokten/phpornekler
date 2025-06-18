<?php
$dbhost="localhost";
$dbuser="root";
$dbsifre="";
$dbname="dbuyegiris";
$link=mysqli_connect($dbhost,$dbuser,$dbsifre,$dbname);
if(!$link){
    die("baglanti basarisiz". mysql_error());
    exit;
}
?>