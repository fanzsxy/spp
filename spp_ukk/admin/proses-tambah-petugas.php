<?php
$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

include'../koneksi.php';
$sql = "SELECT * FROM petugas WHERE username = '$username'";
$query = mysqli_num_rows(mysqli_query($koneksi, $sql));
if($query > 0 ){
    echo"<script>alert('maaf username sama'); window.Location.assign('?url=petugas');</script>";
    
   
}else{
   
    mysqli_query($koneksi, "INSERT INTO petugas(username,password,nama_petugas,level) VALUES('$username','$password','$nama_petugas','$level')");
    header("Location:?url=petugas");
}

?>