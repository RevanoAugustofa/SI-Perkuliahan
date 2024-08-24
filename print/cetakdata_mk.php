<?php
include ('../koneksi.php');
require "../vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet -> setCellValue('A1', 'Data Matakuliah');

$sheet -> setCellValue('A3', 'No');
$sheet -> setCellValue('B3', 'Id Matakuliah');
$sheet -> setCellValue('C3', 'Kode Matakuliah');
$sheet -> setCellValue('D3', 'Nama');
$sheet -> setCellValue('E3', 'SKS');

$database= new database();
$query= "SELECT * FROM matkul ORDER BY id_mk ASC";
$cetakmk=mysqli_query($database->koneksi, $query);
$no=1;
$baris=4;
while ($data = mysqli_fetch_array($cetakmk)) {
    $sheet->setCellValue('A'.$baris, $no);
    $sheet->setCellValue('B'.$baris, $data['id_mk']);
    $sheet->setCellValue('C'.$baris, $data['kode_mk']);
    $sheet->setCellValue('D'.$baris, $data['nama_mk']);
    $sheet->setCellValue('E'.$baris, $data['sks']);
    $no++;
    $baris++;
}
$writer = new Xlsx($spreadsheet);
$writer->save('../data_matkul.xlsx');
header('location:../data_matkul.xlsx');