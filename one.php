<?php
 
 class Cars{
     function forwords($car_name="default")
     {
         return "$car_name is moving forwords<br>";
     }
     function backwords($car_name="default")
     {
     return "$car_name is moving backwords<br>";
     }
 }
 
 $obj = new Cars;
 
 echo $obj->forwords();
 echo $obj->backwords();

 $toyota = new Cars;
 echo $obj->backwords('toyota');
 $honda = new Cars;
 echo $honda->backwords('honda');
 echo $honda->backwords();


?>