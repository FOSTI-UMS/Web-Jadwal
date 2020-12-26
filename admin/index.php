<?php 
session_start();
if (isset($_SESSION['user'])) {
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
    <title>Admin Page | Kuisioner Jadwal Fosti</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/footer-navbar.css" rel="stylesheet">

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
            <li><a href="data.php">Data Anggota</a></li>
            <li><a href="cari.php">Cari Data Anggota</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lainnya <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="edit.php">Edit Data</a></li>
                <li><a href="delete.php">Hapus Data</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Data</li>
                <li><a href="eskpor.php">Export Excel</a></li>
                <li class="divider"></li>
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
          <h1>Selamat Datang Admin</h1>
        </div>
        <p class="lead">[UPDATE] MAINTENIS :</p>
        <ul type="1">
          <li>Penambahan Login untuk Anggota.</li>
          <li>Penghapusan IP Address.</li>
          <li>Fiture Hapus Hanya digunakan untuk masalah URGENT SAJA.</li>
        </ul>
        <p class="lead">Kelola Halaman Administrasi Kuisioner Jadwal Fosti. <code>Data Anggota</code> untuk Melihat data anggota yang teah menginputkan kuisioner. <code>Edit</code> Untuk Meng Edit data anggota berdasarkan NIM.</p>
        <p><b>TPIS :</b></p>
        <ul type='1'>
          <li>Jika ada anggota yang salah menginputkan data dan meminta di benarkan sebaiknya segera di perbaiki.</li>
          <li>Jika ada anggota yang melakukan SPAM. Admin wajib membersihkan spam tersebut agar tidak menyebabkan database menjadi besar.</li>
          <li>keluar / logout lah ketika selesai beraktivitas.</li>
        </ul>
        <p>Kelola lah website ini dengan bijak, jika terdapat aktivitas mencurigakan segeralah di tindak lanjuti.</p>
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