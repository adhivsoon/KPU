<?php
include "../../koneksi.php";
$id_kandidat = $_GET['id_kandidat'];
$nimCapres = $_POST['nimCapres'];
$namaCapres = $_POST['namaCapres'];
$nimCawapres = $_POST['nimCawapres'];
$namaCawapres = $_POST['namaCawapres'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];

$query = mysql_query("UPDATE kandidat SET nim_capres='$nimCapres', nama_capres='$namaCapres', nim_cawapres='$nimCawapres',nama_cawapres='$namaCawapres',visi='$visi',misi='$misi' WHERE id_kandidat='$id_kandidat'");
header("location: kandidat.php");
?>
