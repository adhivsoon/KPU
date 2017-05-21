<?php
  include '../../koneksi.php';
  session_start();
  if (isset($_SESSION['username'])) {
    $dir = '../../pictures';
    if (isset($_POST['submit'])) {
      $no_urut      = $_POST['no_urut'];
      $foto_kandidat= $_FILES['foto_kandidat']['name'];
      $tmp_foto     = basename($_FILES['foto_kandidat']['tmp_name']);
      // move_uploaded_file($tmp_foto, "$dir/$foto");
      // print_r($foto_kandidat);
      // die;
      $nimCapres    = $_POST['nimCapres'];
      $namaCapres   = $_POST['namaCapres'];
      $nimCawapres  = $_POST['nimCawapres'];
      $namaCawapres = $_POST['namaCawapres'];
      $visi         = $_POST['visi'];
      $misi         = $_POST['misi'];

      $input = "INSERT INTO kandidat (id_kandidat, no_urut, foto, nim_capres, nama_capres, nim_cawapres, nama_cawapres, visi, misi)
      VALUES ('', '$no_urut', '$foto_kandidat', '$nimCapres', '$namaCapres', '$nimCawapres', '$namaCawapres', '$visi', '$misi')";
      $query_input =mysql_query($input);
      if($query_input){
        header("location: kandidat.php");
      }
    }
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

      <?php include 'nav.php'; ?>

      <div style="height:100%;">
        <div>
          <h5 class="center-align">Tambah Data Kandidat</h5>
        </div>

        <div class="container">
          <div class="section">
            <div class="row">
              <form class="col s12" action="tambah-kandidat.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="input-field col s8 m3">
                    <input id="no_urut" type="text" name="no_urut" class="validate" required>
                    <label for="no_urut">No. Urut Kandidat</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input id="foto" type="file" name="foto_kandidat">
                    <label for="foto"></label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6 m6">
                    <input id="nimcapres" type="text" name="nimCapres" length="10" class="validate" required>
                    <label for="cimcapres">NIM Capres</label>
                  </div>
                <div class="row">
                  <div class="input-field col s6 m6">
                    <input id="namacapres" type="text" name="namaCapres" class="validate" required>
                    <label for="namacapres">Nama Capres</label>
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="input-field col s6 m6">
                    <input id="nimcawapres" type="text" name="nimCawapres" length="10" class="validate" required>
                    <label for="nimcawapres">NIM Cawapres</label>
                  </div>
        		    <div class="row">
                  <div class="input-field col s6 m6">
                    <input id="namacawapres" type="text" name="namaCawapres" class="validate" required>
                    <label for="namacawapres">Nama Cawapres</label>
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="input-field col s6 m6">
                    <textarea id="visi" name="visi" class="materialize-textarea" length="120"></textarea>
                    <label for="visi">Visi</label>
                  </div>
        		    <div class="row">
                  <div class="input-field col s6 m6">
                    <textarea id="misi" name="misi" class="materialize-textarea" length="120"></textarea>
                    <label for="misi">Misi</label>
                  </div>
                </div>
                </div>

                <div class="row">
                  <div class="col s12">
                    <a href="kandidat.php" class="btn waves-effect waves-light" name="batal">Batal</a>
                    <button class="btn waves-effect waves-light" type="submit" name="submit" value="Tambah">Simpan</button>
                  </div>
                </div>
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

    function getval(sel) {
       alert(sel.value);
    }
    </script>

</body>
</html>

  <?php
    }
  else {
    header("location: index.php");
  }
  ?>
