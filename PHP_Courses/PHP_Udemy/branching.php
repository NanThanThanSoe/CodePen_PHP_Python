<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>Branching statements</h1>
        <?php

        $names = array('nan', 'akar', 'tun', 'soe', 'lala', 'maung', 'roth', 'kiki', 'khaing');

        for ($i = 0; $i <= 8; $i++) {
            if ($names[$i] == "lala") {  
                //continue;  //no show lala
                break; //no continue start from lala
            }

            echo $names[$i] . "<br>";
        }
        //print_r($names);


       
        echo "<br>";


        
        ?>
    </body>
</html>