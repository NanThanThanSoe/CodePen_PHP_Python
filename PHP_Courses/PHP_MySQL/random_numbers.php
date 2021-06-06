<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Random numbers</h1>
        <?php
        
        echo rand();  //number will change whenever refresh the browser
        echo "<br>";
        
        echo getrandmax();
        echo "<br>";
       
        
        echo "<hr>";
        
        echo rand(1,10);
        echo "<br>";
        
        
        $min = 1;
        $max = 10;
        echo rand($min, $max);
        
        
        echo "<br>";
        
        
        
        
        
        
       
        
        
        ?>
    </body>
</html>