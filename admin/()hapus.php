<?php
session_start();
if (isset($_SESSION['user'])) {
	if (isset($_GET['nim'])) {
		include_once('../config/koneksi.php');
		$nim=mysqli_escape_string($dbc, $_GET['nim']);
		if ($nim=='') {
			echo "{ERROR:400}";
		} else {
			$q=mysqli_query($dbc,"SELECT nim FROM tbl_anggota WHERE nim='$nim'");
			$hasil=mysqli_num_rows($q);
			if ($hasil>0) {
				$query=mysqli_query($dbc,"DELETE FROM tbl_anggota WHERE nim='$nim'");
				if ($query) {
					echo "
					<div class='alert alert-success' role='alert'>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					<p>Data Berhasil di Hapus. Silahkan Cek Data. !!</p>
				    </div>
					";
				} else {
					echo "
					<div class='alert alert-danger' role='alert'>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					<p>Data Gagal di hapus. !!</p>
				    </div>
					";
				}

			} else {
				echo "
					<div class='alert alert-danger' role='alert'>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					<p><b>Gagal Di Hapus!!</b> Data Anggota Tidak Ada. !!</p>
				    </div>
					";
			}
		}
	} else {
		echo "{ERROR:400}";
	}
} else {
	echo "<script>alert('Anda Belum Login');window.location='login/';</script>";
}
?>