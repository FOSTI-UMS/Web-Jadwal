<?php
session_start();
if (!isset($_SESSION['anggota'])) {
	if (isset($_POST['nim'])AND(isset($_POST['password']))) {
			include_once('../../config/koneksi.php');
			$nim=mysqli_escape_string($dbc, $_POST['nim']);
			$password=mysqli_escape_string($dbc, $_POST['password']);
			$query=mysqli_query($dbc,"SELECT nim,password FROM tbl_anggota WHERE nim='$nim'");
			$cek=mysqli_num_rows($query);
			$hasil=mysqli_fetch_array($query);
			if ($cek > 0) {
				if ($password==$hasil['password']) {
					$_SESSION['anggota']=$nim;
					$_SESSION['anggota_password']=$password;
					echo "<script>window.location='../';</script>";
				} else {
					echo "<script>window.location='./?message=password';</script>";			
				}
			} else {
					echo "<script>window.location='./?message=nim';</script>";
			}
	} else {
		echo "<script>alert('{ERROR:000}');window.location='./';</script>";
	}
} else {
	echo "<script>alert('Anda Sudah Login.');window.location='../';</script>";
}
?>