
<?php
  include "../../koneksi.php";
  $id_kandidat = $_GET['id_kandidat'];
  $perintah = mysql_query("SELECT * FROM kandidat WHERE id_kandidat='$id_kandidat' ");
  $row = mysql_fetch_array($perintah);

?>
<html>
  <head>
    <title>E-Voting KPU - UBL 2016</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

<body>
  <?php include 'header.php'; ?>

  <?php include 'nav.php'; ?>

  <div style="height:100%;">
    <div>
      <h5 class="center-align">Edit Data Kandidat</h5>
    </div>

    <div class="container">
      <div class="section">
        <div class="row">
          <form class="col s12" action="update_kandidat.php?id_kandidat=<?php echo $id_kandidat ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s8 m3">
                <input id="no_urut" type="text" name="no_urut" value="<?php echo $row['no_urut']; ?>">
                <label for="no_urut">No. Urut Kandidat</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input id="foto" type="file" name="foto_kandidat" value="<?php echo $row['foto']; ?>">
                <label for="foto"></label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6 m6">
                <input id="nimcapres" type="text" name="nimCapres" length="10" value="<?php echo $row['nim_capres']; ?>">
                <label for="nimcapres">NIM Capres</label>
              </div>
            <div class="row">
              <div class="input-field col s6 m6">
                <input id="namacapres" type="text" name="namaCapres" length="10" value="<?php echo $row['nama_capres']; ?>">
                <label for="namacapres">Nama Capres</label>
              </div>
            </div>
            </div>
            <div class="row">
              <div class="input-field col s6 m6">
                <input id="nimcawapres" type="text" name="nimCawapres" length="10" value="<?php echo $row['nim_cawapres']; ?>" >
                <label for="nimcawapres">NIM Cawapres</label>
              </div>
            <div class="row">
              <div class="input-field col s6 m6">
                <input id="namcawapres" type="text" name="namaCawapres" length="10" value="<?php echo $row['nama_cawapres']; ?>">
                <label for="namacawapres">Nama Cawapres</label>
              </div>
            </div>
            </div>
            <div class="row">
              <div class="input-field col s6 m6">
                <textarea id="textarea1" name="visi" class="materialize-textarea" length="120" value="<?php echo $row['visi']; ?>"></textarea>
                <label for="textarea1">Visi</label>
              </div>
            <div class="row">
              <div class="input-field col s6 m6">
                <textarea id="textarea1" name="misi" class="materialize-textarea" length="120" value="<?php echo $row['misi']; ?>"></textarea>
                <label for="textarea1">Misi</label>
              </div>
            </div>
            </div>

            <a href="kandidat.php" class="btn waves-effect waves-light" name="batal">Batal</a>
            <button class="btn waves-effect waves-light" type="submit" name="submit">Update</button>
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
  <script type="text/javascript" src="../jquery/jquery.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script type="text/javascript">
  $('.carousel.carousel-slider').carousel({full_width: true});
  $(document).ready(function() {
  $('select').material_select();
  });
  </script>

</body>
</html>
