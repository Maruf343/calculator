<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'calculation.php';
        if(isset($_POST["btn"])){
            $num1=$_POST["number1"];
            $num2=$_POST["number2"];
            $operator=$_POST["operator"];
            $r = new calculation($num1,$num2,$operator);
        }
    
    ?>


    <form action="" method="post">
        <input type="text" name="number1" placeholder="enter a number">
        <input type="text" name="number2" placeholder="enter another number">
        <select name="operator">
            <option value="">select operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" value="<?php
            if(isset($_POST["btn"])){
                echo $r;
            }
            ?>">
        <input type="submit" name="btn">
    </form>
</body>
</html>