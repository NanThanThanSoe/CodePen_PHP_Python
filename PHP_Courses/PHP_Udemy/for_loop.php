<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>For loops</h1>
        <?php
        echo "1 <br>";
        echo "2 <br>";
        echo "3 <br>";
        echo "4 <br>";
        echo "5 <br>";
        echo "6 <br>";
        echo "7 <br>";
        echo "8 <br>";
        echo "9 <br>";
        echo "10 <br>";
        echo "11 <br>";       


        //for (start, condition, increment)

        for ($i = 1; $i <= 10; $i++) {
            //echo $i . " is printing on screen" . "<br>";
            echo "{$i} is printing here <br>";
        }


        $N = 2;
        for ($i = 1; $i <= 20; $i++) {
            $result = $N * $i;
            echo $N . " * " . $i . " = " . $result . "<br>";
        }




        echo "<br>";
        ?>
    </body>
</html>