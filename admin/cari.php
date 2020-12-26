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
    <title>Admin Page - Cari Data | Kuisioner Jadwal Fosti</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/footer-navbar.css" rel="stylesheet">
    <script src="../assets/js/jquery.min.js"></script>

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
            <li><a href="./">Home</a></li>
            <li><a href="data.php">Data Anggota</a></li>
            <li class="active"><a href="cari.php">Cari Data Anggota</a></li>
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
          <h1>Cari Jadwal Anggota Berdasarkan NIM</h1>
        </div>
        <p class="lead">Cari dan lihat data jadwal anggota fosti berdasarkan NIM. Pastikan anda menginputkan / mencari dengan <code>NIM</code> yang benar.</p>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12">
            <form id="formcari">
              <p><b>NIM ANGGOTA :</b></p>
              <div class="input-group input-group-md">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="Masukkan Nim..." name="nim">
              </div>
              <br>
              <div class="input-group input-group-md">
                <input type="submit" class="btn btn-primary" name="submit" value="Cari Anggota">
                <input type="reset" class="btn btn-info" name="reset" value="Reset Nim">
              </div>
              <br>
            </form>
            </div>
            <div class="col-md-6 col-sm-12">
              <p><b>HASIL PENCARIAN :</b></p>
              <div id="hasil">
                <p>Hasil Pencarian akan Terlihat di sini</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer">
        <div class="container">
          <p class="text-muted">&copy FOSTI UMS 2020 build with BOOTSTRAP</p>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#formcari').submit(function() {
            $.ajax({
              type: 'POST',
              url: '()cari.php',
              data: $(this).serialize(),
              success: function(data) {
                $('#hasil').hide().fadeIn('slow').html(data);
              }
             })
              return false;
            });
        });
      </script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
} else {
  echo "<script>window.location='login/';</script>";
}
?>