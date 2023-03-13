<?php
    include_once 'header.php';
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
            require_once 'libfungsi.php';
            if(isset($_POST['submit'])){
                $nama_lengkap = $_POST['nama_lengkap'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $praktikum = $_POST['nilai_praktikum'];
                $total_nilai = ($uts + $uas + $praktikum)/3;
                $rata_rata = $total_nilai;
                $kelulusan = kelulusan($total_nilai);
                $grade = grade($total_nilai);
                $predikat = predikat($grade);
                ?>

            <tr>
                <td>3</td>
				<td><?php echo $nama_lengkap?></td>
				<td><?php echo $mata_kuliah?></td>
				<td><?php echo $uts?></td>
				<td><?php echo $uas?></td>
                <td><?php echo $praktikum?></td>
                <td><?php echo $rata_rata?></td>
                <td><?php echo $grade?></td>
                <td><?php echo $predikat?></td>
                <td><?php echo $kelulusan?></td>
			</tr>

            <?php
			    }
			?>
                
      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>