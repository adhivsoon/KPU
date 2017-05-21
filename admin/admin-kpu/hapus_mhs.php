<?php
  include("../../koneksi.php");
  $id_mahasiswa = $_GET['id_mahasiswa'];
  mysql_query("DELETE FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa' ");
  header("location: mhs.php");
?>
