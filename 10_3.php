<?php
session_start();
//var_dump($_POST);
$answer2 = $_POST['answer2'];

$_SESSION['answer2'] = $answer2;


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
        <title>Впрос 3</title>
    </head>
    <body>
        <p>Вопрос</p>
         <p>2+3</p>
         <form action="10_resuls.php" method="post">
             <input type="text" name="answer3">
             <input type="submit" name="submit">
             
         </form>
    </body>
</html>
