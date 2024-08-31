<?php 
include ('../koneksi.php');
$database =new database();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body  class="bg-zinc-200">
    <main class="flex items-center justify-center min-h-screen flex-col">
   
    <div class="bg-white p-8 rounded-lg shadow-md w-[40%]">
     <form action="../proses/crud_mahasiswa.php?aksi_mhs=update" method="post">

            <?php 
            $data_mhs = $database->edit_mhs($_GET['id']);
            foreach ($data_mhs as $row){
            ?>

        <h1 class="text-2xl font-bold mb-5 text-center text-green-900 ">Edit Mahasiswa</h1>
        <input type="hidden" name="id" value="<?php echo $row['id_mhs']?>">
            <div class="flex mb-2">
                <label for="npm" class="block text-sm font-medium text-grey-600" >NPM</label>
            </div>
                <input type="number" name="npm" value="<?php echo $row['npm']?>" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md">

            <div class="flex mb-2">
                <label for="nama" class="block text-sm font-medium text-grey-600">Nama</label>
            </div>
                <input type="text" id="nama" name="namamhs" value="<?php echo $row['nama_mhs']?>" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md">
                
            <div class="flex mb-2">
                <label for="alamat" class="block text-sm font-medium text-grey-600">Alamat</label>          
            </div>
                <textarea name="alamat" id="alamat"  required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md"><?php echo $row['alamat_mhs']?></textarea>
                
            <div class="flex justify-end">
                <a href="../view/tampil_mahasiswa.php" class="bg-orange-400  text-white p-3 w-20  boder rounded-md mt-1 text-center">Batal</a>
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