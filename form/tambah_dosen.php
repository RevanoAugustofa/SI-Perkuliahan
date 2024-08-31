<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Matakuliah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-zinc-200">
    <main class="flex items-center justify-center min-h-screen flex-col">
    <div class="bg-white p-8 rounded-lg shadow-md w-[40%]">
        <h1 class="text-2xl font-bold mb-5 text-center text-green-900 ">Tambah Dosen</h1>
        <form action="../proses/crud_dosen.php?aksi_dsn=tambah" method="post">
            <div class="mb-2 flex">
                <label for="" class="block text-sm font-medium text-grey-600">NIDN</label>
            </div>
                <input type="number" name="nidn" id="nidn" required class="w-full border rounded-md border-gray-400 mb-4 mt-1 p-2 ">
            <div class="mb-2 flex">
                <label for="" class="block text-sm font-medium text-grey-600">NIP</label>
            </div>
                <input type="number" name="nip" id="nip" required class="w-full border rounded-md border-gray-400 mb-4 mt-1 p-2 ">
            <div class="mb-2 flex">
                <label for="" class="block text-sm font-medium text-grey-600">Nama</label>
            </div>
                <input type="text" name="nama" id="nama" required class="w-full border rounded-md border-gray-400 mb-4 mt-1 p-2 ">
            <div class="mb-2 flex">
                <label for="" class="block text-sm font-medium text-grey-600">Alamat</label>
            </div>
                <textarea name="alamat" id="alamat" required class="mb-4 mt-1 p-2 w-full border border-gray-400 rounded-md"></textarea>
            <div class="flex justify-end">
                <a href="../view/tampil_dosen.php" class="bg-gray-400  text-white p-3 w-20  boder rounded-md mt-1 text-center hover:bg-gray-300">Kembali</a>
                <button type="submit" name="submit" id="submit"  class="bg-blue-500 rounded-md  text-white p-3 w-20  boder mt-1 ml-4"> Simpan</button>
            </div>
        </form>
    </div>
    </main>
</body>
</html>