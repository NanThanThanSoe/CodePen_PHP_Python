<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Array functions</h1>
        <?php
        
        //array functions
        
        $personalInfo = array("Name" => "Nan", "Age" => 27, "City" => "Aachen");
        
        $moreInfo = array("State" => "NH", "Weight" => 65);
        
        $personalInfo = array_merge($personalInfo, $moreInfo);
        
        foreach ($personalInfo as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
        
        print_r($personalInfo);
        
        
        echo "<br>";
        
        //print only key
        
        print_r(array_keys($personalInfo));
        
        echo "<br>";
        
        //print only values
        print_r(array_values($personalInfo));
        
        echo "<br>";
        
        
        echo "<hr>";
        
        
        //add value in array
        $cars = array("Volkswagen", "Audi", "Mercedes");
        
        array_push($cars, "Volvo");
        
        
        print_r($cars);
        
        
        echo "<br>";
        
        //search inside of an array
        
        echo array_search("Mercedes", $cars);
        
        
        echo "<br>";
        
        
        //count the number of items in array
        
        echo count($cars);
        
        
        
        
        
        
        
        
        
        
        
        
       
        
        
        ?>
    </body>
</html>