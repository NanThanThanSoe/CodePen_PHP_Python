<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Functions with return value</h1>
        
        <?php
        
        //pass by value
        
        $num1 = 10;
        $num2 = 15;
        
        function add($num1, $num2) {
            echo $num1 + $num2 ."<br>";
        }
        
        add($num1, $num2);
        
        
        //function with return value
        
        function add_return($num1, $num2) {
            return $num1 + $num2 ."<br>";
        }
        
        $res = add_return($num1, $num2);
        echo "The return value is {$res}";
        
        
        function subtract($num1, $num2) {
            echo "The number is " .  $num1 - $num2 . "<br>";
        }
        
        subtract($num1, $num2);
        
            
        //pass by reference
        $x = 10;
        function addByValue($x) {
            $x += 5;
        }
        
        function addByReference(&$x) {
            $x += 10;
        }
        
        addByValue($x);
        echo "The value is {$x} <br>";
        
        addByReference($x);
        echo "The value by reference is {$x} <br>";
        
        
        
        
        
        
        
        ?>

        
        
    </body>
</html>