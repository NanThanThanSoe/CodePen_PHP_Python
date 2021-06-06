<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Function Exercises</h1>
        <?php
        
        //erercise 1
        
        $price = 100;
        $vat = 0.21;
        
        function calculateVat($price, $vat) {
            $calculatedPrice= ($price * $vat) + $price;
            return $calculatedPrice;
        }
        
        echo "Price : " . $price . "<br>";
        echo "Vat : " .$vat . "<br>";
        echo "Total price : " . calculateVat($price, $vat) . "<br>";
        
        echo "<hr>";
        
        //exercise 2
        
        $year = 2000;
        
        function isLeapYear($year) {
            if ($year % 400 == 0 || $year % 4 == 0) {
                return true;
            } else {
                return false;
            }
        }
        
        if (isLeapYear($year)) {
            echo "Year is a leap year";
        } else {
            echo "Year is not a leap year";
        }
        
        echo "<hr>";
        
        //exercise 3
        $num1 = 4;
        $num2 = 5;
        
        function addNumbers($num1, $num2) {
            return $num1 + $num2;
        }
        
        function subtractNumbers($num1, $num2) {
            return $num1 - $num2;
        }
        
        function multiplyNumbers($num1, $num2) {
            return $num1 * $num2;
        }
        
        function divideNumbers($num1, $num2) {
            return $num1 / $num2;
        }
        
        echo "Addition of " . $num1 . " and " . $num2 . " is ". addNumbers($num1, $num2) . "<br>";
        echo "Subtraction of " . $num1 . " and " . $num2 . " is ". subtractNumbers($num1, $num2) . "<br>";
        echo "Multiplicity of " . $num1 . " and " . $num2 . " is ". multiplyNumbers($num1, $num2) . "<br>";
        echo "Division of " . $num1 . " and " . $num2 . " is ". divideNumbers($num1, $num2) . "<br>";
        
        
        echo "<hr>";
        
        //exercise 4
        $num3 = 7;
        $num4 = 9;
        
        function swapNumbers($num3, $num4) {
            $temp = $num3;
            $num3 = $num4;
            $num4 = $temp;
            
            echo 'After swapping num3 is ' . $num3 . " and num4 is " . $num4; 
        }
        
        swapNumbers($num3, $num4);
        
        echo "<hr>";
        
        
        //erercise 5
        
        $num5 = 8;
        
        function evenOrNot($num5) {
            if ($num5 % 2 == 0) {
                echo $num5 . " is even";
            } else {
                echo $num5 . " is not even";
            }
        }
        
        evenOrNot($num5);
        
        echo "<hr>";
        
        
        //exercise 6
        
        $num6 = 7;  //prime numbess are 3, 5, 7
        
        function isPrime($num6) {
            if ($num6 == 1) {
                return false;
            } else {
                for ($i = 2; $i < $num6/2; $i++) {
                    if ($num6 & $i == 0) {
                        return false;
                    }
                }
                return 1;
            }
        }
        
        
        if (isPrime($num6)) {
            echo $num6 . " is a prime.";
        } else {
            echo $num6 . " is not a prime.";
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>