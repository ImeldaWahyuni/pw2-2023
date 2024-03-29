<?php

    // dalam membuat class biasakan diawali dengan huruf besar
    class Fruit {
        // property
        public $name;
        public $color;

        // method
        function getName($name) {
            return $this->name = $name;
        }

        function  getColor($color) {
            return $this->color = $color;
        }
    }

    // object
    $apple = new Fruit();
    echo $apple->getName("Apple");
    echo '<br>';
    echo $apple->getColor("Red");

    echo '<br><br>';

    $banana = new Fruit();
    echo $banana->getName("Banana");
    echo '<br>';
    echo $banana->getColor("Yellow");
?>