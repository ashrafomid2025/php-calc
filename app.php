
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: white;
            background-color: blue;
            width: 100%;
            padding: 14px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php

    // global varaible , built in
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
   echo $_SERVER["PHP_SELF"];
   echo "<br>";

   echo $_GET["name"];
   echo "<br>";
   echo $_GET["lastName"];
   
   
    

    /*
     $schoolName = "Austad Fazel";
     switch($schoolName){
        case "Sharifi":
            echo "<h1>You are a student at sharifi High School</h1>";
            break;
        case "Bibi Zahra":
            echo "<h1>You are a student at Bibi Zahra High School</h1>";
            break;
        case "Hotqul Anguri":
            echo "<h1>You are a student at Hotqul Anguri High School</h1>";
            break;
        case "Austad Fazel":
            echo "<h1>You are a student at Austad Fazel High School</h1>";
            break;
        default:
           echo "<h1>You entered the wrong school name</h1>";
          break;
     }
          if, switch , match
    */

    /*
    switch($num1){
        case 2:
             echo "<h1>the number is small</h1>";
             break;
        case 3:
             echo "<h1>the number is small</h1>";
             break;
        case 4:
             echo "<h1>the number is small</h1>";
             break;
        case 5:
             echo "<h1>the number is small</h1>";
             break;
        case 6:
             echo "<h1>the number is big</h1>";
    }
    if($num1 > 5){
        echo "<h1>the number is big</h1>";
    }
    else if($num1<= 5 ){
        echo "<h1>the number is small</h1>";
    }
    else{
        echo "<h1>Don't Know !</h1>";
    }
        */
    ?>
        
</body>
</html>