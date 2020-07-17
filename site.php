<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $name = "Josh";
        // $school = "Giraffe Academy"; 
        // echo("<h1>$name's Site</h1>");
        // echo("<hr></hr>");
        // echo("<p>This is my site using php</p>");
        // echo strtolower($name);
        // echo strtoupper($name);
        // echo strlen($name);
        // echo str_replace("Giraffe", "Helio", $school);
        // echo substr($school, 8, 3);
            //Array//
        // $fruit = array("Apple", "Orange", "Banana");
        // $fruit[0];               would equal "Apple"
        // $grades = array("Jim"=>"A", "Bill"=>"B-", "Bob"=>"C+");
            //Associative Array//
        // $grades["Jim"];          would equal "A"
    ?>
    <form action="site.php" method="post">
    <!-- Get will make this value visible in the URL, use post method instead for secure info -->
        Name: <input type="text" name="name" required/>
        Age: <input type="number" name="age" required/>
        <input type="submit" />
    </form>
    Your Name is <?php echo $_POST["name"]?>
    Your Age is <?php echo $_POST["age"]?>

    <?php 
        function sayHi ($name){
            echo "Hello $name";
        }
        sayHi("Bill");
        sayHi("Bob");
        sayHi("John");
    ?>
</body>
</html>