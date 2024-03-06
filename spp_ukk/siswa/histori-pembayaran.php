<?php
$nisn = $_SESSION['nisn'];
?>
<h5>History Pembayaran</h5>


<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>NISN</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Tahun Spp</td>
        <td>Nominal Dibayar</td>
        <td>Sudah Dibayar</td>
        <td>Kekurangan</td>
        <td>Tanggal Dibayar</td>
        <td>Petugas</td>
        
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas 
            AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas AND pembayaran.nisn='$nisn' ORDER BY tgl_bayar DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ 
        $data_pembayaran = mysqli_query($koneksi, "SELECT sum(jumlah_bayar) as jumlah_bayar FROM pembayaran WHERE nisn='$data[nisn]'");
        $data_pembayaran = mysqli_fetch_array($data_pembayaran);
        $sudah_bayar = $data_pembayaran['jumlah_bayar'];
        $kekurangan = $data['nominal']-$data_pembayaran['jumlah_bayar'];
       
        ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['nisn'] ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['nama_kelas'] ?></td>
        <td> <?= $data['tahun'] ?> </td>
        <td><?= number_format($data['nominal'],2,',','.');?></td>
        <td><?= number_format($data['jumlah_bayar'],2,',','.');?></td>
        <td><?= number_format($kekurangan,2,',','.');?></td>
        <td><?= $data['tgl_bayar'] ?></td>
        <td> <?= $data['nama_petugas'] ?> </td>
        
       
       
    </tr>
    <?php } ?>
    
           </table>