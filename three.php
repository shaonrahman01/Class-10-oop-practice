<?php
    class Cars{
        public $color = "";

        public $doors = "";
        function __construct($given_color='blue', $given_door=4)
        {
            $this->color = $given_color;
            $this->doors = $given_door; 
        }
       
        function forwords($car_name="default")
        {
            return "$this->color $car_name $this->doors doors is moving forwords<br>";
        }
        function backwords($car_name="default")
        {
        return "$this->color $car_name $this->doors doors is moving backwords<br>";
        }

        function __destruct()
        {
            echo "bye<br>";
        }
    }

    $toyota = new Cars('yello');
    echo $toyota->forwords('honda');
    $bmw = new Cars('black', 2);
    echo $bmw->backwords('bmw');
    $audi = new Cars;
    echo $bmw->backwords('audi');
?>