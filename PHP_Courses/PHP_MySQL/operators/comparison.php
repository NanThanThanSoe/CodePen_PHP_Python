<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Comparison Operators</h1>
        
        <?php
        
        // <  >  ==  !=  <>  === (identical)   <=  >= 
        
        // spaceship operator   <=>    (multiply comparison and return value depending on value left an d right )
        //if value on left < right, return -1
        //left = right, return 0
        //left > right, return 1
        //  2<=>2    , 0, 3<=>2,  1,   1<=>2  , -1
        
        $x = 15;
        $y = 16;
        
        if ($x < $y) {
            echo "This is true.";
        } else {
            echo "This is false.";
        }
      
        
        
        
        
        
        ?>

        
        
    </body>
</html>