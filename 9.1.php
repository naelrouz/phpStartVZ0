<?php
if (isset ($_COOKIE['arr'])) {
            $arr = $_COOKIE['arr'];
    }
    echo '<pre>';
    var_dump($arr);
    echo '</pre>';
    
    $arr = unserialize($arr);
    print_r($arr);
    
//    
if (isset ($_COOKIE['name'])) {
            $name = $_COOKIE['name'];
    
}else {
           $name = 'Гость'; 
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <a href="9.php"><br>9</a></br>
         <?php echo 'Привет '. $name; ?>
         
    </body>
</html>
