<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>global variable</h1>
        <?php

        $myNumber = 12345;

        function addition() {
            global $myNumber;  //need to define in global
            $a =5;
            $b = 2;
            $c = $a + $b;

            echo  "New global addition". ($myNumber + $c). "<br>";  //global
            echo "Addition is {$c} <br>";
        }

        addition();

        // echo $a;  local variable cant access outside of function
       
        echo "<br>";


        
        ?>
    </body>
</html>