<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Array Functions</h1>
        <?php

        $color = array('red', 'green', 'blue');

        array_pop($color);
        array_pop($color);
        //print_r($color) . "<br>";
        array_push($color, 'black', 'pink');
        print_r($color);
        echo "<br>";



        $numbers = array(13, 45, 67, 89, 5, 7);

        echo "Total sum: " . count($numbers);
        echo "<br>";

        echo "Max: " . max($numbers) . "<br>";

        echo "Min: " . min($numbers) . "<br>";

        echo "Is 89 in array: " . in_array(89, $numbers) . "<br>";

        echo "Sort: " . sort($numbers) . "<br>";

        echo "Structure of array: " . print_r($numbers) . "<br>";

        echo "Resort: " . rsort($numbers) . "<br>";

        echo "Restructure of array: " . print_r($numbers) . "<br>";

        $quote = array('Never', 'give', 'up', 'in', 'life');

        echo "Implode: " . implode(" ", $quote) . "<br>";

        $quo = "Never give up in life";

        print_r(explode(" ", $quo));



        echo "<br>";
       
        echo "<br>";


        
        ?>
    </body>
</html>