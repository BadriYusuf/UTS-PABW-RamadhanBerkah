<?php 
include "database.php";

$hari = $_POST['hari'];
$Tanggal = $_POST['Tanggal'];
$Imsyak = $_POST['Imsyak'];
$Subuh = $_POST['Subuh'];
$zuhur = $_POST['zuhur'];
$Ashar = $_POST['Ashar'];
$magrib = $_POST['magrib'];
$Isya = $_POST['Isya'];

$query = "INSERT INTO jadwal VALUES('$hari', '$Tanggal', '$Imsyak','$Subuh','$zuhur','$Ashar','$magrib','$Isya','')";
$data = $sdb->prepare($query);
$data->execute();

header("Location: jadwal.php");



?>