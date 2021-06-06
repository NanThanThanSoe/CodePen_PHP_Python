<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <?php
        $x = 8;
        $y = 7;
        
        $z = ($x + $y) * 5;
        
        echo "The totle is  " . $z;
        echo "<br>";
        
        
        $price = 100;
        $vat = 0.21;
        $totalPrice = ($price * $vat) + $price;
        echo "Price: " . $price . "<br>";
        echo "VAT: " . $vat . "<br>";
        echo "Total Price: " . $totalPrice . "<br>";
        
        
        $x = 4;
        $y = 9;
        $z = 4;
        $average = ($x + $y + $z) / 3;
        
        echo number_format($average, 2, ',', ' ');
        
            
        
        echo "<br>";
        
        
        $countries = array("Netherlands" => "Amsterdam", "Germany" => "Berlin", "Thailand" => "Bangkok", "Denmark" => "Copenhagen", "Canada" => "Toronto");
        
        foreach ($countries as $key => $value) {
            echo "The capital of " . $key . " is " . $value . ".<br>";
        }
        
        
        $cm = 150;
        $cmToInch = $cm * 0.39;
        echo $cm . " centimeters is " . $cmToInch . " inch. <br>";
        
        
        $expenses = array(40, 70, 20, 85, 40);
        $totalAmount = 0;
        $amountOfExpenses = 0;
        
        foreach ($expenses as $expense) {
            $totalAmount = $expense + $totalAmount;
            $amountOfExpenses = $amountOfExpenses + 1;
        }
        
        echo "My " . $amountOfExpenses . " biggest expenses were " . $totalAmount;
        echo "<br>";
        
        
        $weather = array("Rain", "Sunshine", "Cloud", "Hail", "Sleet", "Snow", "Wind");
        
        echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came sunshine with a few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] . ".";
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>