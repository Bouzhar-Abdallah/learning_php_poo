<?php 
    include '../includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../includes/calc.inc.php" method="post">
        <p>my own calculator</p>
        <input type="number" name="num1" placeholder="first number">
        <select name="oper" id="">
            <option value="add">addition</option>
            <option value="sub">substraction</option>
            <option value="div">division</option>
            <option value="mul">miltiplay</option>
        </select>
        <input type="number" name="num2" placeholder="second number">
        <button type="submit" name="submit">calculate</button>
    </form>
</body>
</html>