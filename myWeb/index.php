<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scorpio php</title>
</head>
<body>
    <?php
    
    echo "Hello Bubrak!"."<br>"; 
    $name = "Bubrak Sher";
    $num = 5;
    for($i = 0; $i < $num; $i++)
    {
        echo "my name is". " ". $name . " and number: " .$i."<br>"; 
    }
    
    while($i < 10)
    {
        echo "my name is". " ". $name . " and number: " .$i."<br>";
        $i++;
    }

    do
    {
        echo "my name is". " ". $name . " and number: " .$i."<br>";
        $i++;
    }while($i < 15);

    $cars[0] = "BMW";
    $cars[1] = "Volvo";
    $cars[2] = "Mazda";
    $cars[3] =  "Ford";

    foreach($cars as $CARS)
    {
        echo "my name is". " ". $name . " and car: " .$CARS."<br>";
    }


    $animals = array("Elephant", "Monkey", "Cow", "Tiger");

    foreach($animals as $ANIMALS)
    {
        echo "Animals name is ". " ". $ANIMALS ."<br>";
    }

    $Food['Tiger'] = "Meat";
    $Food['Cow'] = "Grass";
    $Food['Elephant'] = "Banana";
    $Food['Monkey'] = "Bananaa";

    foreach($animals as $ANIMALS)
    {
        $j = 0;
        echo "Animals name is ". " ". $ANIMALS ."And Food: ".$Food[$ANIMALS] ."<br>";
        $j++;
    }

    function add_it($a, $b)
    {
        return $a + $b;
        
    }

    echo add_it(12, 13);

    


    ?>
</body>
</html>