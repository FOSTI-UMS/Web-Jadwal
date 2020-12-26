<?php
session_start();
if (isset($_SESSION['user'])) {
  if (isset($_GET['nim'])) {
    include_once('../config/koneksi.php');
    $output='';
    $nim=mysqli_escape_string($dbc, $_GET['nim']);
    $query=mysqli_query($dbc,"SELECT * FROM tbl_anggota WHERE nim='$nim'");
    $hasil=mysqli_fetch_array($query);
    $cek=mysqli_num_rows($query);
    if ($cek > 0) {
?>
<script src="../assets/js/jquery.min.js"></script>
<form id="perbarui">
  <h4>Nama</h4>
  <div class="input-group input-group-md">
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" placeholder="Masukkan Nama.." name="nama" value="<?php echo $hasil['nama'];?>">
  </div>
  <br>
  <h4>Nim</h4>
  <div class="input-group input-group-md">
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" placeholder="Masukkan Nim..." name="nim1" value="<?php echo $hasil['nim'];?>">
    <input type="hidden" class="form-control" name="nim" value="<?php echo $hasil['nim'];?>">
  </div>
  <br>
    <div class="input-group input-group-md">
      <table class="table">
        <tr>
          <td><h4>Pilih Divisi</h4></td>
          <td>Divisi Sebelumnya (<?php echo $hasil['divisi'];?>). Jika Data Salah Koreksi, jika tidak salah pilih seperti sebelumnya.</td>
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
    <br>
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
      <input type="submit" name="submit" value="Perbarui Data" class="btn btn-success btn-lg"> 
    </div>
    <br>
  </form>
  <script type="text/javascript">
        $(document).ready(function(){
          $('#perbarui').submit(function() {
            $.ajax({
              type: 'POST',
              url: '()edit.php',
              data: $(this).serialize(),
              success: function(data) {
                $('#hasil').hide().fadeIn('slow').html(data);
              }
             })
              return false;
            });
        });
  </script>
<?php
    } else {
      echo "
    <div class='alert alert-danger' role='alert'>
    <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
    <p>Data Anggota Tidak Di Temukan !!</p>
      </div>";
    }
  } else {
    echo "{ERROR:400}";
  }
} else {
  echo "<script>alert('Anda Belum Login');window.location='login/';</script>";
}
?>