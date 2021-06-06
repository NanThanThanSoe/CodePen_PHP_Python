<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Arrays</h1>
        <?php

        $name = array('Nan', 'Berthold', 'Okka', 'Asgar');
        echo "My name is " . $name[0] . "<br>";

        $food = array('Pizza', 10, 15, array('Asian', 'French', 'Indian', 'German'), 'Pasta');

        echo $food[2] . "<br>";

        echo "I like " . $food[3][0] . " food." . "<br>";
        echo "I like " . $food[3][3] . " guys." . "<br>";
        
        ?>
        <pre>
            <?php
            $food[300] = "Apple";
            echo print_r($food); 
            echo "<br>";
            ?> 

        </pre>

        <?php

        $color = array("A" => "40", "B" => "Pizza");
        echo $color["B"];

        echo "<br>";



        $foos = array("Asian" => "Pizza", "Italian" => "Biryani");

        echo $foos["Asian"] . " is for " . $foos["Italian"] . "<br>";

        echo print_r($foos);

        echo "<br>";

        ?>

        
    </body>
</html>