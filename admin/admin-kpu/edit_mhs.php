<?php
  include "../../koneksi.php";
  $id_mahasiswa = $_GET['id_mahasiswa'];
  $perintah = "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
  $hasil =  mysql_query($perintah) or die("gagal melakukan query");
  $row = mysql_fetch_array($hasil);
?>

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

    <?php include 'nav.php'; ?>

    <div style="height:100%;">
      <div>
        <h5 class="center-align">Edit Data Mahasiswa</h5>
      </div>

      <div class="container">
        <div class="section">
          <div class="row">
          <form class="col s12" action="update_mahasiswa.php?id_mahasiswa=<?php echo $id_mahasiswa ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s8 m6">
                <input id="nim" type="text" name="nim" value="<?php echo $row['nim']; ?>">
                <label for="nim">NIM</label>
              </div> <?php echo $id; ?>
            </div>
            <div class="row">
              <div class="input-field col s12 m12">
                <input id="nama" type="text" name="nama" value="<?php echo $row['nama']; ?>">
                <label for="nama">Nama Mahasiswa</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s9 m6">
                <select id="fakultas" name="fakultas">
                  <option value="" disabled selected><?php echo $row['fakultas']; ?></option>
                  <option value="Fakultas Teknologi Informasi">Fakultas Teknologi Informasi</option>
                  <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                  <option value="Fakultas Ilmu Sosial & Politik">Fakultas Ilmu Sosial & Politik</option>
                  <option value="Fakultas Teknik">Fakultas Teknik</option>
                  <option value="Fakultas Ilmu Komunikasi">Fakultas Ilmu Komunikasi</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s9 m6">
                <input id="jurusan" type="text" name="jurusan" value="<?php echo $row['jurusan']; ?>">
                <label for="jurusan">Jurusan</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s8 m12">
                <input value="<?php echo $row['status']; ?>" id="status" type="text" class="validate">
              </div>
            </div>
      <!-- <input type="file" name="file"> -->
      <a href="mhs.php" class="btn waves-effect waves-light" name="batal">Batal</a>
      <button class="btn waves-effect waves-light" type="submit" name="input">Update</button>
    </form>
  </div>
</div>
</div>

<div style="height:30px" class="card-panel1 teal lighten-2">
  <div class="center">
    <h6 style="padding-top:8px; color:#FFFFFF">Kelompok Studi Linux © 2016. All right reserved.</h5>
  </div>
</div>

    <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="../../jquery/jquery.js"></script>
  <script type="text/javascript" src="../../js/materialize.min.js"></script>
  <script type="text/javascript">
  $('.carousel.carousel-slider').carousel({full_width: true});
  $(document).ready(function() {
  $('select').material_select();
  });
  </script>

</body>

</html>
