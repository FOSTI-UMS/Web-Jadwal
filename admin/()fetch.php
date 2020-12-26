<?php
session_start();
if (isset($_SESSION['user'])) {
	if (isset($_POST['id'])) {
		include_once('../config/koneksi.php');
		$output='';
		$nim=mysqli_escape_string($dbc, $_POST['id']);
		$query=mysqli_query($dbc,"SELECT * FROM tbl_anggota WHERE nim='$nim'");
		while ($row=mysqli_fetch_array($query)) {
			$output="
			<p><img src='../assets/img/profile/1.jpg' class='img-responsive img-thumbnail'></img></p>
			<p><label>Nama </label>:".$row['nama']."</p>
			<p><label>Nim </label>:".$row['nim']."</p>
			<p><label>Senin </label>:".$row['senin']."</p>
			<p><label>Selasa </label>:".$row['selasa']."</p>
			<p><label>Rabu </label>:".$row['rabu']."</p>
			<p><label>Kamis </label>:".$row['kamis']."</p>
			<p><label>Jumat </label>:".$row['jumat']."</p>
			<p><label>Sabtu </label>:".$row['sabtu']."</p>
			";
		}
		echo $output;
	} else {
		echo "{ERROR:400}";
	}
} else {
	echo "<script>alert('Anda Belum Login');window.location='login/';</script>";
}
?>