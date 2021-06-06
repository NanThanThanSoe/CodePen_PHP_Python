<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>super global variable</h1>
        <?php

        //Super global variables

        //$GLOBAL
        //$_SERVER
        //$_REQUEST
        //$_FILES
        //$_SESSION
        //$_ENV
        //S_GET -> urls/links (user searching on a web)
        //$_POST  -> web forms (standard contact us form on a web)
        //$_COOKIE -> cookies (give user result by his previous track)

        $x = 75;
        $y = 25;

        function addition () {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        addition();
        print_r($GLOBALS);
        echo "<br>";

        echo $z;





       
        echo "<br>";


        
        ?>
    </body>
</html>