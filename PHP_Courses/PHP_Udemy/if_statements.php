<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>If statements</h1>
        <?php

        $weather = "raining";
        if ($weather == "Sunny") {
            echo "Weather is pleseant <br>";
        } elseif ($weather != "Sunny") {
            echo "Weather is not pleseant <br>";
        } else {
            echo "Weather is undefined <br>";
        }


        $bought_product = true;  //true is 1, false is 0
         if ($bought_product == false) {
            echo "<h1>Thank you!</h1> <br>";
            echo "Your product will be dispatched soon. <br>";
         } else {
            echo "<h1>Please wait!</h1> <br>";
            echo "Your payment is in procceding <br>";
         }



         $a = 4;
         $b = 2;   //try 2, 0 to see different results
         $c = "can no be out";

        //if ($b  > 0) {
        if ($b < 5 && $a > 0) {
            $c = $a/$b;
         }

         echo $c;


       
        echo "<br>";
        echo "<br>";
        echo "<br>";



        
        ?>
    </body>
</html>