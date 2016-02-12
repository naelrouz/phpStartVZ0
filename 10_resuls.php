<?php
session_start();
var_dump($_POST);
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_POST['answer3'];
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
        <title>Результат</title>
    </head>
    <body>
        <?php
       
        echo ($answer1 == 3) ? ' да ' : ' не верно ';
        echo ($answer2 == 4) ? ' да ' : ' не верно ';
        echo ($answer3 == 5) ? ' да ' : ' не верно ';
        
        echo "<br>". session_id()." ";
        ?>
        <p></p>
    </body>
</html>
