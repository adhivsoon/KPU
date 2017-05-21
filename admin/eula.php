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
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <?php include 'header.php'; ?>

  <?php include 'nav.php'; ?>

<div class="container">
  <div class="section">
    <div style="height:100%;">
      <div>
        <h5 class="center-align"><u><b>End User License Agreement</b></u></h5>
        <br>
      </div>
      <div>
      <p><b>Penting:</b> Mohon baca perjanjian ini dengan seksama!
         Dengan menggunakan piranti lunak E-Voting KPU (v.0.1) berarti Anda telah membaca dan setuju dengan perjanjian ini.<br><br>

         <b>PERJANJIAN LISENSI PENGGUNA AKHIR</b><br><br>

         1. DEFINISI<br>
            <ol>
              <li>Software berarti piranti lunak E-Voting KPU (v.0.1).<br></li>
              <li>Pengembang berarti Kelompok Studi Linux, yang mengembangkan Software.<br></li>
              <li>KSL Research & Development Center berarti pusat pelayanan terpadu yang dikelola oleh Pengembang, yang bertugas melayani pengguna dan calon pengguna Software.<br></li>
              <li>Mitra berarti individu atau badan diluar Research & Development Center yang berkerjasama dengan Pengembang untuk melayani pengguna dan calon pengguna.<br></li>
              <li>Ms-PL License berarti Lisensi yang secara spesifik digunakan Software dalam proses verifikasi lisensi.<br></li>
              <li>Masa Berlaku adalah masa atau periode dimana Software bisa digunakan.<br><br></li>
            </ol>
         2. PEMBERIAN LISENSI; KETENTUAN TERKAIT<br>
            <ol>
              <li>Pemberian Lisensi.<br></li>
              Pengembang, sebagaimana diatur oleh syarat dan ketentuan Perjanjian ini, dengan ini memberi Anda lisensi non-eksklusif dan tidak dapat dipindahtangankan selama dalam Masa Berlaku untuk menggunakan Software ini hanya dalam bentuk yang dapat dieksekusi atau kode obyek saja, dan hanya untuk keperluan yang diizinkan sesuai dengan ketentuan yang berlaku.<br><br>

              <li>Masa Berlaku.<br></li>
              Masa Berlaku Software ini adalah satu (1) tahun terhitung sejak tanggal pembelian, dan wajib diperpanjang setiap tahun sesuai dengan ketentuan yang berlaku.<br><br>

              <li>Pembatasan.<br></li>
              Anda tidak boleh, dan tidak boleh mengizinkan pihak ketiga mana pun untuk, (i) menggandakan Software ini untuk tujuan apa pun selain yang diperlukan untuk menggunakannya secara wajar sebagaimana tertulis dalam Perjanjian ini dan untuk keperluan pengarsipan off-line, (ii) menginstal Software ini pada komputer lain selain yang diizinkan oleh ketentuan yang berlaku, (iii) menggunakan Code yang sama yang disediakan oleh Pengembang pada lebih dari satu (1) komputer pada saat yang bersamaan, (iv) memberitahukan Code yang disediakan oleh Pengembang ke pihak mana pun selain ke pihak Pengembang, KSL Research & Development Center, atau Mitra, sebagaimana untuk keperluan layanan pendukung terkait Software ini, (v) menerbitkan Software atau Code, atau menggunakannya selain untuk Keperluan yang Diizinkan, (vi) pengguna harus menyertakan copyright dan lisensi pada perangkat lunak yang didistribusikan (vii) distribusi perangkat lunak hasil modifikasi tidak boleh mengatasnamakan trademark atau nama si pembuat pertama, (viii) memberi pihak ketiga mana pun akses ke atau penggunaan atas Software ini pada layanan berlangganan atau penyedia layanan aplikasi atau usaha serupa lainnya.<br><br>

              <li>Instalasi dan Pengaturan.<br></li>
              Pengembang menyetujui bahwa perjanjian Software sudah termasuk bantuan instalasi dan pengaturan (setting) hingga Software bisa digunakan untuk pemilihan Calon Presiden Mahasiswa Universitas Budi Luhur. Bantuan instalasi dan pengaturan diberikan hingga maksimal sejak tanggal perjanjian Software. Anda memahami bahwa bantuan instalasi dan pengaturan tidak dilakukan oleh Pengembang, melainkan oleh pihak yang secara langsung menjalin Software ini kepada Anda. Jika hari pelaksanaan, bukan karena Anda menolak dan/atau sibuk, Software belum bisa digunakan, Anda dapat menyampaikan keluhan Anda melalui KSL Research & Development Center dan/atau mengajukan banding sesuai dengan ketentuan yang berlaku pada bagian 4. GARANSI.<br><br>

              <li>Update.<br></li>
              Pengembang, dari waktu ke waktu, mungkin akan menyediakan pembaruan (“Update”) untuk Software ini. Pengembang, sesuai ketentuan yang berlaku pada Perjanjian ini, memberikan Anda lisensi untuk menggunakan Update, selama masih dalam Masa Berlaku, sesuai dengan tanggal dikeluarkannya Update tersebut. Anda setuju bahwa Update disediakan untuk menyempurnakan atau memperbaiki kesalahan-kesalahan pada Software. Anda menerima bahwa Pengembang, dengan pertimbangannya sendiri, dapat berhenti menyediakan Update untuk Software ini.<br><br>

              <li>Dukungan Teknis.<br></li>
              Pengembang, melalui KSL Research & Development Center dan Mitra menyediakan dukungan teknis bagi pengguna Software selama masih dalam Masa Berlaku. Dukungan teknis dilakukan hanya melalui surat elektronik. Dukungan teknis melalui media lain seperti pesan instan (chatting), telepon, atau kendali jarak jauh (remote), tidak termasuk dalam Perjanjian ini. Dukungan teknis tidak termasuk untuk, maupun gangguan-gangguan yang disebabkan oleh, piranti lunak dan perangkat keras lain yang bukan dibuat oleh Pengembang, seperti (namun tidak terbatas pada) Sistem Operasi, SQL Server, Firewall, dan Anti Virus.<br><br>

              <li>Komentar Pengguna.<br></li>
              Pengembang mengundang komentar Anda sehubungan dengan Layanan dan/atau Software ini, termasuk pemberitahuan bahwa Anda telah mengalami kegagalan, kesalahan atau malfungsi Software, dan saran untuk fitur dan fungsi tambahan atau yang berbeda. Komentar dan saran bisa Anda sampaikan ke Pengembang melalui KSL Research & Development Center. Pengembang tidak berkewajiban untuk menanggapi atau menindaklanjuti segala komentar atau saran tersebut, tetapi Anda memberi Pengembang hak dan lisensi yang bersifat terus-menerus, tidak dapat dibatalkan, terbayar sepenuhnya, bebas royalti, dan berlaku di seluruh dunia berdasarkan hak kekayaan intelektual Anda (jika ada) untuk menerapkan komentar dan saran Anda dalam Software ini, Layanan ini, dan produk dan layanan lain yang diberikan oleh Pengembang, perusahaan afiliasinya, dan para penerima lisensi mereka, para penerus mereka dan para penerima hak mereka.<br><br>
            </ol>

        3. KEPEMILIKAN<br>
           Pengembang memegang semua hak dalam Software yang tidak diberikan oleh Perjanjian ini. Semua hak cipta, merek dagang dan hak kekayaan intelektual (termasuk, namun tidak terbatas pada, file data, gambar dan semua dokumen terkait dengan Software) adalah milik pengembang atau pemberi lisensinya, dan dilindungi oleh hukum hak cipta, perjanjian internasional dan hukum yang berlaku lainnya.<br><br>
        4. GARANSI<br>
           Pengembang memberikan garansi terhitung sejak tanggal pemberian, Software dapat digunakan sebagaimana mestinya sesuai dengan ketentuan yang berlaku. Apabila hal tersebut tidak terpenuhi maka Anda berhak untuk banding. Untuk menggunakan hak Anda tersebut, Anda harus menghapus instalasi, menghancurkan semua salinan Software yang mungkin sudah Anda buat (termasuk semua salinan arsip). Terkait dengan hal ini, Anda memahami bahwa Code yang Anda terima saat pemberian adalah bersifat sementara, yang bila sudah melewati masa berlaku, Anda bisa mendapatkan Code yang sebenarnya secara gratis melalui KSL Research & Development Center atau Mitra. Garansi ini hanya berlaku untuk kerjasama baru, dan tidak berlaku untuk Update maupun Upgrade.<br><br>
        5. BATASAN TANGGUNG JAWAB<br>
           Pengembang atau KSL Research & Development Center tidak bertanggung jawab atas segala kerugian termasuk hilangnya data, peluang atau gangguan teknis lainnya, yang timbul atas penggunaan Software, walaupun jika pengembang sudah diberitahu atas kemungkinan terjadinya hal-hal tersebut. Pengguna mengakui bahwa sistem komputer dan telekomunikasi tidak bebas kesalahan dan sesekali mungkin terjadi downtime pada server atau sistem pendukungnya. Pengembang tidak menjamin layanan tidak akan terganggu, atau bebas kesalahan.<br><br>
        6. PRIVASI<br>
           Anda memahami dan menerima bahwa Software dapat mengirimkan informasi tertentu terkait pengecekan lisensi dan statistik transaksi. Informasi tersebut digunakan semata-mata untuk keperluan verifikasi lisensi dan peningkatan pelayanan kepada pengguna Software, dan tidak dipublikasikan kepada umum. Software tidak mengumpulkan ataupun menyimpan informasi yang bersifat rahasia seperti login dan password selain di komputer pengguna, kecuali ada perjanjian khusus yang mengijinkannya.<br><br>
        7. LAIN-LAIN<br>
           <ol>
             <li>Perjanjian ini dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya, oleh karena itu pengguna dihimbau untuk mengunjungi halaman ini untuk mengetahui perubahannya (apabila ada).<br></li>
             <li>Perjanjian ini disusun dengan bahasa Indonesia. Walaupun Pengembang mungkin saja menyediakan beberapa terjemahan, namun versi Bahasa Indonesia yang akan dijadikan acuan.<br></li>
           </ol>
           <br>
        CONTACT:<br>
           Email: <a href="https://kslubl.official@gmail.com">kslubl.official@gmail.com</a><br>
           Website: <a href="http://www.ksl-ubl.or.id/">www.ksl-ubl.or.id</a><br>
           Instagram: <a href="">kslubl</a><br>
           Facebook: <a href="https://web.facebook.com/groups/ksl.bl/">ksl-ubl</a><br>
           Twitter: <a href="https://twitter.com/kslubl">kslubl</a>
           <br>
           <br>
         </p>

           <p align="right"><b><i>Regards,</i><br>
           Kelompok Studi Linux - Budi Luhur<br>
           Research & Development Center<br>
           Lab. 5.3.A</b><br>
           </p>

      </div>
    </div>
  </div>
</div>

    <?php include 'footer.php'; ?>

  </body>
  </html>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="../jquery/jquery.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>

<?php
  } else {
    echo "<script>alert('Ups.. Silahkan login kembali!');window.location='index.php';</script>";
  }
?>
