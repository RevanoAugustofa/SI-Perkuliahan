<?php
include ('../koneksi.php');
require "../vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet -> setCellValue('A1', 'Data Kelas');

$sheet -> setCellValue('A3', 'No');
$sheet -> setCellValue('B3', 'Id Kelas');
$sheet -> setCellValue('C3', 'Nama Kelas');
$sheet -> setCellValue('D3', 'Tahun Akademik');
$sheet -> setCellValue('E3', 'Id Prodi');

$database= new database();
$query= "SELECT * FROM kelas join prodi on kelas.id_prodi = prodi.id_prodi ORDER BY id_kls ASC";
$cetakkelas=mysqli_query($database->koneksi, $query);
$no=1;
$baris=4;
while ($data = mysqli_fetch_array($cetakkelas)) {
    $sheet->setCellValue('A'.$baris, $no);
    $sheet->setCellValue('B'.$baris, $data['id_kls']);
    $sheet->setCellValue('C'.$baris, $data['nama_kls']);
    $sheet->setCellValue('D'.$baris, $data['thn_akademik']);
    $sheet->setCellValue('E'.$baris, $data['nama_prodi']);
    $no++;
    $baris++;
}
$writer = new Xlsx($spreadsheet);
$writer->save('../data_kelas.xlsx');
header('location:../data_kelas.xlsx');