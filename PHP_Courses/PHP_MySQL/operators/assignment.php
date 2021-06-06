<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Assignment Operators</h1>
        
        <?php
        
        //+= -= 
        //*= multiply and assign
        // /= divide and assign 
        // .=  concatenate and assign
        
        $x = 5;
        
       // $x = $x + 5;
        
        $x += $x;
        
        echo $x . "<br>";
        
        $x -= $x+40;
        echo $x . "<br>";
        
        $x /= $x;
        echo $x . "<br>";
        
        
        $y = 10;
        $x .= $y;
        
        echo $x . "<br>";
        
        
        $str = "Dary is an old man";
        
        $str .= " because he is 24 years old.";
        
        echo $str . "<br>";
        
       
        
        
        
        
        
        ?>

        
        
    </body>
</html>