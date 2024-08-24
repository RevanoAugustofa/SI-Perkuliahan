<?php

include ('../koneksi.php');

$database = new database();

$aksi = $_GET['aksi_mhs'];
    if($aksi == "tambah"){
        $database->input_mhs($_POST['npm'], $_POST['namamhs'],$_POST['alamat']);
        header('location:../view/tampil_mahasiswa.php');
    }
    elseif($aksi == "hapus"){
        $database->hapus_mhs($_GET['id']);
        header('location:../view/tampil_mahasiswa.php');
    }
    elseif($aksi == "update"){
        $database->update_mhs($_POST['id'],$_POST['npm'],$_POST['namamhs'],$_POST['alamat']);
        header('location:../view/tampil_mahasiswa.php');
    }
?>