<?php
  include("../koneksi.php");
  $id_kandidat = $_GET['id_kandidat'];
  mysql_query("DELETE FROM kandidat WHERE id_kandidat='$id_kandidat' ");
  header("location: kandidat.php");
?>
