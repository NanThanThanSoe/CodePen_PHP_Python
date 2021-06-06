<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <?php
        $cars= array("Audi" => 50.500, "BMW" => 40.700, "Mercedes" => 60.300);
        
        //var_dump($cars);
        //print_r($cars);
        
        //$cars1["Mercedes"] = 60.300;
        //echo $cars1["Mercedes"];
        
        foreach ($cars as $key => $value) {
            echo "My " . $key . " has " . $value . " mileage. <br>";
        }
        
        
        
        
        
        ?>
    </body>
</html>