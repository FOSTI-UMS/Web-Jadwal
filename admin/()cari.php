<?php
session_start();
if (isset($_SESSION['user'])) {
	if (isset($_POST['nim'])) {
		include_once('../config/koneksi.php');
		$output='';
		$nim=mysqli_escape_string($dbc, $_POST['nim']);
		$query=mysqli_query($dbc,"SELECT * FROM tbl_anggota WHERE nim='$nim'");
		$hasil=mysqli_fetch_array($query);
		$cek=mysqli_num_rows($query);
		if ($cek > 0) {
			$output="
			<div class='alert alert-success' role='alert'>
			<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
			=========================================================<br>
			Kuisioner Jadwal Anggota Fosti
			=========================================================<br>
			<label>Nama </label>:".$hasil['nama']."<br>
			<label>Nim </label>:".$hasil['nim']."<br>
			<label>Password </label>:".$hasil['password']."<br>
			<label>Divisi </label>:".$hasil['divisi']."<br>
			<label>Senin </label>:".$hasil['senin']."<br>
			<label>Selasa </label>:".$hasil['selasa']."<br>
			<label>Rabu </label>:".$hasil['rabu']."<br>
			<label>Kamis </label>:".$hasil['kamis']."<br>
			<label>Jumat </label>:".$hasil['jumat']."<br>
			<label>Sabtu </label>:".$hasil['sabtu']."<br>
			=========================================================<br>
			 </div>
			";
			echo $output;
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
	echo "<script>window.location='login/';</script>";
}
?>