<?php 
include "database.php";

$id = $_GET['id'];


$query = "DELETE FROM jadwal WHERE jadwal.id = '$id'";
$data = $sdb->prepare($query);
$data->execute();

header("Location: Jadwal.php");

?>