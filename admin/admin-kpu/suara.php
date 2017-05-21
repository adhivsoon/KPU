
<script type="text/javascript">
 var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },
         title: {
            text: 'Rekapitulasi Hasil Perhitungan Suara'
         },
         xAxis: {
            categories: ['Perolehan Suara']
         },
         yAxis: {
            title: {
               text: 'Hasil Suara'
            }
         },
              series:
            [
<?php
include '../../koneksi.php';
$sql   = "SELECT * from suara JOIN kandidat ON suara.id_kandidat = kandidat.id_kandidat"; // file untuk mengakses ke tabel database
$query = mysql_query( $sql ) or die(mysql_error());
while($ambil = mysql_fetch_array($query)){
 $id_kandidat	=$ambil['id_kandidat'];
 $nama_ketua	=ucfirst($ambil['nama_ketua']);
 $nama_wakil	=ucfirst($ambil['nama_wakil']);
 $sql_jumlah   = "SELECT * from suara where id_kandidat='$id_kandidat'";
 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
 while( $data = mysql_fetch_array( $query_jumlah ) ){
    $jumlahx = $data['jumlah_suara'];
   }

   ?>
   {
    name: '<?php echo $nama_ketua.' - '.$nama_wakil; ?>',
    data: '<?php echo $jumlahx; ?>';
   },
   <?php } ?>
]
});
});
</script>
</head>
<body>
<!-- fungsi yang di tampilkan dibrowser  -->
<?php
include 'koneksi.php';
$kueri1    = mysql_query("SELECT * FROM siswa WHERE status = 'sudah memilih'");
$tampil1   = mysql_num_rows($kueri1);

$kueri2    = mysql_query("SELECT * FROM siswa WHERE status = 'belum memilih'");
$tampil2   = mysql_num_rows($kueri2);
?>
<div id="container" style="min-width: 200px; height: 400px; margin: 0 auto"></div>
<div class="jml_suara_siswa">
  <table border="0">
    <tr>
      <td>Jumlah Siswa Yang Sudah Memilih = <?= $tampil1; ?></td>
    </tr>
    <tr>
      <td>Jumlah Siswa Yang Belum Memilih = <?= $tampil2; ?></td>
    </tr>
  </table>
</div>
</body>
</html>
