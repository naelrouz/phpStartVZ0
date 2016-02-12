<?php
$arr = ['name'=>'Иван', 'se'=>'Иван2', 'fe'=>'Иван3'];
$arr = serialize($arr);
var_dump($arr);
setcookie('arr',$arr);


        if(isset($_POST['name']) && !empty($_POST['name'])){
           $name = $_POST['name'];
           setcookie('name',$name, time()+300);
//           echo $name;
//           echo '<br>';
        }elseif (isset ($_COOKIE['name'])) {
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
        <a href="9.1.php"><br><br>9.1<br></a></br>
        
        <?php echo 'Привет '. $name . '<br>'; ?>
        <br>
        <form method="post">
            
          Имя: <input name="name" />
          <input type="submit" name="submit" value="Отправить" />
        </form>
        
    </body>
</html>
