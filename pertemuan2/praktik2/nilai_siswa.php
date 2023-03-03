<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
    
    <?php

    if (isset($_POST['proses'])) {

        //variabel untuk menampung/menyimpan data
        $nama_siswa = $_POST['nama_lengkap'];
        $mata_kuliah = $_POST['matkul'];
        $uts = $_POST['nilai_uts'];
        $uas = $_POST['nilai_uas'];
        $praktikum = $_POST['nilai_tugas'];

        $total_nilai = ($uts * 0.3) + ($uas * 0.35) + ($praktikum * 0.35);

        //menampilkan data dari variable
        echo '<br>Nama Siswa : ' . $nama_siswa;
        echo '<br>Mata Kuliah: ' . $mata_kuliah;
        echo '<br>Nilai UTS : ' . $uts;
        echo '<br>Nilai UAS : ' . $uas;
        echo '<br>Nilai Praktikum : ' . $praktikum;
        echo '<hr>';
        echo '<br>Total Nilai : ' . $total_nilai;
        echo '<hr>';

    }
    ?>

</body>
</html>