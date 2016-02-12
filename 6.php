<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Пользовательские функции</title>
    </head>
    <body>
        <?php
        $arr = ['1'=>[
            '1.1'=>1,
            '1.2'=>1,
            '1.3'=>1],
            '2'=>[
            '2.1'=>1,
            '2.2'=>1,
            '2.3'=>1
            ],
            '3'=>1
        ];
//        echo '<pre>';
//        var_dump($arr);
//        echo '</pre>';
        
        function sum($arr,$level = 0) {
            static $items;
            static $count;
            if (is_array($arr)){
                $level++;
                foreach ($arr as $value) {
//                      echo '<pre>';
//                      print_r($arr);
//                      echo '</pre>';
                    sum($value,$level);
                }
            }  else {
                //echo '<br> не масив';
                $count++;
                $items += $arr;                 
            }
            return array('count'=>$count,'item'=>$items);
       }
        $sum = sum($arr);
        print_r($sum);
        
        ?>
    </body>
</html>
