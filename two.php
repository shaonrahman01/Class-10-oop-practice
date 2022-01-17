<?php
    class Cars{
        function __construct()
        {
            echo "hi<br>";
        }
       
        function forwords($car_name="default")
        {
            return "$car_name is moving forwords<br>";
        }
        function backwords($car_name="default")
        {
        return "$car_name is moving backwords<br>";
        }

        function __destruct()
        {
            echo "bye<br>";
        }
    }

    $toyota = new Cars;
    echo $toyota->forwords('honda');
    $bmw = new Cars;
    $audi = new Cars;

?>