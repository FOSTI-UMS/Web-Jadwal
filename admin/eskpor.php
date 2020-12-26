<?php
session_start();
if (isset($_SESSION['user'])) {

# MEMBUAT KONEKSI KE DATABASE
include_once('../config/koneksi.php');

# MENGAMBIL DATA DARI DATABASE MYSQL
$siswa = mysqli_query($dbc,"SELECT * FROM tbl_anggota ORDER BY nim DESC");


/** Include PHPExcel */
require_once('PHPExcel/Classes/PHPExcel.php');

$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Fosti Ums 2020")
							->setLastModifiedBy("Admin Fosti UMS 2020")
							->setTitle("Data Kuisioner Jadwal Fosti 2020")
							->setSubject("Anggota")
							->setDescription("Data Kuisioner Jadwal Fosti 2019/2020")
							->setKeywords("Fosti Ums 2020")
							->setCategory("Keorganisasian");
$row =1;
$objPHPExcel->getActiveSheet()->mergeCells('A1:J1');

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$row, 'REKAP DATA KUISIONER JADWAL FOSTI');

$row+=1;
$objPHPExcel->getActiveSheet()->mergeCells('A2:J2');
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$row, 'TAHUN 2019/2020');
// mulai dari baris ke 2
$row = 4;

// Tulis judul tabel
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$row, '#')
            ->setCellValue('B'.$row, 'Nim')
            ->setCellValue('C'.$row, 'Nama')
            ->setCellValue('D'.$row, 'Divisi')
            ->setCellValue('E'.$row, 'Senin')
            ->setCellValue('F'.$row, 'Selasa')
            ->setCellValue('G'.$row, 'Rabu')
            ->setCellValue('H'.$row, 'Kamis')
            ->setCellValue('I'.$row, 'Jumat')
            ->setCellValue('J'.$row, 'Sabtu');

$nomor 	= 1; // set nomor urut = 1;

$row++; // pindah ke row bawahnya. (ke row 2)

// lakukan perulangan untuk menuliskan data siswa
while( $data = mysqli_fetch_array($siswa)){
	$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$row,  $nomor )
            ->setCellValue('B'.$row, $data['nim'] )
            ->setCellValue('C'.$row, $data['nama'] )
            ->setCellValue('D'.$row, $data['divisi'] )
            ->setCellValue('E'.$row, $data['senin'] )
            ->setCellValue('F'.$row, $data['selasa'] )
            ->setCellValue('G'.$row, $data['rabu'] )
            ->setCellValue('H'.$row, $data['kamis'] )
            ->setCellValue('I'.$row, $data['jumat'] )
            ->setCellValue('J'.$row, $data['sabtu'] );
			
	$row++; // pindah ke row bawahnya ($row + 1)
	$nomor++;
}

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Kuisioner Fosti');

// Set sheet yang aktif adalah index pertama, jadi saat dibuka akan langsung fokus ke sheet pertama
$objPHPExcel->setActiveSheetIndex(0);




// Simpan ke Excel 2007
/* $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('data.xlsx'); */

// Simpan ke Excel 2003
/* $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('data.xls'); */


// Download (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Kuisioner_Jadwal_Fosti.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 

$objWriter->save('php://output');
exit;


/* 
// Download (Excel2003)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data.xls"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');
// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 

$objWriter->save('php://output');
exit;
 */
} else {
	echo "<script>alert('Anda Belum Login');window.location='login/';</script>";
}
?>