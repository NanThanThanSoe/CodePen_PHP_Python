<html>
    <head>
        <meta charset='utf-8'>
        <title>Document</title>
    </head>
    <body>
        <h1>static variable</h1>
        <?php

        function normalV () {
            $value = 1;
            echo "Normal: " . $value. "<br>";
            $value++;
        }

        normalV(); //1
        normalV(); //1
        normalV(); //1
        normalV(); //1
        normalV();

        echo "<hr>";



        function staticV() {
            static $value = 1;
            echo "Static: " . $value. "<br>";
            $value++;
        }

        staticV(); //1
        staticV(); //2
        staticV(); //3
        staticV();
        staticV();


       
        echo "<br>";


        
        ?>
    </body>
</html>