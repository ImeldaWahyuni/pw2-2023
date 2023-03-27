<?php 

    require_once 'dbkoneksi.php';
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $email = $_POST['email'];
        $kartu_id = $_POST['id'];
    
        $sql = "UPDATE pelanggan SET kode='$kode',nama='$nama',jk='$jk',tmp_lahir='$tmp_lahir',
        tgl_lahir='$tgl_lahir',email='$email',kartu_id='$kartu_id' WHERE id=?";
        $st = $dbh -> prepare ($sql);
        $st -> execute ([$sql]);

   header('location:list_pelanggan.php?pesan=update');
?>