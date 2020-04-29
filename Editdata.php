<?php 
include "database.php";

$id = $_GET['id'];

$hari = $_POST['hari'];
$Tanggal = $_POST['Tanggal'];
$Imsyak = $_POST['Imsyak'];
$Subuh = $_POST['Subuh'];
$zuhur = $_POST['zuhur'];
$Ashar = $_POST['Ashar'];
$magrib = $_POST['magrib'];
$Isya = $_POST['Isya'];

$query = "UPDATE jadwal SET hari = '$hari', tanggal = '$Tanggal', imsyak = '$Imsyak', subuh = '$Subuh', zuhur = '$zuhur', ashar = '$Ashar', magrib = '$magrib', isya = '$Isya' WHERE jadwal.id = '$id'";
$data = $sdb->prepare($query);
$data->execute();

header("Location: Jadwal.php");



?>