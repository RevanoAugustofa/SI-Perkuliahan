<?php include('../koneksi.php');
$db = new database;
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="../output.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <!-- Link ke dTable -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <!-- Link ke jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Link ke JavaScript DataTables -->
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

<body class="font-sans text-gray-900">

    <!--  start main content  -->
    <div>
        <div class="bg-slate-200 h-[60px]  ">
            <div class="flex flex-row-reverse items-center pt-1 pr-8 gap-4">
                <div class="dropdown dropdown-end z-50">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar " onclick="pop()">
                        <div class="w-10 rounded-full ">
                            <img
                                alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                    <ul
                        tabindex="0"
                        class="menu menu-sm dropdown-content  bg-gray-200 rounded-box z-[1] mt-3 w-[320px] p-5 shadow-md transition" id="submenu3">
                        <li class="border-b border-b-gray-400">
                            <a class="justify-between">
                                <div class="w-10  ">
                                    <img alt="Tailwind CSS Navbar component" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                                Profile
                                <span class="badge ">hai</span>
                            </a>
                        </li>
                        <li class="mt-2"><a class="p-3 hover:p-4 hover:text:xl ease-in duration-300"><i class="ri-settings-3-line"></i>Setting</a></li>
                        <li class="mt-2"><a href="../login/logout.php" class="p-3 hover:p-4 hover:text:xl  ease-in duration-300"><i class="ri-logout-box-line"></i>Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="lg:ml-[15%] p-5 md:ml-0 ms-0">
            <h1 class="text-3xl font-bold mb-2 text-blue-500">Dashboard</h1>

            <div class="flex space-x-4">
                <div class="card bg-base-100 image-full w-96 shadow-xl hover:scale-95 transition duration-150 ease-out hover:drop-shadow-xl">
                    <figure>
                        <img
                            src="../dist/img/matkul.jpg"
                            />
                    </figure>
                    <div class="card-body">
                        <div class="flex justify-between">
                            <h2 class="card-title">Matakuliah</h2>
                            <i class="ri-book-read-fill text-2xl"></i>
                        </div>
                        <p>Jumlah Matakuliah</p>
                        <h2 class="card-title text-3xl font-bold"><?= $db->getalldata('matkul') ?></h2>
                    </div>
                </div>

                <div class="card bg-base-100 image-full w-96 shadow-xl hover:scale-95 transition duration-150 ease-out hover:drop-shadow-xl">
                    <figure>
                        <img src="../dist/img/mhs.jpg"/>
                    </figure>
                    <div class="card-body">
                        <div class="flex justify-between">
                            <h2 class="card-title">Mahasiswa</h2>
                            <i class="ri-graduation-cap-fill text-2xl"></i>
                        </div>
                        <p>Jumlah Mahasiswa</p>
                        <p class="text-3xl font-bold"><?= $db->getalldata('mahasiswa') ?></p>
                    </div>
                </div>

                <div class="card bg-base-100 image-full w-96 shadow-xl hover:scale-95 transition duration-150 ease-out hover:drop-shadow-xl">
                    <figure>
                        <img src="../dist/img/kls.jpg" />
                    </figure>
                    <div class="card-body">
                        <div class="flex justify-between">
                            <h2 class="card-title">Kelas</h2>
                            <i class="ri-team-fill text-2xl"></i>
                        </div>
                        <p>Jumlah Kelas</p>
                        <p class="text-3xl font-bold"><?= $db->getalldata('kelas') ?></p>
                    </div>
                </div>

                <div class="card bg-base-100 image-full w-96 shadow-xl hover:scale-95 transition duration-150 ease-out hover:drop-shadow-xl">
                    <figure>
                        <img src="../dist/img/prodi.jpg" />
                    </figure>
                    <div class="card-body">
                        <div class="flex justify-between">
                        <h2 class="card-title">Program Studi</h2>
                        <i class="ri-contacts-book-2-fill text-2xl"></i>
                        </div>
                        <p>Jumlah Program Studi</p>
                        <p class="text-3xl font-bold"><?= $db->getalldata('prodi') ?></p>
                    </div>
                </div>

                <div class="card bg-base-100 image-full w-96 shadow-xl hover:scale-95 transition duration-150 ease-out hover:drop-shadow-xl">
                    <figure>
                        <img src="../dist/img/dsn.jpg" />
                    </figure>
                    <div class="card-body">
                        <div class="flex justify-between">
                        <h2 class="card-title">Dosen</h2>
                        <i class="ri-presentation-fill text-2xl"></i>
                        </div>  
                        <p>Jumlah Dosen</p>
                        <p class="text-3xl font-bold"><?= $db->getalldata('dosen') ?></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="ml-[15%]  pl-5 pr-5 flex justify-between">
        <div class="w-[60%]">
            <div class="bg-white rounded-[10px] w-full p-4 shadow-md  items-center">
        <h1 class="font-bold text-2xl text-sky-600 drop-shadow-md">Data Mahasiswa</h1>
            <div class="pt-5 pb-5 flex items-center justify-center w-full overflow-x-auto">
           
                <table class=" border-white pb-auto w-full table table-zebra display" id="myTable">
                    <thead>
                    <tr class="bg-slate-400 text-white  text-center ">
                        <th>No</th>
                        <th class="pl-4">Id Mahasiswa</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        $database = new database();
                        $no=1;
                        $data_mahasiswa = $database->tampil_data_mhs();
                        foreach ($data_mahasiswa as $row) {
                    ?>
                    <tr class="pointer hover:bg-gray-200">
                        <td class="text-center"><?php echo $no++ ?></td>

                        <td class="text-center"><?php echo $row['id_mhs'] ?></td>
                        <td><?php echo $row['npm'] ?></td>
                        <td><?php echo $row['nama_mhs']?></td>
                        <td><?php echo $row['alamat_mhs']?></td>
                    </tr>
                    

                    <?php } ?>
                    </tbody>
                </table>

            </div>
           
        
        </div>
        </div>
        
        <!-- start index  -->
        <div class="w-[39%]">
        <div class="max-w-full w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-between">
                <div>
                <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">Presensi</h5>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Minggu ini</p>
                </div>
                <div
                class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                feb 2024
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                </svg>
                </div>
            </div>
            <div id="data-series-chart"></div>
            <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-5">
                <div class="flex justify-between items-center pt-5">
                <!-- Button -->
                <button
                    id="dropdownDefaultButton"
                    data-dropdown-toggle="lastDaysdropdown"
                    data-dropdown-placement="bottom"
                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                    type="button">
                    Last 7 days
                
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <!-- end button  -->
                <a
                    href="#"
                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                    Laporan Mahasiswa
                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </a>
                </div>
            </div>
        </div>
         <!-- end index  -->

        </div>
        </div>

    </div>
    <!-- end main content  -->




    <!-- start: sidebar -->
    <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
        <img src="../dist/img/si.png" alt="" class="w-10 h-8 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">Perkuliahan</span>
        </a>

        <!-- start sidenav  -->
        <ul class="mt-4 sidebar-menu">
            <li class="mb-1 group active">
                <a href="#" class="flex items-center py-2 px-4 text-gray-400 hover:text-gray-100 hover:bg-gray-900 rounded-md group-[.active]:bg-gray-800 group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 group-[.active]:text-white">
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
                <a href="tampil_mahasiswa.php">
                    <h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md text-gray-200 pl-5">• Mahasiswa</h1>
                </a>
                <a href="tampil_dosen.php">
                    <h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5">• Dosen</h1>
                </a>
                <a href="tampil_prodi.php">
                    <h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5">• Prodi</h1>
                </a>
                <a href="tampil_matkul.php">
                    <h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5">• Matkul</h1>
                </a>
                <a href="tampil_kelas.php">
                    <h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5">• Kelas</h1>
                </a>
            </div>
            <!-- end main content  -->

            <li class="mb-1 group" onclick="dropDown2()">
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
                <a href="tampil_user.php">
                    <h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md text-gray-200 pl-5">• Akun</h1>
                </a>
                <a href="../login/logout.php">
                    <h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5">• Logout</h1>
                </a>
            </div>
            <!-- end main user  -->

        </ul>
        <!-- end sidenav -->

    </div>
    <!-- end: sidebar -->

    <div class="ml-[16%]">
    <button id="myButton">Click me</button>



    </div>
    <script src="../dist/index.js"></script>
    <script>
        $(document).ready( function () {
         $('#myTable').DataTable();
        } );


        function dropDown1() {
            document.querySelector('#submenu1').classList.toggle('hidden')
            document.querySelector('#arrow1').classList.toggle('rotate-0')
        }
        dropDown1()

        function dropDown2() {
            document.querySelector('#submenu2').classList.toggle('hidden')
            document.querySelector('#arrow2').classList.toggle('rotate-0')
        }
        dropDown2()

        function pop() {
            document.querySelector('#submenu3').classList.toggle('hidden')
        }
        pop()

        function Openbar() {
            document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        }
    </script>

</body>

</html>