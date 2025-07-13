<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=<?php echo $_SERVER["PHP_SELF"] ?> method = "post">
        <input type="text" name = "name">
        <input type="number" name = "age">
        <button>POST</button>
    </form>
    <?php
      if($_SERVER["REQUEST_METHOD"] ==="POST"){
        $name =  $_POST["name"];
        $age = $_POST["age"];
        echo "<h1> You are ". $name . " and you are ". $age ."</h1>";
      }
    ?>
</body>
</html>