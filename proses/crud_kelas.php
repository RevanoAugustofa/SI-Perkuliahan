<?php 
//include data koneksi database
include('../koneksi.php');

$database= new database();

$aksi = $_GET['aksi_kls'];
    if($aksi == "tambah"){
        $database->input_kelas($_POST['namakelas'], $_POST['tahunakademik'], $_POST['idprodi']);
        header('location:../view/tampil_kelas.php');
    }elseif($aksi == "hapus"){
        $database->hapus_kelas($_GET['id']);
        header('location:../view/tampil_kelas.php');
    }elseif($aksi == "update"){
        $database->update_kelas($_POST['id_kelas'],$_POST['namakelas'], $_POST['tahunakademik'], $_POST['idprodi']);
        header('location:../view/tampil_kelas.php');
    }
