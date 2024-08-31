<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-zinc-200">
    <main class="flex items-center justify-center min-h-screen flex-col">
        <div class="bg-white p-8 rounded-lg shadow-md w-[40%]">
   
            <form action="../proses/crud_kelas.php?aksi_kls=update" method="post">
            <h1 class="text-2xl font-bold mb-5 text-center text-green-900 ">Edit Kelas</h1>
                <?php include('../koneksi.php'); 
                $database = new database();
                $data_kls= $database-> edit_kelas($_GET['id']);
                foreach($data_kls as $row){
                ?>
                    <input type="hidden" name="id_kelas" value="<?php echo $row['id_kls']?>">
                    <div class="flex mb-2">
                        <label for="nama_kls" class="block text-sm font-medium text-grey-600">Nama Kelas</label>
                    </div>
                        <input type="text" name="namakelas" id="nama_kls" value="<?php echo $row['nama_kls']?>" required class="w-full border rounded-md border-gray-400 mb-4 mt-1 p-2 ">

                    <div class="flex mb-2">
                        <label for="thn_akademik" class="block text-sm font-medium text-grey-600">Tahun Akademik</label>
                    </div>
                    
                    <select name="tahunakademik" id="thn_akademik" required class="w-full border rounded-md border-gray-400 mb-4 mt-1 p-2 ">
                        
                    <option value=""><?php echo $row['thn_akademik']?></option>
                        <?php

                        $tahunAwal = 2006;
                        $tahunAkhir = 2024;
                        
                        for ($i = $tahunAkhir; $i >= $tahunAwal; $i--) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                
                <div class="flex mb-2">
                    <label for="id_prodi"  class="block text-sm font-medium text-grey-600">Prodi</label>
                </div>
                    <select name="idprodi" id="id_prodi" required class="w-full border rounded-md border-gray-400 mb-4 mt-1 p-2 ">
                    
                            <?php
                            $query = mysqli_query($database->koneksi, "SELECT * FROM prodi") or die(mysqli_error($database->koneksi)); //koneksi adalah var yang di database (koneksi.php)
                            while($data = mysqli_fetch_array($query)) {
                                echo "<option value='".$data['id_prodi']."'>".$data['nama_prodi']."</option>";
                            }
                            ?>
                    </select>
        
                <div class="flex justify-end">
                    <a href="../view/tampil_kelas.php" class="bg-orange-400  text-white p-3 w-20  boder rounded-md mt-1 text-center">Batal</a>
                    <button type="submit" name="submit" class="bg-blue-500  text-white p-3 w-20  boder rounded-md mt-1 ml-4">Simpan</button>
                </div>

                <?php }?>

            </form>
        </div>
    </main> 
</body>
</html>