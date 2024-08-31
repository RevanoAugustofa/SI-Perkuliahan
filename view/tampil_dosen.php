<?php include('../koneksi.php');?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    href="../output.css"
    rel="stylesheet"/>

    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"/>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   
   
</head>
<body class="font-sans text-gray-900  ">
    
    <!--  start main content  -->
    <div>
        <div class="bg-slate-200 h-[60px]  ">
            <div class="flex flex-row-reverse items-center pt-1 pr-8 gap-4">
            <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar " onclick="pop()" >
        <div class="w-10 rounded-full ">
          <img
            alt="Tailwind CSS Navbar component"
            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
        </div>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-gray-200 rounded-box z-[1] mt-3 w-[320px] p-5 shadow-md transition" id="submenu3" >
        <li class="border-b border-b-gray-400">
          <a class="justify-between">
                <div class="w-10  ">
                 <img
                 alt="Tailwind CSS Navbar component"
                 src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            Profile
            <span class="badge ">hai</span>
          </a>
        </li>
        <li class="mt-2"><a  class="p-3 hover:p-4 hover:text:xl ease-in duration-300"><i class="ri-settings-3-line"></i>Setting</a></li>
        <li  class="mt-2"><a href="../login/logout.php" class="p-3 hover:p-4 hover:text:xl  ease-in duration-300"><i class="ri-logout-box-line"></i>Logout</a></li>
      </ul>
     
    </div>

                        <a class="btn btn-sm rounded" href="../print/cetakdata_dsn.php">Cetak Data</a>
                        <a class="btn btn-sm rounded bg-green-400 text-white hover:bg-green-700 " href="../form/tambah_dosen.php">Tambah Dosen</a>    
            </div>
            
        </div>

        <div class="ml-[16%] p-7">
        <div class="bg-gray-50  rounded-[10px] w-full p-4 shadow-md  items-center">
        <h1 class="font-bold text-2xl text-sky-600 drop-shadow-md">Dosen</h1>
            <div class="pt-5 pb-5 flex items-center justify-center w-full overflow-x-auto">
                
                <table class=" border-white pb-auto w-full table table-zebra">
                    <tr class="bg-slate-400 text-white  text-center ">
                        <th>No</th>
                        <th class="pl-4">Id Dosen  </th>
                        <th>NIDN</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th colspan="2">Opsi</th>
                    </tr>
                    <?php
                        
                        $database = new database();
                        $no=1;
                        $data_dsn = $database->tampil_data_dosen();
                        foreach ($data_dsn as $row) {
                    ?>
                    <tr class="pointer hover:bg-gray-200">
                        <td class="text-center"><?php echo $no++ ?></td>

                        <td class="text-center"><?php echo $row['id_dosen'] ?></td>
                        <td><?php echo $row['nidn'] ?></td>
                        <td><?php echo $row['nip']?></td>
                        <td><?php echo $row['nama_dsn']?></td>
                        <td><?php echo $row['alamat_dsn']?></td>
                        <td><a class="bg-blue-600 text-gray-200 hover:bg-blue-800 btn mr-[-20px]  " href="../form/edit_dosen.php?id=<?php echo $row['id_dosen'];?>&aksi_dsn=edit"><i class="ri-edit-line"></i></a></td>
                        <td><a class="bg-red-500 text-gray-200 hover:bg-red-700 btn hapus" href="../proses/crud_dosen.php?id=<?php echo $row['id_dosen'];?>&aksi_dsn=hapus"><i class="ri-delete-bin-7-line"></i></a></td>
                    </tr>

                    <?php } ?>
                </table>

            </div>
        
        </div>
        </div>
        
     </div>
    <!-- end main content  -->


    
    <!-- start: sidebar -->
     <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4">
            <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="../si.png" alt="" class="w-10 h-8 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">Perkuliahan</span>
            </a>

            <!-- start sidenav  -->
            <ul class="mt-4 sidebar-menu" >
                <li class="mb-1 group">
                    <a href="dashboard.php" class="flex items-center py-2 px-4 text-gray-400 hover:text-gray-100 hover:bg-gray-950 rounded-md group-[.active]:bg-gray-800 group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 group-[.active]:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
</svg>
                    <span class="text-sm pl-3">Dashboard</span>
                    </a>
                </li>
                <li class="mb-1 group active transition duration-200" onclick="dropDown1()">
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
                        <a href="tampil_mahasiswa.php"><h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md text-gray-200 pl-5 ">•  Mahasiswa</h1></a>
                        <a href="tampil_dosen.php"><h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md mt-1 text-gray-200 pl-5 bg-slate-600">•  Dosen</h1></a>
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
                    <a href="tampil_user.php"><h1 class="cursor-pointer p-1 hover:bg-gray-700 rounded-md text-gray-200 pl-5">•  Akun</h1></a>
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
        

        function dropDown2() {
        document.querySelector('#submenu2').classList.toggle('hidden')
        document.querySelector('#arrow2').classList.toggle('rotate-0')
        }
        dropDown2()

        function pop(){
            document.querySelector('#submenu3').classList.toggle('hidden')
        }
        pop()

        function Openbar() {
        document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Ambil semua tombol dengan kelas 'hapus'
            const buttons = document.querySelectorAll('.hapus');

            // Iterasi melalui semua tombol
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    event.preventDefault();
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn bg-red-500 hover:bg-red-700 ml-2 hover:text-white text-white ',
                            cancelButton: 'btn bg-gray-300 hover:text-white hover:bg-gray-400'
                        },
                        buttonsStyling: false
                    });

                    swalWithBootstrapButtons.fire({
                        title: 'Hapus Data?',
                        text: "Data yang dihapus tidak dapat dipulihkan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Hapus!',
                        cancelButtonText: 'Tidak!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                        title: 'Deleted!',
                        text: 'Data berhasil dihapus.',
                        icon: 'success',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        // Mengalihkan ke URL setelah delay
                        window.location.href = button.href;
                    });
                           
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            swalWithBootstrapButtons.fire({
                                title: 'Cancelled',
                                text: 'Batal menghapus data :D',
                                icon: 'error'
                            });
                        }
                    });
                });
            });
        });

    </script>
</body>
</html>