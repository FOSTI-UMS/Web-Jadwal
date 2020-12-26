<?php
session_start();
if (isset($_SESSION['user'])) {
	require_once('../config/koneksi.php');
?>
<div class="row">
  <div class="col-sm-6">
    <form id="hapusnim">
      <p><b>NIM ANGGOTA :</b></p>
        <div class="input-group input-group-md">
          <span class="input-group-addon">@</span>
            <input type="text" class="form-control" placeholder="Masukkan Nim..." name="nim">
        </div>
        <br>
        <div class="input-group input-group-md">
          <input type="submit" name="submit" class="btn btn-danger btn-md" value="HAPUS">
        </div>
    </form>
  </div>
  <div class="col-sm-6">
    <p><b>HASIL :</b></p>
    <div id="hasil">
      <p>Hasil Akan Terlihat di sini.</p>
    </div>
  </div>
</div>
        <script type="text/javascript">
        $(document).ready(function(){
          $('#hapusnim').submit(function() {
            $.ajax({
              type: 'GET',
              url: '()hapus.php',
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
	echo "<script>window.location='login/';</script>";
}
?>