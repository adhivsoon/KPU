<?php
  include '../koneksi.php';
  session_start();
  if (isset($_SESSION['nim'])) {
    $id = $_SESSION['nim'];
    $login = mysql_query("SELECT * FROM kandidat WHERE id_kandidat='$id'");
    $status = mysql_fetch_array($login);
?>

<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <link rel="stylesheet" href="../css/style-pop.css" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <?php include 'header.php'; ?>
  <?php if(isset($_POST['logout'])){
mysql_query("UPDATE mahasiswa SET status='3' WHERE nim = '$id'");
header("location: logout.php");
  } ?>
  <div class="right">
    <a href="#popup" class="waves-effect waves-light btn">Keluar</a>
    <div id="popup">
   <div class="window">
    <a href="#" class="close-button" title="Close">X</a>
    <h4>Apakah kamu yakin ingin keluar ?</h4>
    <p>Kalau kamu keluar secara langsung kamu tidak ingin berpartisipasi dalam Pemilihan<br> CAPRES dan CAWAPRES BEM Universitas<br>
    <br><br><br></p>
    <form class="waves-effect waves-light btn" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
      <input type="submit" name="logout" value="YES">
    </form>
      <form class="waves-effect waves-light btn" action="pilih.php"; method="post">
        <input type="submit" value="NO">
      </form>
   </div>
  </div>
  </div>
  <!-- -->
  <!-- <div class="waves-effect waves-light btn">
    <a href="#popup">Keluar</a></div>
    <div id="popup">
   <div class="window">
    <a href="#" class="close-button" title="Close">X</a>
    <h1>Jendela Pop Up</h1>
    <p>Hello CSS....<br>
    Saya sedang belajar CSS<br><br><br>
    fieyanh.blogspot.com</p>
   </div>
  </div> -->
  <!-- -->

  </br>
  <div class="center">
    <h4>Tentukan Pilihan Kalian Sekarang!</h4>
  </div>
  <?php
    if(isset($_POST['pilih_1'])) {
      $kandidat_1 = 1;

      mysql_query("UPDATE mahasiswa SET status='1' WHERE nim = '$id'");
      $kueri = mysql_query("SELECT * FROM suara WHERE id_kandidat='$kandidat_1'");
      $tampil = mysql_fetch_array($kueri);
      $pol 		= $tampil['jumlah_suara'] + 1;
      mysql_query("UPDATE suara SET jumlah_suara = '$pol' WHERE id_kandidat='$kandidat_1'");

      header("location: logout.php");
    }
  elseif (isset($_POST['pilih_2'])) {
      $kandidat_2 = 2;

      mysql_query("UPDATE mahasiswa SET status='1' WHERE nim = '$id'");
      $kueri = mysql_query("SELECT * FROM suara WHERE id_kandidat='$kandidat_2'");
      $tampil = mysql_fetch_array($kueri);
      $pol 		= $tampil['jumlah_suara'] + 1;
      mysql_query("UPDATE suara SET jumlah_suara = '$pol' WHERE id_kandidat='$kandidat_2'");

      header("location: logout.php");
    }
    elseif (isset($_POST['pilih_3'])) {
      $kandidat_3 = 3;

      mysql_query("UPDATE mahasiswa SET status='1' WHERE nim = '$id'");
      $kueri = mysql_query("SELECT * FROM suara WHERE id_kandidat='$kandidat_3'");
      $tampil = mysql_fetch_array($kueri);
      $pol 		= $tampil['jumlah_suara'] + 1;
      mysql_query("UPDATE suara SET jumlah_suara = '$pol' WHERE id_kandidat='$kandidat_3'");

      header("location: logout.php");
    }
   ?>
  <table class="centered responsive-table">
    <tbody>
      <tr>
        <td>
          <div class="row">
            <div class="col s12">
              <div class="card">
              <?php
              $queri = "Select * From kandidat" ;  //menampikan SEMUA data dari tabel kandidat

              $hasil = mysql_query ($queri);    //fungsi untuk SQL

              // perintah untuk membaca dan mengambil data dalam bentuk array
              while ($data = mysql_fetch_array ($hasil)){
                $id = $data['id_kandidat'];
                if($id == 1){
                echo "<ul>";
                echo "<div class='card-image'><img src='../pictures/".$data['foto']."' width='700px' height='430px'></div>";
                echo "<div class='card-content'>

                  </div>";
                echo "</ul>";
                }
              }
               ?>
                  <div class="card-action">
                    <form class="waves-effect waves-light btn" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                      <input type="submit" name="pilih_1" value="Pilih">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </td>

          <td>
            <div class="row">
              <div class="col s12">
                <div class="card">
                <?php
                $queri = "Select * From kandidat" ;  //menampikan SEMUA data dari tabel kandidat

                $hasil = mysql_query ($queri);    //fungsi untuk SQL

                // perintah untuk membaca dan mengambil data dalam bentuk array
                while ($data = mysql_fetch_array ($hasil)){
                  $id = $data['id_kandidat'];
                  if($id == 2){
                  echo "<ul>";
                  echo "<div class='card-image'><img src='../pictures/".$data['foto']."' width='700px' height='430px'></div>";
                  echo "<div class='card-content'>

                        </div>";
                  echo "</ul>";
                  }
                }
                 ?>
                    <div class="card-action">
                      <form class="waves-effect waves-light btn" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                        <input type="submit" name="pilih_2" value="Pilih">
                      </form>
                    </div>
                </div>
              </div>
            </div>
            </td>

            <td>
              <div class="row">
                <div class="col s12">
                  <div class="card">
                  <?php
                  $queri = "Select * From kandidat" ;  //menampikan SEMUA data dari tabel kandidat

                  $hasil = mysql_query ($queri);    //fungsi untuk SQL

                  // perintah untuk membaca dan mengambil data dalam bentuk array
                  while ($data = mysql_fetch_array ($hasil)){
                    $id = $data['id_kandidat'];
                    if($id == 3){
                    echo "<ul>";
                    echo "<div class='card-image'><img src='../pictures/".$data['foto']."' width='700px' height='430px'></div>";
                    echo "<div class='card-content'>

                          </div>";
                    echo "</ul>";
                    }
                  }
                   ?>
                      <div class="card-action">
                        <form class="waves-effect waves-light btn" action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                          <input type="submit" name="pilih_3" value="Pilih">
                        </form>
                      </div>
                  </div>
                </div>
              </div>
              </td>

        </tr>
        </tbody>
        </table>


              <div style="height:30px" class="card-panel1 teal lighten-2">
                <div class="center">
                  <h6 style="padding-top:8px; color:#FFFFFF">Copyright &copy; 2016 - Kelompok Studi Linux. All right reserved.</h5>
                </div>
              </div>

                </body>

                <!--Import jQuery before materialize.js-->
                <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script type="text/javascript" src="../js/materialize.min.js"></script>
                <script type="text/javascript">
                $('.carousel.carousel-slider').carousel({full_width: true});
                </script>

                </html>
      <?php
      }
        else {
          header("location: index.php");
        }
      ?>
