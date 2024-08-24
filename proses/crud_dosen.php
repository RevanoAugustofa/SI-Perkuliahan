<?php 
//include data koneksi database
include('../koneksi.php');

$database= new database();

$aksi = $_GET['aksi_dsn'];
    if($aksi == "tambah"){
        $database->input_dosen($_POST['nidn'], $_POST['nip'], $_POST['nama'],$_POST['alamat']);
        header('location:../view/tampil_dosen.php');
    }elseif($aksi == "hapus"){
        $database->hapus_dosen($_GET['id']);
        header('location:../view/tampil_dosen.php');
    }elseif($aksi == "update"){
        $database->update_dosen($_POST['id_dosen'],$_POST['nidn'], $_POST['nip'], $_POST['nama'],$_POST['alamat']);
        header('location:../view/tampil_dosen.php');
    }
