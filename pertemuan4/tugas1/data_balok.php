<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */
    require_once "class_balok.php";
    echo 'Rumus: ';
    echo '<br>Luas = 2 (pl + pt  + lt)';
    echo '<br>Keliling = 4 (p * l * t)';
    echo '<br>Volume = p * l * t' ;
    echo '<br>';
    echo '<br>';
    echo 'Hasil: ';

    $balok1 = new Balok(29, 16, 7);
    $balok2 = new Balok(25, 15, 6);
    $balok3 = new Balok(20, 10, 8);
    $balok4 = new Balok(18, 11, 5);

    echo '<br> Luas Balok 1 = ' . $balok1->getLuas();
    echo '<br> Keliling Balok 1 = ' . $balok1->getKeliling();
    echo '<br> Volume Balok 1 = ' . $balok1->getVolume();
    echo '<br>';
    echo '<br> Luas Balok 2 = ' . $balok2->getLuas();
    echo '<br> Keliling Balok 2 = ' . $balok2->getKeliling();
    echo '<br> Volume Balok 2 = ' . $balok2->getVolume();
    echo '<br>';
    echo '<br> Luas Balok 3 = ' . $balok3->getLuas();
    echo '<br> Keliling Balok 3 = ' . $balok3->getKeliling();
    echo '<br> Volume Balok 3 = ' . $balok3->getVolume();
    echo '<br>';
    echo '<br> Luas Balok 4 = ' . $balok4->getLuas();
    echo '<br> Keliling Balok 4 = ' . $balok4->getKeliling();
    echo '<br> Volume Balok 4 = ' . $balok4->getVolume();
?>