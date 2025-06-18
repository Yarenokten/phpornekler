<?php
$dbhost="localhost";
$dbuser="root";
$dbsifre="";
$dbname="rehber_uygulamasi";
$link=mysqli_connect($dbhost,$dbuser,$dbsifre,$dbname);
if(!$link){
    die("baglanti kurulamadi". mysqli_connect_error());
    exit;
}
?>