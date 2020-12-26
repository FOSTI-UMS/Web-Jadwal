<?php 
session_start();
if (isset($_SESSION['anggota'])) {
include_once('../config/koneksi.php');
$nim=$_SESSION['anggota'];
$cek=mysqli_query($dbc,"SELECT * FROM tbl_anggota WHERE nim='$nim'");
$hasil=mysqli_fetch_array($cek);
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
    <title>Anggota Page - Input Anggota | Kuisioner Jadwal Fosti</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="footer-navbar.css" rel="stylesheet">
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
            <li class="active"><a href="input.php">Input Data</a></li>
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
        <?php
        if ($hasil['status']==1) { ?>
            <h1>ERROR</h1>
            </div>
            <p class="lead">Anda telah menginputkan kuisioner. jika ada kesalahan dalam penginputan daya silahkan contact <code>ADMIN</code> untuk melakukan perubahan data. dan jika admin sudah mengkonfirmasi bahwa suda di ubah silahkan cek kembali data anda.</p>
        <?php } else  { ?>

          <h1>Input Kuisioner Jadwal FOSTI</h1>
        </div>
        <p class="lead">Silahkan isi data kuisioner.</p>
        <div class="container">
          <div class="row">
        <form id='input'>
          <div class="col-md-6 col-sm-12">
              <h5>Nim</h5>
              <div class="input-group input-group-md">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="Masukkan Nim..." name=""  value="<?php echo $_SESSION['anggota'];?>" disabled=''>
                <input type="hidden" name="nim" value="<?php echo $_SESSION['anggota']; ?>">
              </div><br>
              <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Jam</td>
                  <td>Senin</td>
                  <td>Selasa</td>
                  <td>Rabu</td>
                  <td>Kamis</td>
                  <td>Jumat</td>
                  <td>Sabtu</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td><input type="checkbox" name="senin[]" value="1"></td>
                  <td><input type="checkbox" name="selasa[]" value="1"></td>
                  <td><input type="checkbox" name="rabu[]" value="1"></td>
                  <td><input type="checkbox" name="kamis[]" value="1"></td>
                  <td><input type="checkbox" name="jumat[]" value="1"></td>
                  <td><input type="checkbox" name="sabtu[]" value="1"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><input type="checkbox" name="senin[]" value="2"></td>
                  <td><input type="checkbox" name="selasa[]" value="2"></td>
                  <td><input type="checkbox" name="rabu[]" value="2"></td>
                  <td><input type="checkbox" name="kamis[]" value="2"></td>
                  <td><input type="checkbox" name="jumat[]" value="2"></td>
                  <td><input type="checkbox" name="sabtu[]" value="2"></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><input type="checkbox" name="senin[]" value="3"></td>
                  <td><input type="checkbox" name="selasa[]" value="3"></td>
                  <td><input type="checkbox" name="rabu[]" value="3"></td>
                  <td><input type="checkbox" name="kamis[]" value="3"></td>
                  <td><input type="checkbox" name="jumat[]" value="3"></td>
                  <td><input type="checkbox" name="sabtu[]" value="3"></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><input type="checkbox" name="senin[]" value="4"></td>
                  <td><input type="checkbox" name="selasa[]" value="4"></td>
                  <td><input type="checkbox" name="rabu[]" value="4"></td>
                  <td><input type="checkbox" name="kamis[]" value="4"></td>
                  <td><input type="checkbox" name="jumat[]" value="4"></td>
                  <td><input type="checkbox" name="sabtu[]" value="4"></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><input type="checkbox" name="senin[]" value="5"></td>
                  <td><input type="checkbox" name="selasa[]" value="5"></td>
                  <td><input type="checkbox" name="rabu[]" value="5"></td>
                  <td><input type="checkbox" name="kamis[]" value="5"></td>
                  <td><input type="checkbox" name="jumat[]" value="5"></td>
                  <td><input type="checkbox" name="sabtu[]" value="5"></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><input type="checkbox" name="senin[]" value="6"></td>
                  <td><input type="checkbox" name="selasa[]" value="6"></td>
                  <td><input type="checkbox" name="rabu[]" value="6"></td>
                  <td><input type="checkbox" name="kamis[]" value="6"></td>
                  <td><input type="checkbox" name="jumat[]" value="6"></td>
                  <td><input type="checkbox" name="sabtu[]" value="6"></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td><input type="checkbox" name="senin[]" value="7"></td>
                  <td><input type="checkbox" name="selasa[]" value="7"></td>
                  <td><input type="checkbox" name="rabu[]" value="7"></td>
                  <td><input type="checkbox" name="kamis[]" value="7"></td>
                  <td><input type="checkbox" name="jumat[]" value="7"></td>
                  <td><input type="checkbox" name="sabtu[]" value="7"></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td><input type="checkbox" name="senin[]" value="8"></td>
                  <td><input type="checkbox" name="selasa[]" value="8"></td>
                  <td><input type="checkbox" name="rabu[]" value="8"></td>
                  <td><input type="checkbox" name="kamis[]" value="8"></td>
                  <td><input type="checkbox" name="jumat[]" value="8"></td>
                  <td><input type="checkbox" name="sabtu[]" value="8"></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td><input type="checkbox" name="senin[]" value="9"></td>
                  <td><input type="checkbox" name="selasa[]" value="9"></td>
                  <td><input type="checkbox" name="rabu[]" value="9"></td>
                  <td><input type="checkbox" name="kamis[]" value="9"></td>
                  <td><input type="checkbox" name="jumat[]" value="9"></td>
                  <td><input type="checkbox" name="sabtu[]" value="9"></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><input type="checkbox" name="senin[]" value="10"></td>
                  <td><input type="checkbox" name="selasa[]" value="10"></td>
                  <td><input type="checkbox" name="rabu[]" value="10"></td>
                  <td><input type="checkbox" name="kamis[]" value="10"></td>
                  <td><input type="checkbox" name="jumat[]" value="10"></td>
                  <td><input type="checkbox" name="sabtu[]" value="10"></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td><input type="checkbox" name="senin[]" value="11"></td>
                  <td><input type="checkbox" name="selasa[]" value="11"></td>
                  <td><input type="checkbox" name="rabu[]" value="11"></td>
                  <td><input type="checkbox" name="kamis[]" value="11"></td>
                  <td><input type="checkbox" name="jumat[]" value="11"></td>
                  <td><input type="checkbox" name="sabtu[]" value="11"></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td><input type="checkbox" name="senin[]" value="12"></td>
                  <td><input type="checkbox" name="selasa[]" value="12"></td>
                  <td><input type="checkbox" name="rabu[]" value="12"></td>
                  <td><input type="checkbox" name="kamis[]" value="12"></td>
                  <td><input type="checkbox" name="jumat[]" value="12"></td>
                  <td><input type="checkbox" name="sabtu[]" value="12"></td>
                </tr>
              </table>
              </div>
              <div class="input-group input-group-md">
              <input type="submit" name="submit" value="Kirim Data" class="btn btn-success btn-lg">
              <input type="reset" name="reset" value="Reset Data" class="btn btn-primary btn-lg">  
              </div>
              <br>
            </div>
        </form>
        <div class="col-md-6 col-sm-12">
          <b>Hasil : </b>
          <div id="hasil">
            * Hasil Akan Terlihat Di sini
          </div>
          <br>
          <br>
        </div>
      </div>
    </div>
        <?php } ?>
      </div>

      <div class="footer">
        <div class="container">
          <p class="text-muted">&copy FOSTI UMS 2020 build with BOOTSTRAP</p>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#input').submit(function() {
            $.ajax({
              type: 'POST',
              url: '()input.php',
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