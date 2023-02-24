<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */

  $ID = 0;
  $m_fruits = [
    ["Nama" => "Strawberry", "Warna" => "Merah", "Stok" => 20, "Harga" => 20000, "Deskripsi" => "Strawberry rasanya asam manis, buahnya
    berbentuk oval dan lonjong, memiliki biji yang berwarna putih di luarnya, buahnya sangat segar."],

    ["Nama" => "Melon", "Warna" => "Hijau", "Stok" => 15, "Harga" => 28000, "Deskripsi" => "Melon adalah buah yang berbentuk bulat,
    berwarna hijau dan memiliki biji di dalamnya, melon rasanya manis."],

    ["Nama" => "Mangga", "Warna" => "Oranye", "Stok" => 25, "Harga" => 12000, "Deskripsi" => "Mangga ada yang berbentuk bulat, ada 
    juga yang lonjong, buah yang manis dan cocok untuk dibuat jus."],

    ["Nama" => "Anggur", "Warna" => "Ungu", "Stok" => 10, "Harga" => 13000, "Deskripsi" => "Anggur adalah buah berbentuk bulat dan banyak,
    terdapat biji kecil di dalamnya, rasa buahnya asam manis."],

    ["Nama" => "Rambutan", "Warna" => "Merah", "Stok" => 12, "Harga" => 11000, "Deskripsi" => "Rambutan berbentuk bulat dan memiliki rambut di
    kulitnya, rasanya sangat manis dan memiliki 1 biji di dalamnya."],

    ["Nama" => "Kedondong", "Warna" => "Hijau", "Stok" => 10, "Harga" => 9000, "Deskripsi" => "Kedondong buah berbentuk bulat, rasanya asam.
    Cocok untuk dijadikan rujak karena buahnya segar."],

    ["Nama" => "Pisang", "Warna" => "Kuning", "Stok" => 8, "Harga" => 15000, "Deskripsi" => "Pisang berbentuk panjang, rasanya sangat manis."],

    ["Nama" => "Semangka", "Warna" => "Merah", "Stok" => 17, "Harga" => 18000, "Deskripsi" => "Semangka berbentuk bulat dan besar, rasanya manis
    dan di dalamnya terdapat banyak biji berwarna hitam."],

    ["Nama" => "Manggis", "Warna" => "Ungu", "Stok" => 15, "Harga" => 20000, "Deskripsi" => "Manggis berbentuk bulat, dan memiliki biji di setiap
    buahnya, rasanya asam manis."],

    ["Nama" => "Apel", "Warna" => "Merah", "Stok" => 13, "Harga" =>17000, "Deskripsi" => "Buah Apel tidak hanya warna merah saja, tapi ada
    juga warna hijau, di tengahnya memiliki sedikit biji, dan daging buahnya itu keras."]
  
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
        
          foreach($m_fruits as $fruit) {
            echo '<tr>';
            $ID += 1;
            echo '<td>'.$ID.'</td>';
            echo '<td>'.$fruit["Nama"].'</td>';
            echo '<td>'.$fruit["Warna"].'</td>';
            echo '<td>'.$fruit["Stok"].'</td>';
            echo '<td>'.$fruit["Harga"].'</td>';
            echo '<td>'.$fruit["Deskripsi"].'</td>';
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>