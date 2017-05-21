<?php
  include '../../koneksi.php';
  session_start();
  if(isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html>
<head>
  <title>E-Voting KPU - UBL 2016</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../../css/materialize.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <?php include 'header.php'; ?>

  <div class="right">
    <a class="btn" href="tambah-kandidat.php">Tambah</a>
  </div>

  <?php include 'nav.php'; ?>

  <div style="height:100%;">
    <div>
      <h5 class="center-align">DATA KANDIDAT</h5>
    </div>

      <table align="center" class="highlight responsive-table">
        <thead>
          <tr>
            <th data-field="id">No. Urut</th>
            <th data-field="name">Foto kandidat</th>
            <th data-field="id">NIM Capres</th>
            <th data-field="id">Nama Capres</th>
            <th data-field="id">NIM Cawapres</th>
            <th data-field="id">Nama Cawapres</th>
            <th data-field="id">Visi</th>
            <th data-field="id">Misi</th>
            <th data-field="id">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $queri = "SELECT * FROM kandidat";  //menampikan SEMUA data dari tabel kandidat

          $hasil = mysql_query ($queri);    //fungsi untuk SQL

          // perintah untuk membaca dan mengambil data dalam bentuk array
          while ($data = mysql_fetch_array ($hasil)){
            $id = $data['id_kandidat'];
            echo "<tr>";
              echo "<td>".$data['no_urut']."</td>";
              echo "<td><img src='../../pictures/".$data['foto']."' width='100' height='100'> </td>";
              echo "<td>".$data['nim_capres']."</td>";
              echo "<td>".$data['nama_capres']."</td>";
              echo "<td>".$data['nim_cawapres']."</td>";
              echo "<td>".$data['nama_cawapres']."</td>";
              echo "<td>".$data['visi']."</td>";
              echo "<td>".$data['misi']."</td>";
              echo "<td><a class='waves-effect waves-light btn' href='edit_kandidat.php?id_kandidat=".$data['id_kandidat']."'>Edit</a></td>";
              echo "<td><a class='waves-effect waves-light btn' href='hapus_kandidat.php?id_kandidat=".$data['id_kandidat']."'>Hapus</a></td>";
              echo "</tr>";
            // echo("<td><font size='1'><a href=\"edit_kandidat.php?id=$id\">Edit</a></font></td>");
            // echo("<td><font size='1'><a href=\"hapus_kandidat.php?id=$id\">Hapus</a></font></td></tr>");
            }

           ?>

        </tbody>

      </table>
    </div>

    <div style="height:30px" class="card-panel1 teal lighten-2">
      <div class="center">
        <h6 style="padding-top:8px; color:#FFFFFF">Kelompok Studi Linux © 2016. All right reserved.</h5>
        </div>

  </body>
  </html>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../../js/materialize.min.js"></script>

  <?php
    }
  else {
    header("location: index.php");
  }
  ?>
