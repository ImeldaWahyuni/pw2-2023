<?php

    class Kendaraan {
       protected $jenis;
       protected $bahanBakar; 

       protected function __construct($jenis,$bahanBakar)
       {
            $this->jenis = $jenis;
            $this->bahanBakar = $bahanBakar;
       }

       protected function getInfo() {
            echo "Jenis Kendaraan: " . $this->jenis . "<br>";
            echo "Bahan Bakar: " . $this->bahanBakar . "<br>";
        }
    }

    class Motor extends Kendaraan {
        public $roda;

        public function __construct($jenis,$bahanBakar,$roda)
        {
            parent::__construct($jenis,$bahanBakar);
            $this->roda = $roda;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Jumlah Roda: " . $this->roda . "<br>";
        }
    }

    class Submarine extends Kendaraan {
        public $maks_kedalaman;

        public function __construct($jenis,$bahanBakar,$maks_depth)
        {
            parent::__construct($jenis,$bahanBakar);
            $this->maks_kedalaman = $maks_depth;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Maksimal Kedalaman: " . $this->maks_kedalaman . "<br>";
        }
    }
?>