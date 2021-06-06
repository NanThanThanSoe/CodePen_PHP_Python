<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
       <h1>Exercies Built In Functions</h1>
        <?php
        
        //exercise 1
        
        $numbers = array("Milk" => 2, "Cheese" => 4, "7-up" => 3);
        
        arsort($numbers);
        
        print_r($numbers);
        
        echo "<br>";
        
        echo "<hr>";
        //exercise 2
        
        $targetDays = mktime(0, 0, 0, 07, 07, 2021);
        
        $today = time();
        
        $differenceDays = ($targetDays - $today);
        
        $days = (int)($differenceDays / 86400); 
        
        echo "Days till next birthday: " . $days . " days! ";
        
        echo "<br>";
        
        echo "<hr>";
        
        //exercise 3
        
        
        $randNumber = rand(0, 100) / 10;
        
        echo $randNumber;
        echo "<br>";
        
        
        
        echo "<hr>";
        
        
        //exercise 4
        
        $str = "My name is Nan. I am 27 years old and I live in Aachen. I'm single......";
        
        function lowercaseCheck($str) {
            echo strtolower($str);
        }
        
        lowercaseCheck($str);
        
        echo "<hr>";
        
        
        //exercise 5
        
        $punctuation = 0;
        
        function searchText($str, $punctuation) {
            for ($i=0; $i < strlen($str); $i++) {
                if ($str[$i] == ".") {
                    $punctuation++;
                }
            }
            
            echo "The text has " . $punctuation . " punctuation";
        }
        
        searchText($str, $punctuation);
        
        
        
        echo "<hr>";
        
        
        //exercise 6
        
        $onlyNumbers = array(8,9,5,6,7,4,3,2,45,6,733,44,55,88,90);
        
        echo "The lowest value is " . min($onlyNumbers) . " and the highest value is " . max($onlyNumbers);
        
        echo "<hr>";
        
        
        
        //exercise 7
        
        echo str_repeat($str, 8); //8 times to repeat
        
        
        
        
        
        
        
        
        
        
        echo "<br>";
        
        
        
        
        
        
       
        
        
        ?>
    </body>
</html>