
<?php
require '../koneksi.php';
$login = new login();

if(isset($_SESSION['id'])){
    header("location: ../view/dashboard.php");
}

if(isset($_POST['submit'])){
    $result = $login-> login($_POST['useremail'], $_POST['password']);
    if($result == 1){
       $_SESSION['login']= true;
       $_SESSION['id']= $login->idUser();
       header("Location: ../view/dashboard.php");
    }elseif($result == 10){
        echo "<script> alert('Password Anda Salah')</script>";
    }elseif($result == 100){
        echo "<script> alert('Username / Email tidak ditemukan')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-no-repeat bg-cover bg-center h-screen" style="background-image: url('../bg.png')" >
    <main  class="flex items-center justify-center min-h-screen flex-col">
        <div>
            <h1 class="mb-6 text-3xl font-extrabold text-slate-700">Sistem Perkuliahan</h1>
        </div>
    
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h1 class="text-2xl font-semibold mb-5">Login</h1>
        
        <form action="" method="post" autocomplete="off"> 
            <div class="flex mb-2">
                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
</svg>
                <label for="" class="block text-sm font-medium text-grey-600">Username</label> 
            </div>
            <input type="text" name="useremail" placeholder="masukkan email / username" required class="mb-4 mt-1 p-2 w-full border rounded-md" >
            <div class="flex mb-2">
            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
</svg>
                <label for="" class="block text-sm font-medium text-grey-600">Password</label>
               
            </div>
            <input type="password" name="password" placeholder="masukkan password" required class="mb-4 mt-1 p-2 w-full border rounded-md">
            <button type="submit" name="submit" class="bg-blue-500 text-white p-3 w-full boder rounded-md mt-1">Login</button>
        </form>
        </div>
    </main>

</body>
</html>

