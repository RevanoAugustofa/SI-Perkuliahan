<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-zinc-200">
    <main class="flex items-center justify-center min-h-screen flex-col">
   
    <div class="bg-white p-8 rounded-lg shadow-md w-[40%]">
        <form action="../proses/crud_mahasiswa.php?aksi_mhs=tambah" method="post">  

        <h1 class="text-2xl font-bold mb-5 text-center text-green-900 ">Tambah Mahasiswa</h1>
            <div class="flex mb-2">
                <label for="npm" class="block text-sm font-medium text-grey-600" >NPM</label>
            </div>
                <input type="number" name="npm" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md">

            <div class="flex mb-2">
                <label for="nama" class="block text-sm font-medium text-grey-600">Nama</label>
            </div>
                <input type="text" id="nama" name="namamhs" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md">

            <div class="flex mb-2">
                <label for="alamat" class="block text-sm font-medium text-grey-600">Alamat</label>          
            </div>
            <textarea name="alamat" id="alamat" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md"></textarea>
                

            <div class="grid justify-items-end">
                <button type="submit" name="submit" class="bg-blue-500  text-white p-3 w-20  boder rounded-md mt-1">Simpan</button>
            </div>
                
        </form>
    </div>

    </main>
</body>
</html>