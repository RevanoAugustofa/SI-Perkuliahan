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
        <h1 class="text-2xl font-bold mb-5 text-center text-green-900 ">Tambah matkul</h1>
        <form action="../proses/crud_matkul.php?aksi_mk=tambah" method="post">
            <div class="mb-2 flex">
                <label for="" class="block text-sm font-medium text-grey-600">Kode Matkul</label>
            </div>
                <input type="text" name="kode_mk" id="kode_mk" required class="w-full border rounded-md border-gray-400 mb-4 mt-1 p-2 ">
            <div class="mb-2 flex">
                <label for="" class="block text-sm font-medium text-grey-600">Nama Matkul</label>
            </div>
                <input type="text" name="nama" id="nama" required class="w-full border rounded-md border-gray-400 mb-4 mt-1 p-2 ">
            <div class="mb-2 flex">
                <label for="" class="block text-sm font-medium text-grey-600">SKS</label>
            </div>
                <input type="number" name="sks" id="sks" required class="w-full border rounded-md border-gray-400 mb-4 mt-1 p-2 ">
            <div class="grid justify-items-end">
                <button type="submit" name="submit" id="submit"  class="bg-blue-500 rounded-md  text-white p-3 w-20  boder mt-1 "> Simpan</button>
            </div>
        </form>
    </div>
    </main>
</body>
</html>