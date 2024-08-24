<?php
include ('../koneksi.php');
require "../vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet -> setCellValue('A1','Data Prodi');

$sheet ->setCellValue('A3', 'No');
$sheet ->setCellValue('B3', 'Id Prodi');
$sheet ->setCellValue('C3', 'Nama Prodi');

$database= new database();
$query ="SELECT * FROM prodi ORDER BY id_prodi ASC";
$cetakprodi = mysqli_query($database->koneksi, $query);
$no = 1;
$baris=4;
while ($data = mysqli_fetch_array($cetakprodi)) {
    $sheet->setCellValue('A'.$baris, $no);
    $sheet->setCellValue('B'.$baris, $data['id_prodi']);
    $sheet->setCellValue('C'.$baris, $data['nama_prodi']);
    $no++;
    $baris++;
}
$writer= new Xlsx($spreadsheet);
$writer->save('../data_prodi.xlsx');
header ('location: ../data_prodi.xlsx');