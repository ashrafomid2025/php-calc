<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calc.css">
</head>
<body>
    <form method = "post" action=<?php echo $_SERVER["PHP_SELF"] ?> >
        <label for="">First Num</label>
        <input required
         name ="num1" type="number" placeholder = "Enter the first number">
        <select name="operator" id="">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="module">%</option>
        </select>
        <label for="">Second Num</label>
        <input name = "num2" type="number" placeholder = "Enter the second Number">
        <button>Calculate</button>
    </form>
    <?php
     if($_SERVER["REQUEST_METHOD"] ==="POST"){
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operartor = $_POST["operator"];

        $error = false;
        if(empty($num1) || empty($num2) || empty($operartor)){
            $error = true;
            echo "<p class = 'error'>
              ALL INPUTS SHOULD BE FILL
            </p>";
        }
        if(!is_numeric($num1) || !is_numeric($num2)){
            $error = true;
            echo "<p class = 'error'>
              ALL inputs should be filled with number
            </p>";
        }
        if(!$error){
            $natija = 0;
            switch($operartor){
                case "plus":
                    $natija = $num1 + $num2;
                    break;
                case "minus":
                    $natija = $num1 - $num2;
                    break;
                case "multiply":
                    $natija = $num1 * $num2;
                    break;
                case "divide":
                    $natija = $num1 / $num2;
                    break;
                case "module":
                    $natija = $num1 % $num2;
                    break;
                default:
                    echo "<p>
                    Something went wrong
                    </p>";
            }
            echo "<p class = 'result'>".$natija . "</p>";
        }
     }
    
    ?>
</body>
</html>