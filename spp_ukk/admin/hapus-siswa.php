<?php
$nisn = $_GET['nisn'];



include'../koneksi.php';
$sql = "DELETE FROM siswa WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=siswa");
}else{
    echo"<script>alert('maaf data tidak terhapus'); window.Location.assign('?url=siswa');</script>";
}

?>