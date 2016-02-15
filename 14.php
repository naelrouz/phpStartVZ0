<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Теория. Урок 14. ООП Часть 2</title>
    </head>
    <body>
        <?php
/* Транспортное средство 
 * 
 */   
        class Vehicle{ 
            public $color;
            public $speed;
            public $brand;
            

            function rtipTime($distance){
//            final function rtipTime($distance) { // final - запрет переопределения или наследования для класса
              $time = $distance / $this->speed;
                return $time;
            }
        }
/* Велосипед
 *  
 */
        class Bicycle extends Vehicle { 
            public $type;           
            const CALORIES = 500;

            function rtipTime($distance) { // время в пути
                $time = (parent::rtipTime($distance))*1.2; 
                //$time = ($distance / $this->speed)*1.2; // переопределение метода
                return $time;
            }
            
            function caloriesBurned($distance) {
                 $time = $this->rtipTime($distance);
                 $calories = $time * self::CALORIES;
                 return $calories;
            }
        }
/* Автомобиль
 *  
 */        
        /*final*/ class Car extends Vehicle {
            public $fuel;
  
            function fuelConsumption($distance) {
                $result = ($this->fuel * $distance) / 100;
                return $result;
            }
        }
        
        class Audi extends Car {
            
        }
        
        $distance = 1000;
//        
        $car1 = new Car();
        $car1->speed = 50;
        $car1->fuel = 20;
        echo "Время в пути ". $car1->rtipTime($distance)."<br>";
        echo "Расход топлива ".$car1->fuelConsumption($distance)."<br>";
//        
        $car2 = new Car();
        $car2->speed = 75;
        $car2->fuel = 30;
        echo "Время в пути ".$car2->rtipTime($distance)."<br>";
        echo "Расход топлива ".$car1->fuelConsumption($distance)."<br>";
//
        $bic = new Bicycle();
        $bic->speed = 50;
        echo "Время в пути ".$bic->rtipTime($distance)."<br>";
        echo "Расход калорий ".$bic->caloriesBurned($distance)."<br>";
        ?>
    </body>
</html>
