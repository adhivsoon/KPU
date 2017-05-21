<?php
  include '../../koneksi.php';
//session_start();
//if (isset($_SESSION['user'])) {
?>
<?php
$list = array();
$dens = array();
$cor = array();
$cor[0] = '#ff3300';
$cor[1] = '#0000ff';
$cor[2] = '#006600';
$i = 0;
$sql = "select * from suara";
$resultado = mysql_query($sql);
while ($row = mysql_fetch_object($resultado)) {
  # code...
  $id_kandidat = $row->id_kandidat;
  $jumlah_suara = $row->jumlah_suara;
  $lista[$i] = $id_kandidat;
  $dens[$i] = $jumlah_suara;
  $i = $i + 1;
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
      <center>
      <!-- Chart -->
      <script type="text/javascript" src="../../js/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ["Element", "Density", { role: "style" } ],
    <?php
    $k=$i;
    for($i = 0; $i <$k; $i++){
      ?>
    ['<?php echo $lista[$i]?>',  <?php echo $dens[$i]?>, '<?php echo $cor[$i]?>'],
  <?php } ?>

    ]);
    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                 { calc: "stringify",
                   sourceColumn: 1,
                   type: "string",
                   role: "annotation" },
                 2]);

    var options = {
    title: "REKAPITULASI PERHITUNGAN SUARA",
    width: 800,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart.draw(view, options);
    }
    </script>
    <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
      <!-- End chart -->
      <div class="container">
        <div class="section">
          <div id="container" style="width: 100%;">
            <canvas id="canvas"></canvas>
          </div>
          <div class="center">
          </div>
        </div>
      </div>
</center>
      <?php include 'footer.php'; ?>

	</body>
  </html>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="../../jquery/jquery.js"></script>
  <script type="text/javascript" src="../../js/materialize.min.js"></script>
  <script src="../../Chartjs/jquery.min.js"></script>
  <script src="../../Chartjs/Chart.bundle.js"></script>
  <script type="text/javascript">
  $('.carousel.carousel-slider').carousel({full_width: true});
  </script>

<?php
//} else {
//header("location: index.php");
//}
?>
