<!DOCTYPE html>
<html lang="en"  data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../output.css" rel="stylesheet"/>
</head>
<body class="font-sans text-gray-800">
    <!-- start: sidebar -->
     <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4">
            <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="../dist/img/si.png" alt="" class="w-10 h-8 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">Perkuliahan</span>
            </a>

            <!-- start sidenav  -->
            <ul class="mt-4 sidebar-menu" >
                <li class="mb-1 group">
                    <a href="dashboard.php" class="flex items-center py-2 px-4 text-gray-400 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 group-[.active]:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
</svg>
                    <span class="text-sm pl-3">Dashboard</span>
                    </a>
                </li>
                <li class="mb-1 group" onclick="dropDown1()">
                    <a href="#" class="flex items-center py-2 px-4 text-gray-400 hover:text-gray-100 hover:bg-gray-950 rounded-md group-[.active]:bg-gray-900  group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
</svg>
                    <span class="text-sm pl-3">Inventory</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 ml-auto rotate-90" id="arrow1">
  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /> 
</svg>
                    </a>
                </li>
                <!-- start main content  -->
                    <div class=" leading-7 text-left text-sm " id="submenu1">
                        <a href="tampil_mahasiswa.php"><h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md text-gray-200 pl-5">•  Mahasiswa</h1></a>
                        <a href="tampil_dosen.php"><h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5">•  Dosen</h1></a>
                        <a href="tampil_prodi.php"><h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5">•  Prodi</h1></a>
                        <a href="tampil_matkul.php"><h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5">•  Matkul</h1></a>
                        <a href="tampil_kelas.php"><h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5">•  Kelas</h1></a>
                    </div>
                <!-- end main content  -->

                <li class="mb-1 group"  onclick="dropDown2()">
                    <a href="#" class="flex items-center py-2 px-4 text-gray-400 hover:text-gray-100 hover:bg-gray-950 rounded-md group-[.active]:bg-gray-800  group-[.active]:text-white  group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>
                    <span class="text-sm pl-3">User</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 ml-auto rotate-90" id="arrow2">
  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
</svg>
                    </a>
                </li>

                <!-- start main user   -->
                <div class=" leading-7 text-left text-sm " id="submenu2">
                    <a href="tampil_user.php"><h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md text-gray-200 pl-5  bg-slate-600">•  Akun</h1></a>
                    <a href="../login/logout.php"><h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5">•  Logout</h1></a>
                </div>
                <!-- end main user  -->

            </ul>
            <!-- end sidenav -->
     </div>
    <!-- end: sidebar -->

   
    <script>
        function dropDown1() {
        document.querySelector('#submenu1').classList.toggle('hidden')
        document.querySelector('#arrow1').classList.toggle('rotate-0')
        }
        dropDown1()

        function dropDown2() {
        document.querySelector('#submenu2').classList.toggle('hidden')
        document.querySelector('#arrow2').classList.toggle('rotate-0')

        }
        
        function Openbar() {
        document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        }
    </script>
    
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <form action="dashboard.php">
        <div class="flex items-center justify-center min-h-screen flex-col  ml-[16%]">
            <h1 class="font-bold text-3xl mb-2 ">404</h1>
            <h1 class="font-bold text-5xl text-green-800 mb-3">Not Found</h1>
            <h1 class=" text-slate-800 mb-8">maaf, saat ini laman belum tersedia</h1>
            <button class="bg-blue-600 text-white rounded-md p-3 hover:bg-blue-900">Kembali</button>
        </div>
    </form>
</body>
</html>