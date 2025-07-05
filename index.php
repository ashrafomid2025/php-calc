<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "post">
    <h1>Calculator</h1>
    <label for="number01">Number One</label>
    <input type="number" name= "number01">
    <label for="operator">Operator</label>
    <select name="operator">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <label for="number Two">Number Two</label>
    <input type="number" name = "number02">
    <button name ="submit">Calculate</button>
  </form>
  <?php
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1 = filter_input(INPUT_POST, "number01",FILTER_SANITIZE_NUMBER_FLOAT);
    $num2 = filter_input(INPUT_POST, "number02",FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST["operator"]);
    
    // error handler
    $error = false;
    if(empty($num1) || empty($num2) || empty($operator)){
        $error = true;
        echo "<p class ='calc-error'> Fill in All the fields</p>";

    }
    if(!is_numeric($num1) || !is_numeric($num2)){
        $error = true;
        echo "<p class ='calc-error'> Only write Numbers</p>";
    }

    // calculate the number if there is no error
    if(!$error){
        $value = 0;
        switch($operator){
            case "plus":
                $value = $num1 + $num2;
                break;
            case "minus":
                $value = $num1 - $num2;
                break;
            case "multiply":
                $value = $num1 * $num2;
                break;
            case "divide":
                $value = $num1 / $num2;
                break;
            default:
            echo "<p class ='calc-error'> Something went horribly wrong</p>";
            break;
        }
        echo "<p class ='calc-result'> Result: ". $value . "</p>";
    }
   }
  ?>
</body>
</html>