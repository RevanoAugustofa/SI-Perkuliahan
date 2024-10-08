<?php 
include ('../koneksi.php');
$database =new database();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body  class="bg-zinc-200">
    <main class="flex items-center justify-center min-h-screen flex-col">
   
    <div class="bg-white p-8 rounded-lg shadow-md w-[40%]">
     <form action="../proses/crud_dosen.php?aksi_dsn=update" method="post">

            <?php 
            $data_dsn = $database->edit_dosen($_GET['id']);
            foreach ($data_dsn as $row){
            ?>

        <h1 class="text-2xl font-bold mb-5 text-center text-green-900 ">Edit Dosen</h1>
        <input type="hidden" name="id_dosen" value="<?php echo $row['id_dosen']?>">
            <div class="flex mb-2">
                <label for="nidn" class="block text-sm font-medium text-grey-600" >NIDN</label>
            </div>
                <input type="number" name="nidn" value="<?php echo $row['nidn']?>" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md">

            <div class="flex mb-2">
                <label for="nip" class="block text-sm font-medium text-grey-600">NIP</label>
            </div>
                <input type="number" id="nip" name="nip" value="<?php echo $row['nip']?>" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md">
                
            <div class="flex mb-2">
                <label for="nama" class="block text-sm font-medium text-grey-600">Nama</label>
            </div>
                <input type="text" id="nama" name="nama" value="<?php echo $row['nama_dsn']?>" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md">

            <div class="flex mb-2">
                <label for="alamat" class="block text-sm font-medium text-grey-600">Alamat</label>          
            </div>
                <textarea name="alamat" id="alamat"  required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md"><?php echo $row['alamat_dsn']?></textarea>
                
            <div class="flex justify-end">
                <a href="../view/tampil_dosen.php" class="bg-orange-400  text-white p-3 w-20  boder rounded-md mt-1 text-center">Batal</a>
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