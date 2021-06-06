<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>local variable</h1>
        <?php

        $myNumber = 12345;

        function addition() {
            $a =5;
            $b = 2;
            $c = $a + $b;

            echo "Addition is {$c} <br>";
        }

        addition();

        // echo $a;  local variable cant access outside of function
       
        echo "<br>";


        
        ?>
    </body>
</html>