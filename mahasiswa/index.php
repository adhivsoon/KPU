<?php
include '../koneksi.php';
session_start();
if (isset($_POST['submit'])) {
  $id   = $_POST['nim'];
  /* Defense SQL Injection */
  $id   = stripslashes($id);
  $id   = mysql_real_escape_string($id);
  $login = mysql_query("SELECT * FROM mahasiswa WHERE nim='$id'");
  $data = mysql_num_rows($login);
  $status = mysql_fetch_array($login);
  $sudah = "$status[3]";

  if ($data == 1 && $sudah == '0'){
    session_start();
    $_SESSION['nim'] = $id;
    header("location: pilih.php");
  } elseif (!$data) {
    echo "<script>alert('NIM Anda belum terdaftar!');window.location='index.php';</script>";
  } else {
    echo "<script>alert('Maaf.. Anda Sudah Memilih!');window.location='index.php';</script>";
    }
  }
?>

<!DOCTYPE html>
  <html>
    <head>
      <title>E-VotingUBL </title>
      <!--Import Google Icon Font-->
      <link href="../css/materialicon.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../jquery/jquery.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- NUMERIC -->
      <SCRIPT language=Javascript>
<!--
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;

}
//-->
</SCRIPT>
      <!-- END NUMERIC -->
    </head>

    <!--Body-->
    <body>
      <div class="container">
        <div class="row">
          <div class="col s12 m6">
              <h2 class="thin">E-Voting KPU</h2>
              <p class="left">Selamat datang di <b>E-Voting KPU (Version 0.1)</b>. Software ini dibuat untuk membantu menyelenggarakan kegiatan pemilihan Ketua BEM Universitas Budi Luhur (2016).
                Pada kesempatan kali ini KPU Universitas Budi Luhur bekerjasama dengan KSL Research & Development Center sebagai pihak pengembang dalam membangun software terpadu ini.
                Apabila kalian ingin berkontribusi mengembangkan lebih lanjut, silahkan kunjungin link berikut:<br><br>
                <b>KSL Research & Development Center (Lab. 5.3.A)</b><br>
                Github: <a href="https://github.com/iqbalpmgks">https://github.com/kslubl</a> <br>
                Website: <a href="https://ksl-ubl.or.id/">http://ksl-ubl.or.id/ </a> <br>
              </p>
            </div>
            <div class="col s12 m6">
              <h2 class="center-align thin">Login</h2>
              <div class="row">
                  <form action="index.php" method="POST" class="col s12" >
                    <p class="center-align">
                      <div class="row">
                          <div class="input-field col s12">
                              <input type="text" name="nim" length="10" placeholder="Masukkan NIM Anda" id="username" onkeypress="return isNumberKey(event)" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" autocomplete=off required>
                          </div>
                      </div>
                     <div class="row">
                          <div class="col m12">
                              <p class="right-align">
                                <input type="submit" name="submit" class="btn waves-effect waves-light" value="Masuk" />
                              </p>
                          </div>
                     </div>
                   </form>
            </div>
        </div>
    </div>
    <!--End of Body-->

    <!--Footer-->
    <footer>
      <div class="row center">
        Copyright &copy; 2016 - Kelompok Studi Linux. All right reserved.
      </div>
    <!--End of Footer-->

      </div>
    </body>
  </html>
