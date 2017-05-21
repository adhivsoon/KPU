<?php
  include '../koneksi.php';
  session_start();
  if (isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html>
<head>
  <title>E-Voting KPU - UBL 2016</title>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <link rel="stylesheet" href="../css/dataTables.bootstrap.css"/>
  <link rel="stylesheet" href="../css/bootstrap.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <?php include 'header.php'; ?>

  <div class="right">
    <a class="btn" href="tambah-mhs.php">Tambah</a>
  </div>

  <?php include 'nav.php'; ?>

    <div style="height:100%;">
      <div>
        <h5 class="center-align">Data Mahasiswa</h5>
      </div>
      <center>
      <table align="center" id="mahasiswa" class="highlight responsive-table">
        <thead>
          <tr>
            <th data-field="id">NO</th>
            <th data-field="id">NIM</th>
            <th data-field="name">NAMA MAHASISWA</th>
            <th data-field="id">FAKULTAS</th>
            <!-- <th data-field="id">STATUS</th> -->
            <!-- <th data-field="id">AKSI</th> -->
          </tr>
        </thead>
        <tbody>
          <?php
          $queri = "Select * From mahasiswa" ;  //menampikan SEMUA data dari tabel siswa

          $hasil = mysql_query ($queri);    //fungsi untuk SQL
          $no = 1;
          // perintah untuk membaca dan mengambil data dalam bentuk array
          while ($data = mysql_fetch_array ($hasil)){
          ?>
                    <tr>
                      <td> <?php echo $no?></td>
                      <td><?php echo $data['nim']?></td>
                      <td><?php echo $data['nama'] ?></td>
                      <td><?php echo $data['fakultas'] ?></td>

                    </tr>
      <?php    $no++;  } ?>

        </tbody>
      </table>
    </center>
    </div>

    <?php include 'footer.php'; ?>

  </body>
  </html>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../js/jquery-1.11.0.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../css/jquery.dataTables.js"></script>
         <script src="../css/dataTables.bootstrap.js"></script>
         <script type="text/javascript">
             $(function() {
                 $("#mahasiswa").dataTable();
             });
             </script>
  <?php
    }
  else {
    header("location: mhs.php");
  }
  ?>
