<?php
include_once('../config/koneksi.php');
session_start();
session_destroy();
echo "<script>window.location='../';</script>";
?>