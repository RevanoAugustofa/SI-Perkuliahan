<?php
include ('../koneksi.php');
require "../vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet -> setCellValue('A1', 'Data Dosen');

$sheet -> setCellValue('A3', 'No');
$sheet -> setCellValue('B3', 'Id Dosen');
$sheet -> setCellValue('C3', 'NIDN');
$sheet -> setCellValue('D3', 'NIP');
$sheet -> setCellValue('E3', 'Nama');
$sheet -> setCellValue('F3', 'Alamat');

$database= new database();
$query= "SELECT * FROM dosen ORDER BY id_dosen ASC";
$cetakdsn=mysqli_query($database->koneksi, $query);
$no=1;
$baris=4;
while ($data = mysqli_fetch_array($cetakdsn)) {
    $sheet->setCellValue('A'.$baris, $no);
    $sheet->setCellValue('B'.$baris, $data['id_dosen']);
    $sheet->setCellValue('C'.$baris, $data['nidn']);
    $sheet->setCellValue('D'.$baris, $data['nip']);
    $sheet->setCellValue('E'.$baris, $data['nama_dsn']);
    $sheet->setCellValue('F'.$baris, $data['alamat_dsn']);
    $no++;
    $baris++;
}
$writer = new Xlsx($spreadsheet);
$writer->save('../data_dosen.xlsx');
header('location:../data_dosen.xlsx');