<?php

include ('../koneksi.php');

$database = new database();

$aksi = $_GET['aksi_prodi'];
    if($aksi == "tambah"){
        $database->input_prodi($_POST['nama_prodi']);
        header('location:../view/tampil_prodi.php');
    }
    elseif($aksi == "hapus"){
        $database->hapus_prodi($_GET['id']);
        header('location:../view/tampil_prodi.php');
    }
    elseif($aksi == "update"){
        $database->update_prodi($_POST['id_prodi'],$_POST['nama_prodi']);
        header('location:../view/tampil_prodi.php');
    }
?>