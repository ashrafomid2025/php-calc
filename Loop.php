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
    //   object js => store related data about something
    // php object => class 
    class Person{
        public $name;
        public $age;
        public $gender;
        public $dob;
        public function __construct($name, $age, $gender, $dob){
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
            $this->dob = $dob;
        }
    }




    $hatifInfo = new Person("Hatif", 20, "Male", "23/3/1998");


    foreach($hatifInfo as $key => $value){
        echo "<h1>". $key. ":" . $value ."</h1>";
    }
    

    class Car{
        public $color;
       public  $model;
        public function __construct($color, $model){
            $this->color = $color;
            $this-> model = $model;
        }
    }
    
    $myCar = new Car("Grey",2005);

    foreach($myCar as $key => $value){
        echo "<h2>". $key ." :" . $value. "</h2>";
    }

      
      

      
    











    

    ?>
</body>
</html>