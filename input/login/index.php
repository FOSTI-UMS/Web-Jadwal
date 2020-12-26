<?php
session_start();
if (!isset($_SESSION['anggota'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.png">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>Login Anggota | Jadwal Kuisioner Fosti</title>

    <!-- Bootstrap -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      .login .container {
        margin-top: 0px;
        max-width: 500px;
      }
      .kotaklogin .container {
        margin-top: 0px;
      }
    </style>
    <script type="text/javascript">
      function cek() {
        window.alert("Apakah anda sudah yakin telah memasukkan data ? ");
      }
    </script>
  </head>
  <body>
	<section class="login">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h1><b>Login</b></h1>
					<h4>Sebelum Anda Mengakses Halaman, Anda Harus Login Terlebih Dahulu</h4>
					<hr>
				</div>
			</div>
		</div>
	<form action="()login.php" method="POST" name="form_login">
		<div class="container text-center">
      <div class="kotaklogin">
        <div class="row">
          <div class="col-sm-12">
            <div class="message">
                <div class="alert alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <strong>INFO</strong> Untuk Mendapatkan Password silahkan contact admin.
                </div>
              <?php if (isset($_GET['message'])) { ?>
                <?php if ($_GET['message']=='nim') { ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <strong>LOGIN GAGAL!</strong><br>Username Yang Anda Masukkan Salah.
                </div>
                <?php } ?>
                <?php if ($_GET['message']=='password') { ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <strong>LOGIN GAGAL!</strong><br>Password Yang Anda Masukkan Salah.
                </div>
                <?php } ?>
                <?php if ($_GET['message']=='captcha') { ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <strong>LOGIN GAGAL!</strong><br>CAPTCHA KOSONG.
                </div>
                <?php } ?>
              <?php } ?>
            </div>
            <h3>NIM</h3>
            <input required="" type="text" name="nim" class="form-control" placeholder="Masukkan Username..">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <h3>Password</h3>
            <input required="" type="password" name="password" class="form-control" placeholder="Masukkan Password..">
          </div>
        </div>
        <br>
        <!-- <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LcEZksUAAAAAKue4ZRzplQjmNIbB78ezMVfVGGS"></div>
            </div> -->
            <br>
            <input class="btn btn-success btn-lg" name="login" type="submit" value="LOGIN"></input>
            <input class="btn btn-primary btn-lg" name="reset" type="reset" value="RESET"></input>
          </div>
        </div>        
      </div>
		</div>
	</form>
	</section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../assets/js/bootstrap.min.js"></script>
  </body>
</html>
<?php 
} else {
  echo "<script>alert('Anda Sudah Login.');window.location='../';</script>";
}
?>
