<?php
session_start();
if (isset($_SESSION['user'])) {
	if (isset($_POST['nim'])) {
		include_once('../config/koneksi.php');
		$nama=$_POST['nama'];
		$nim=mysqli_escape_string($dbc,$_POST['nim']); // lama untuk cek
		$nim1=$_POST['nim1']; // baru
		$div=$_POST['div'];
		$senin=mysqli_escape_string($dbc, implode(', ',$_POST['senin']));
		$selasa=mysqli_escape_string($dbc, implode(', ',$_POST['selasa']));
		$rabu=mysqli_escape_string($dbc, implode(', ',$_POST['rabu']));
		$kamis=mysqli_escape_string($dbc, implode(', ',$_POST['kamis']));
		$jumat=mysqli_escape_string($dbc, implode(', ',$_POST['jumat']));
		$sabtu=mysqli_escape_string($dbc, implode(', ',$_POST['sabtu']));

		if ($div=='1' or $div=='2' or $div=='3' or $div=='4' or $div=='5') {
			if ($div=='1') {
				$div='Web dan Jaringan';
			} elseif ($div=='2') {
				$div='Keilmuan dan Riset Teknologi';
			} elseif ($div=='3') {
				$div='Keorganisasian';
			} elseif ($div=='4') {
				$div='Hubungan Publik';
			} elseif ($div=='5') {
				$div='Anggota';
			} 
			$query1=mysqli_query($dbc,"SELECT * FROM tbl_anggota WHERE nim='$nim'");
			$cek=mysqli_num_rows($query1);
			if ($cek ==1) {
				$query2=mysqli_query($dbc,"UPDATE tbl_anggota SET nim='$nim1',nama='$nama', divisi='$div',senin='$senin', selasa ='$selasa', rabu='$rabu', kamis='$kamis', jumat='$jumat', sabtu='$sabtu' WHERE nim ='$nim'");
				if ($query2) {
					echo "
					<div class='alert alert-success' role='alert'>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					<p>Data Berhasil di PERBARUI, silahkan cek data di <a href='cari.php'>sini</a> !!</p>
				    </div>
					";
				} else {
					echo "
					<div class='alert alert-danger' role='alert'>
					<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
					<p>Gagal di Perbaruhi !!</p>
				    </div>					
					";
				}
			} else {
				echo "
				<div class='alert alert-danger' role='alert'>
				<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
				<p>Data Anggota Tidak Di Temukan !!</p>
			    </div>
				";
			}


		} else {
			echo "
			<div class='alert alert-danger' role='alert'>
			<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
			<p>ERROR:DIVISI SALAH!!</p>
		    </div>
			";
		}
	} else {
		echo "{ERROR:400}";
	}
} else {
	echo "<script>alert('Anda Belum Login');window.location='login/';</script>";
}
?>