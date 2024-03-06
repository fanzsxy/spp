<?php
session_start();

if(empty($_SESSION['id_petugas'])){
   echo"<script>alert('maaf anda belum login');
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['level']!='admin'){
   echo"<script>alert('maaf anda bukan lagi sesi admin');
    window.location.assign('../index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body >
   

<div id="wrapper" class="toggled">

<!-- Sidebar -->
<div id="sidebar-wrapper">
  
    <ul class="sidebar-nav">
      <br>
        <li class="sidebar-brand">
            <h3 class="text-white text-center">
                Aplikasi Pembayaran Spp
            </a>
        </li>
        <br>
        <li>
                        <a href="admin.php" class="nav-link px-0 align-middle text-white">
                            <i class="fa fa-tachometer"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                       
                    </li>
                    <li>
                        <a href="admin.php?url=spp" class="nav-link px-0 align-middle text-white">
                        <i class="fa-solid fa-money-check"></i> <span class="ms-1 d-none d-sm-inline">Spp</span></a>
                    </li>
                    <li>
                        <a href="admin.php?url=kelas"  class="nav-link px-0 align-middle text-white">
                        <i class="fa-solid fa-school"></i> <span class="ms-1 d-none d-sm-inline">Kelas</span></a>
                        
                            
                    </li>
                    <li>
                        <a href="admin.php?url=siswa"  class="nav-link px-0 align-middle text-white">
                        <i class="fa-solid fa-users"></i> <span class="ms-1 d-none d-sm-inline">Siswa</span> </a>
                           
                    </li>
                    <li>
                        <a href="admin.php?url=petugas" class="nav-link px-0 align-middle text-white">
                        <i class="fa-solid fa-id-card"></i> <span class="ms-1 d-none d-sm-inline">petugas</span> </a>
                    </li>
                    <li>
                        <a href="admin.php?url=pembayaran" class="nav-link px-0 align-middle text-white">
                        <i class="fa-solid fa-hand-holding-dollar"></i> <span class="ms-1 d-none d-sm-inline">pembayaran</span> </a>
                    </li>
                    <li>
                        <a href="admin.php?url=laporan" class="nav-link px-0 align-middle text-white">
                        <i class="fa-solid fa-clipboard"></i> <span class="ms-1 d-none d-sm-inline">Laporan</span> </a>
                    </li>
                    <li>
                        <a href="admin.php?url=logout" class="nav-link px-0 align-middle text-white">
                        <i class="fa-solid fa-right-from-bracket"></i> <span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                    </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<br>
<div id="page-content-wrapper">
    <div class="container-fluid">
    <div class="alert alert-info">
        Anda Login Sebagai <b>Administrator</b> Aplikasi Pembayaran Spp
      </div>

      <div class="card mt-2">
        <div class="card-body">
            <!-- ini web kita-->
            <?php
            $file =@$_GET['url'];
            if(empty($file)){
              echo"<h4>Selamat Datang Dihalaman Administrator.</h4>";
              echo"Aplikasi pembayaran spp digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah";
            }else{
              include $file.'.php';
            }
            ?>
        </div>
      </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});
</script>


<br>

    
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>