<?php
error_reporting(0);
$host='localhost';
$username='u5782209_root';
$password='r00tind0l0e1337';
$database='u5782209_jadwal';

$dbc=mysqli_connect($host, $username, $password) or die ('Koneksi Gagal');

mysqli_select_db($dbc, $database) or die ('Dataabse Tidak Ada');


?>