<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Numbers</h1>
        <?php

        $firstNumber = 3;
        $secondNumber = 4;
        $thirdNumber = 3.65478;

        echo $thirdNumber + 9 + 6;
        echo "<br>";

        echo 3.1/6;
        echo "<br>";

        echo 4.5/2;
        echo "<br>";

        echo "Ceil: " . ceil($thirdNumber);
        echo "<br>";

        echo "Floor: " . floor($thirdNumber);
        echo "<br>";

        echo "is {$firstNumber} : integer " . is_int($firstNumber) . "<br>";
        echo "is {$thirdNumber} : integer " . is_int($thirdNumber) . "<br>";
        echo "is {$firstNumber} : float " . is_float($firstNumber) . "<br>";
        echo "is {$thirdNumber} : Numeric " . is_numeric($thirdNumber) . "<br>";


        echo "Dec to Bin: " . decbin(3);
        echo "<br>";
        echo "Bin to Dec: " . bindec(5);
        echo "<br>";
        echo "sqrt: " . sqrt(8) . "<br>";
        echo "abs: " . abs(-50+100) . "<br>";
        echo "pow: " . pow(10, 2) . "<br>";
        echo "mod: " . fmod(15/7, 5/6) . "<br>";
        echo "rand: " . rand(500, 600) . "<br>";
        echo $secondNumber = $secondNumber + 2;
        echo "<br>";
        echo $secondNumber += 3;
        echo "<br>";
        $secondNumber++;
        echo $secondNumber; 
        echo "<br>";
        $secondNumber--;
        echo $secondNumber;
        echo "<br>";
                
        ?>

        Increment: <?php $secondNumber++; echo $secondNumber; ?>

        Decrement: <?php $secondNumber--; echo $secondNumber;   ?>
    </body>
</html>