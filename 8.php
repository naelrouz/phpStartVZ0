<?php
        echo '<pre>';
        print_r($_POST);
        print_r($_FILES);
        echo '</pre>';

//include 'functions/fun8.php';
        if(isset($_POST['submit'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
//        var_dump(!empty($a));
//        var_dump(!empty($b));
//        var_dump(!empty($c));
        
        if(!empty($a) && !empty($b) && !empty($c)){   
            echo $a.'<br>';
            echo $b.'<br>';
            echo $c.'<br>';
        }
        
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
        <form action="8.php" method="post" enctype="multipart/form-data">
            <!--input type="hidden" name="flag" value="1"-->
            A:<input type="text" name="a"><br>
            B:<input type="text" name="b"><br>
            C:<input type="text" name="c"><br>
            Файл:<input type="file" name="file"><br>
            <input type="submit" value="Submit" name="submit">
        </form>
        

</body>
</html>