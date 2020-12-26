<?php 
session_start();
if (isset($_SESSION['anggota'])) {
include_once('../config/koneksi.php');
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
    <title>Anggota Page - Data Kuisioner | Kuisioner Jadwal Fosti</title>

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
            <li><a href="input.php">Input Data</a></li>
            <li class="active"><a href="data.php">Data Kuisioner</a></li>
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
          <h1>Data Kuisioner Jadwal FOSTI</h1>
        </div>
        <p class="lead">Berikut adalah data kuisioner anda.</p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td>#</td>
              <td>Nim</td>
              <td>Nama</td>
              <td>Divisi</td>
              <td>Senin</td>
              <td>Selasa</td>
              <td>Rabu</td>
              <td>Kamis</td>
              <td>Jumat</td>
              <td>Sabtu</td>
            </tr>
            <?php
            $nim=$_SESSION['anggota'];
            $sql = "SELECT * FROM tbl_anggota WHERE nim='$nim'";
            $hasil = mysqli_query($dbc, $sql);
            if(mysqli_num_rows($hasil) > 0){
              $no=1;
              while($row = mysqli_fetch_assoc($hasil)){
                ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $row['nim']; ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td><?php echo $row['divisi']; ?></td>
              <td><?php echo $row['senin']; ?></td>
              <td><?php echo $row['selasa']; ?></td>
              <td><?php echo $row['rabu']; ?></td>
              <td><?php echo $row['kamis']; ?></td>
              <td><?php echo $row['jumat']; ?></td>
              <td><?php echo $row['sabtu']; ?></td>
            </tr>
            <?php
            $no++;
              } 
            } else {
              echo "<td colspan='4'>Data Kosong...</td>";
            }

            ?>
          </table>
        </div>
      </div>

      <div class="footer">
        <div class="container">
          <p class="text-muted">&copy FOSTI UMS 2020 build with BOOTSTRAP</p>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.hover').popover({
            title:fetchData,
            html:true,
            placement:'left'
          });

          function fetchData() {
            var fetch_data='';
            var element=$(this);
            var id=element.attr('id');
            $.ajax({
              url:'()fetch.php',
              method:'POST',
              async:false,
              data:{id:id},
              success:function(data) {
                fetch_data=data;
              }
            })
            return fetch_data;
          }

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