<?php 
session_start();
if (isset($_SESSION['anggota'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.png">
    <title>Anggota Page | Kuisioner Jadwal Fosti</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="footer-navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Jadwal Kuisioner Fosti</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">Home</a></li>
            <li><a href="input.php">Input Data</a></li>
            <li><a href="data.php">Data Kuisioner</a></li>
            <li><a href="kontak.php">Kontak</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lainnya <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-header">Akun</li>
                <li><a href="logout.php">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Begin page content -->
      <div class="container" id='tes'>
        <div class="page-header">
          <h1>Selamat Datang di Halaman Input Kuisioner Jadwal</h1>
        </div>
        <p class="lead">Inputlah Kuisioner anda di <code>input data</code>. <code>Data Kuisioner</code> untuk Melihat data kuisioner yang telah anda input. Data kuisioner hanya dapat di edit oleh <code>Admin Kuisioner</code>. Maka Hati hatilah dalam menginputkannya
        <p><b>TPIS :</b></p>
        <ul type='1'>
          <li>Inputlah kuisioner sembari melihat jadwal di <code>star.ums.ac.id</code> agar tidak ada dusta di antara kita</li>
          <li>Jika telah mengisi data jangan lupa untuk di cek dan disamakan di <code>star.ums.ac.id</code> sebelum di submit. Agar mantab dan Yakin.</li>
          <li>Jika telah melakukan submit silahkan cek data melalui menu -><code>Data Kuisioner</code>. jika benar alhamdulillah jika ada yang salah silahkan contact admin di menu -><code>Kontak</code></li>
          <li>Jika Semua telah clear jangan lupa logout ya.</li>
        </ul>
        <p>Salam hangat dari admin semoga hari anda menyenangkan</p>
      </div>

      <div class="footer">
        <div class="container">
          <p class="text-muted">&copy FOSTI UMS 2020 build with BOOTSTRAP</p>
        </div>
      </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
} else {
  echo "<script>window.location='login/';</script>";
}
?>