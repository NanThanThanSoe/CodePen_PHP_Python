<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>User define functions</h1>
        <?php

       
        function welcome() {
            echo "Welcome to PHP course. <br>";
        }

        welcome();
        welcome();
        welcome();

        ?>
        <hr>
        <?php 

        function addition() {
            $a =5;
            $b = 2;
            $c = $a + $b;

            echo "Addition is {$c} <br>";
        }

        addition();
        addition();
        addition();
        addition();

        echo "<hr>";


        function addition_using_function_parameter($x, $y) {
            $result = $x + $y;
            echo "addition using function parameter is: {$result} <br>";
        }

        addition_using_function_parameter(8,9);
        addition_using_function_parameter(6, 10);
        addition_using_function_parameter(600, 89);

        echo "<hr>";

        function addition_using_return($p, $q) {
            $result = $p + $q;
            return $result;
        }

        $res = addition_using_return(56, 78);
        $res1 = addition_using_return($res, 78);
        echo $res . "<br>";
        echo $res1 . "<br>";





        ?>





    </body>
</html>