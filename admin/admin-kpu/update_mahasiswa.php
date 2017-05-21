<?php
  include "../../koneksi.php";
  $id_mahasiswa = $_GET['id_mahasiswa'];
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $fakultas = $_POST['fakultas'];
  $jurusan = $_POST['jurusan'];


  mysql_query("UPDATE mahasiswa SET nim='$nim', nama='$nama', fakultas='$fakultas', jurusan='$jurusan' WHERE id_mahasiswa='$id_mahasiswa'");
  header("location: mhs.php");
?>
