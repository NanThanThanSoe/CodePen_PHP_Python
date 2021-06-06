<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <?php
        
        $car1 = "BMW";
        $car2 = "Audi";
        $car3 = "Mercedes";
        
        $cars = array("BMW", "Audi", "Mercedes");
        $cars2 = array("Volve", "Chevy", "Volkswagen");
        
        echo $cars[1];
        echo "<br>";
        
        $mycar = array("Audi", 2016, 75.304);
        var_dump($mycar);
        
        echo "<br>";
        print_r($mycar);
        echo "<br>";
        
        $cars = array_merge($cars, $cars2);
        var_dump($cars);
        
        echo "<br>";
        
        print_r($cars);
        
        
        
        ?>
    </body>
</html>