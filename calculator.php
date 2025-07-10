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
        <label for="">First Number</label>
        <input name ="num1" type="number" placeholder = "Enter the first number">
        <select name="operator" id="">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
            <option value="module">%</option>
        </select>
        <label for="">Second Number</label>
        <input name = "num2" type="number" placeholder = "Enter the second Number">
        <button>Calculate</button>
    </form>
    
</body>
</html>