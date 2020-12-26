<?php 
error_reporting(0);
if (isset($_POST['nama'])AND(isset($_POST['nim'])AND(isset($_POST['div'])AND(isset($_POST['g-recaptcha-response']))))) {
	$captcha		= $_POST['g-recaptcha-response'];
	$secretKey		= "6LcEZksUAAAAAEZWz2xZCEJGizLGOld42KvRKKKb";
	$ip 			= $_SERVER['REMOTE_ADDR'];
	$response		= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys	= json_decode($response,true);

	if (intval($responseKeys["success"]) != 1) {
		echo "<script>alert('Belum Di Centang captchanya');window.location='./'</script>";
	} else {
			function get_client_ip() {
				$ipaddress = '';
			    if (isset($_SERVER['HTTP_CLIENT_IP'])){
			        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
			    }
			    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
			        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
			    }
			    else if(isset($_SERVER['HTTP_X_FORWARDED'])){
			        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
			    }
			    else if(isset($_SERVER['HTTP_FORWARDED_FOR'])){
			        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
			    }
			    else if(isset($_SERVER['HTTP_FORWARDED'])){
			        $ipaddress = $_SERVER['HTTP_FORWARDED'];
			    }
			    else if(isset($_SERVER['REMOTE_ADDR'])){
			        $ipaddress = $_SERVER['REMOTE_ADDR'];
			    }
			    else{
			        $ipaddress = 'UNKNOWN';
			    }
			    return $ipaddress;
			}
			include_once('../config/koneksi.php');
			$nama=$_POST['nama'];
			$nim=$_POST['nim'];
			$div=$_POST['div'];
			$senin=mysqli_escape_string($dbc, implode(', ',$_POST['senin']));
			$selasa=mysqli_escape_string($dbc, implode(', ',$_POST['selasa']));
			$rabu=mysqli_escape_string($dbc, implode(', ',$_POST['rabu']));
			$kamis=mysqli_escape_string($dbc, implode(', ',$_POST['kamis']));
			$jumat=mysqli_escape_string($dbc, implode(', ',$_POST['jumat']));
			$sabtu=mysqli_escape_string($dbc, implode(', ',$_POST['sabtu']));
			if ($nim=='') {
				echo "<script>alert('Cie Inspect Element Ya... Log Ip Anda Tercatat hloo..');window.location='./';</script>";
			} else {
				if ($div=='1' or $div=='2' or $div=='3' or $div=='4' or $div=='5') {
					if ($div=='1') {
						$div='Website & Jaringan';
					} elseif ($div=='2') {
						$div='Riset Teknologi';
					} elseif ($div=='3') {
						$div='Keorganisasian';
					} elseif ($div=='4') {
						$div='Hubungan Publik';
					} elseif ($div=='5') {
						$div='Anggota';
					} 
					$query1=mysqli_query($dbc,"SELECT * FROM tbl_anggota WHERE nim='$nim'");
					$cek=mysqli_num_rows($query1);
					if ($cek !=1) {
						$query2=mysqli_query($dbc,"INSERT INTO tbl_anggota VALUES ('$nim','$nama','$div','$senin','$selasa','$rabu','$kamis','$jumat','$sabtu','$ipaddress')");
						if ($query2) {
							echo "<script>alert('Data Berhasil Dikirim');window.location='./?berhasil'</script>";
						}
					} else {
						echo "<script>alert('Anda Sudah Memasukkan Data, untuk Memperbarui Data Silahkan Contact Admin Web');window.location='./';</script>";
					}


				} else {
					echo "<script>alert('{ERROR:DIVISI SALAH}');window.location='./';</script>";
				}
			}
	}
} else {
	echo "<script>alert('Anda Belum Memasukkan Data');window.location='./';</script>";
}

?>