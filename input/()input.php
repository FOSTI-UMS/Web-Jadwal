<?php
session_start();
if (isset($_SESSION['anggota'])) {	
	include_once('../config/koneksi.php');
	$nim=$_SESSION['anggota'];
	$cek=mysqli_query($dbc,"SELECT status FROM tbl_anggota WHERE nim='$nim'");
	$hasil=mysqli_fetch_array($cek);
	if ($hasil['status']==0) {
		if (isset($_POST['nim'])) {
			$nim1=mysqli_escape_string($dbc,$_POST['nim']);
			if ($nim1==$nim) {
				$senin=mysqli_escape_string($dbc, implode(', ',$_POST['senin']));
				$selasa=mysqli_escape_string($dbc, implode(', ',$_POST['selasa']));
				$rabu=mysqli_escape_string($dbc, implode(', ',$_POST['rabu']));
				$kamis=mysqli_escape_string($dbc, implode(', ',$_POST['kamis']));
				$jumat=mysqli_escape_string($dbc, implode(', ',$_POST['jumat']));
				$sabtu=mysqli_escape_string($dbc, implode(', ',$_POST['sabtu']));
				$query=mysqli_query($dbc,"UPDATE tbl_anggota SET status=1, senin='$senin', selasa ='$selasa', rabu='$rabu', kamis='$kamis', jumat='$jumat', sabtu='$sabtu' WHERE nim ='$nim'");
				if ($query) {
					echo "
					<div class='alert alert-success' role='alert'>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					<p>Data Berhasil di Input, silahkan cek data di <a href='data.php'>sini</a> !!</p>
				    </div>
					";
				} else {
					echo "
					<div class='alert alert-danger' role='alert'>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					<p>Gagal di Perbarui !!</p>
				    </div>					
					";
				}
			} else {
				echo "<div class='alert alert-danger' role='alert'>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					<p>HAYOO MAU NGAPAIN JANCOK ?</p>
				    </div>";
			}
		} else {
			echo "
					<div class='alert alert-success' role='alert'>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					<p>{ERROR}:{101}</p>
				    </div>
				    ";
		}
	} else {
		echo "
			<div class='alert alert-success' role='alert'>
			<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
			<p>Anda Sudah Memasukkan Data !!</p>
				    </div>";
	}
} else {
	echo "<script>alert('Anda Harus Login Dulu');window.location='login/';";
}

?>