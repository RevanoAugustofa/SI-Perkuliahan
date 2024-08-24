<?php 
//include data koneksi database
include('../koneksi.php');

$database= new database();

$aksi = $_GET['aksi_mk'];
    if($aksi == "tambah"){
        $database->input_matkul($_POST['kode'], $_POST['nama'], $_POST['sks']);
        header('location:../view/tampil_matkul.php');
    }elseif($aksi == "hapus"){
        $database->hapus_matkul($_GET['id']);
        header('location:../view/tampil_matkul.php');
    }elseif($aksi == "update"){
        $database->update_matkul($_POST['id_mk'],$_POST['kode'], $_POST['nama'], $_POST['sks']);
        header('location:../view/tampil_matkul.php');
    }
