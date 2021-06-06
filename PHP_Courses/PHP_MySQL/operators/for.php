<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>For loop</h1>
        
        <?php
        
        // for (initialization,; condition; counter)
        
        // initialization - brginning of the loop
        //condition - opt 1 if true, execute opt2 if false, stop
        
        //counter - evaluated at the end of every loop
        
        for ($x = 1; $x <= 10; $x++) {
            echo "The number is {$x} <br>";
        }
        
        echo "<hr>";
        
        $x = 1;
        while ($x <= 10) {
            echo "The number is {$x} <br>";
            $x++;
            
        }
        
        echo "<hr>";
        
        //go to tyhe bank at 1 january
        //want to depost 100 dollar
        //interst rate is 5%
        //withdrawl it after 5 years
        
        
        $deposit = 1000;
        $interest = 0.05;
        
        for ($year = 1; $year <= 5; $year++) {
            $deposit += ($deposit * $interest);
            echo "Total amount after " . $year . " year is " . $deposit . "<br>";
        }
        
        
        
        
        ?>

        
        
    </body>
</html>