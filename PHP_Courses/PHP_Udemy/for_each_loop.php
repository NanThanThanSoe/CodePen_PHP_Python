<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>For-each loops</h1>
        <?php

        $numbers = array(3,4,5,6,7,8,9,23,4,5,67,89,9,100);

        foreach ($numbers as $num) {
            echo "Numbers: {$num} <br>";
        }


        $food = array(
            "item_number" => 1050,
            "name" => "Pizza",
            "regin" => "Italy",
            "side_food" => "Pasta",
            "drink" => "cook",
            "package_price" => "OOPs"
        );

        foreach ($food as $key => $value) {

            $data = ucwords(str_replace("_", " ", $key));

            //echo "{$key} : {$value} <br>";

            //echo "{$data} : {$value} <br>";

            if ($key == "package_price") {
                if (is_numeric($value)) {  //can check is_bool, isset, nul=empty, is_null, is_int, is_float

                } else {
                    $value = "Cannot be determined. <br>";
                }
            }

            echo "{$data} : {$value} <br>";

        }


       
        echo "<br>";


        
        ?>
    </body>
</html>