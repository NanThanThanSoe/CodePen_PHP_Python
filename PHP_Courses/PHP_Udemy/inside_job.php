<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Inside job</h1>
        <?php

        $numbers = array(8,25,45,96,78,44,500);
        print_r($numbers);
        echo "<br>";

        echo current($numbers) . "<br>";
        //echo next($numbers) . "<br>";

        next($numbers);
        echo current($numbers) . "<br>";

        next($numbers);
        echo current($numbers) . "<br>";

        next($numbers);
        next($numbers);
        echo current($numbers) . "<br>";

        next($numbers);
        echo current($numbers) . "<br>";


        reset($numbers);  //if reset, back to index 0
        echo current($numbers) . "<br>";

        end($numbers);  //the last index of array
        echo current($numbers) . "<br>";

        next($numbers); //get no result
        echo current($numbers) . "<br>";





       
        echo "<br>";


        
        ?>
    </body>
</html>