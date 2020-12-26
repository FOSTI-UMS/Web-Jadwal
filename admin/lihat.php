<?php
session_start();
if (isset($_SESSION['user'])) {
	require_once('../config/koneksi.php');
?>
<div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <td>#</td>
              <td>Nim</td>
              <td>Nama</td>
              <td>Aksi</td>
            </tr>
            <?php
            $sql = "SELECT * FROM tbl_anggota ORDER BY nim desc";
            $hasil = mysqli_query($dbc, $sql);
            if(mysqli_num_rows($hasil) > 0){
              $no=1;
              while($row = mysqli_fetch_assoc($hasil)){
                ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $row['nim']; ?></td>
              <td><?php echo $row['nama']; ?></td>
              <td><a class='btn btn-danger btn-sm glyphicon glyphicon-remove' onclick='hapus("<?php echo $row['nim']; ?>");'></a></td>
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
        <script type="text/javascript">
          function hapus(nim) {
            var a=confirm('Apakah Anda Yakin ?');
            b=nim;
            if (a== true) { 
              $('#konten').hide().load('()hapus.php?nim='+b).fadeIn('normal');
            } else {
             return false;
            }
            
          }
        </script>
<?php
} else {
	echo "<script>alert('Anda Belum Login');window.location='login/';</script>";
}
?>