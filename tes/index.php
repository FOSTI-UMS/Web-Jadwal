<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website Kuisioner Jadwal Fosti UMS. Website untuk mengisi Kuisioner Jadwal di Organisasi Fosti UMS.">
    <meta name='keyword' content="Kuisioner Jadwal Fosti UMS">
    <meta name="author" content="Fosti UMS">
    <title>input Kuisioner Jadwal | Fosti Jadwal</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style-input.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="icon" href="../favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="jumbotron text-center">
      <h2>Halaman Input Kuisioner Jadwal</h2>
      <h3>SEMESTER GENAP</h3>
    </div>
    <section class="note">
      <div class="container">
        <div class="alert alert-danger" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4>NOTE !!</h4>
          <p style="font-family: tahoma;">Masukkan Data Anda Dengan Benar, Data tidak dapat di ganti. Data Hanya dapat di ganti oleh admin jika anda meng inputkan data salah silahkan contact admin agar data anda di perbarui.</p>
        </div>
      </div>
    </section>
    <section class="reg">
      <div class="container-fluid">
        <div class="row text-center">
          <form action="()kirim.php" method="POST">
            <div class="col-md-6 col-sm-12 text-left">
              <h4>Nama</h4>
              <div class="input-group input-group-md">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="Masukkan Nama..." name="nama">
              </div>
              <br>
              <h4>Nim</h4>
              <div class="input-group input-group-md">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="Masukkan Nim..." name="nim">
              </div>
              <br>
              <div class="input-group input-group-md">
                <table class="table">
                  <tr>
                    <td><h4>Pilih Divisi</h4></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="radio" name="div" value="1"> Website & Jaringan</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="radio" name="div" value="2"> Riset Teknologi</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="radio" name="div" value="3"> Keorganisasian</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="radio" name="div" value="4"> Hubungan Publik</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="radio" name="div" value="5"> Anggota</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
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
              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LcEZksUAAAAAKue4ZRzplQjmNIbB78ezMVfVGGS"></div>
              </div>
              <div class="input-group input-group-md">
              <input type="submit" name="submit" value="Kirim Data" class="btn btn-success btn-lg">
              <input type="reset" name="reset" value="Reset Data" class="btn btn-primary btn-lg">  
              </div>
        
            </div>
          </form>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-md-6">
            <h3>ABOUT</h3>
            <p>Website Kuisioner Jadwal ini digunakan untuk seluruh anggota fosti untuk menginputkan jadwal kuliah mereka yang akan di gunakan divisi keorganisasian untuk masalah pendataan.</p>
          </div>
          <div class="col-xs-6 col-md-3">
            <h3>Our Link</h3>
            <a href="../">Home</a>
            <div class="line"><hr></div>
            <a href="">Kuisioner</a>
            <div class="line"><hr></div>
            <a href="">Contact Admin</a>
            <div class="line"><hr></div>
            <a href="../cek/">Cek Data</a>
          </div>
          <div class="col-xs-6 col-md-3">
            <h3>ADMIN KUISIONER</h3>
            <a onclick="cp('salsa');" href="#">Salsa</a>
            <div class="line"><hr></div>
            <a onclick="cp('Vicky');" href="#">Vicky</a>
            <div class="line"><hr></div>
            <a onclick="cp('Falah');" href="#">Falah</a>
            <div class="line"><hr></div>
            <a onclick="cp('bintang');" href="#">Bintang</a>
            <div class="line"><hr></div>
            <br>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <p class="copyright-text">Copyrights &copy; 2018 All Rights Reserved by <a href="">Fosti Ums</a>.</p>
          </div>
        </div>
      </div>
    </footer>  
    <script type="text/javascript">
      function cp(nama) {
          var nama, no;
          no=' 08157 8229 762';
          if (nama=='bintang') {
            nama='Bintang Kusuma. no WA :';
            alert(nama + no);
          } else if (nama=='salsa') {
            no=' 0813 3669 2257'
            nama='Salsa. no WA :';
            alert(nama + no);
          } else if (nama=='Vicky') {
            no=' 0822 6633 5773';
            nama='Al Vicky. no WA :';
            alert(nama + no);
          } else if (nama=='Falah') {
            no=' 0815 7825  8854';
            nama='Falah. no WA :';
            alert(nama + no);
          }
        } 
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>