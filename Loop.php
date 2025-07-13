<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action=<?php echo $_SERVER["PHP_SELF"] ?>>
    <label for="">Name</label>    
    <input type="text" name = "name">
        <br>
        <label for="">Loop Counter</label>
        <input type="number" name = "loop">
        <br>
        <button>Submit</button>
    </form>
    <?php
     if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name = $_POST["name"];
        $count = $_POST["loop"];
        $number = 0;
        while($number< $count){
            echo "<h1> You are ". $name ."</h1>";
            $number++;
        }
     }
    ?>
</body>
</html>