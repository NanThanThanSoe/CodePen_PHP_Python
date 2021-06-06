<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Constants</h1>
        <?php

        $name = 45;
        define("value_of_Pi", 3.14);  //cannot redefine or change the value later 
        define("value_of_Gravity", 9.8);

        echo "Pi value ". value_of_Pi;
        echo "<br>";
        echo "Gravity value " . value_of_Gravity;
        echo "<br>";


        
        ?>
    </body>
</html>