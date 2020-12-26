<?php
session_start();
if (!isset($_SESSION['user'])) {
	if (isset($_POST['username'])AND(isset($_POST['password']))) {
			include_once('../../config/koneksi.php');
			$username=mysqli_escape_string($dbc, $_POST['username']);
			$password=mysqli_escape_string($dbc, $_POST['password']);
			$query=mysqli_query($dbc,"SELECT username,password FROM tbl_admin WHERE username='$username'");
			$cek=mysqli_num_rows($query);
			$hasil=mysqli_fetch_array($query);
			if ($cek > 0) {
				if ($hasil['password']==$password) {
					$_SESSION['user']=$username;
					echo "<script>window.location='../';</script>";
				} else {
					echo "<script>window.location='./?message=password';</script>";			
				}
			} else {
					echo "<script>window.location='./?message=username';</script>";
			}
	} else {
		echo "<script>alert('{ERROR:000}');window.location='./';</script>";
	}
} else {
	echo "<script>window.location='../';</script>";
}
?>