<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        public $bilangan1;
        public $bilagan2;

        public function __construct($b1, $b2) {
            $this->bilangan1 = $b1;
            $this->bilangan2 = $b2;
        }

        public function getPertambahan() {
            $pertambahan = $this->bilangan1 + $this->bilangan2;
            return $pertambahan;
        }

        public function getPengurangan() {
            $pengurangan = $this->bilangan1 - $this->bilangan2;
            return $pengurangan;
        }

        public function getPembagian() {
            $pembagian = $this->bilangan1 / $this->bilangan2;
            return $pembagian;
        }

        public function getPerkalian() {
            $perkalian = $this->bilangan1 * $this->bilangan2;
            return $perkalian;
        }

    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(10, 5);

    echo 'Rumus: ';
    echo '<br> Pertambahan = bilangan1 + bilangan2';
    echo '<br> Pengurangan = bilangan1 - bilangan2';
    echo '<br> Pembagian = bilangan1 / bilangan2';
    echo '<br> Perkalian = bilangan1 * bilangan2';
    echo '<br>';
    echo '<br>';
    echo 'Hasil: ';

    echo '<br> Pertambahan = ' . $calculator->getPertambahan();
    echo '<br> Pengurangan = ' . $calculator->getPengurangan();
    echo '<br> Pembagian = ' . $calculator->getPembagian();
    echo '<br> Perkalian = ' . $calculator->getPerkalian();
?>