<?php
session_start();
//var_dump($_POST);
$answer1 = $_POST['answer1'];

$_SESSION['answer1'] = $answer1;

//echo $_SESSION['answer1'];
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
        <title>Впрос 2</title>
    </head>
    <body>
       <p>Вопрос</p>
         <p>2+2</p>
         <form action="10_3.php" method="post">
             <input type="text" name="answer2">
             <input type="submit" name="submit">
             
         </form>
    </body>
</html>
