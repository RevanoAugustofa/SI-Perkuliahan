<?php 
include ('../koneksi.php');
$database =new database();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Matakuliah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body  class="bg-zinc-200">
    <main class="flex items-center justify-center min-h-screen flex-col">
   
    <div class="bg-white p-8 rounded-lg shadow-md w-[40%]">
     <form action="../proses/crud_matkul.php?aksi_mk=update" method="post">

            <?php 
            $data_mk = $database->edit_matkul($_GET['id']);
            foreach ($data_mk as $row){
            ?>

        <h1 class="text-2xl font-bold mb-5 text-center text-green-900 ">Edit Matakuliah</h1>
        <input type="hidden" name="id_mk" value="<?php echo $row['id_mk']?>">
            <div class="flex mb-2">
                <label for="kode" class="block text-sm font-medium text-grey-600" >Kode</label>
            </div>
                <input type="text" name="kode" value="<?php echo $row['kode_mk']?>" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md">

            <div class="flex mb-2">
                <label for="nama" class="block text-sm font-medium text-grey-600">Nama</label>
            </div>
                <input type="text" id="nama" name="nama" value="<?php echo $row['nama_mk']?>" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md">
                
            <div class="flex mb-2">
                <label for="sks" class="block text-sm font-medium text-grey-600">SKS</label>          
            </div>
            <input type="number" id="sks" name="sks" value="<?php echo $row['sks']?>" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md">
                
            <div class="flex justify-end">
                <a href="../view/tampil_matkul.php" class="bg-orange-400  text-white p-3 w-20  boder rounded-md mt-1 text-center">Batal</a>
                <button type="submit" name="submit" class="bg-blue-500  text-white p-3 w-20  boder rounded-md mt-1 ml-4">Simpan</button>
            </div>

            <?php
             }
            ?>
    </form>
    </div>
    </main>
    
</body>
</html>